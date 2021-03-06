<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('../../config/config.inc.php');
include('stringUtils.php');
include('dolibarr/DolibarrApi.php');  

function synchroProduct($id_product)
{
    $product_description = Configuration::get('product_description');
    var_dump($product_description);

    if ($product = Db::getInstance()->GetRow("select * from "._DB_PREFIX_."product where id_product = '".$id_product."'"))
    {
	    // retrieve params
	    $prefix_ref_product=Configuration::get('prefix_ref_product');
	    $prefix_ref_product = accents_sans("$prefix_ref_product"); 

        //retrieve product data
        $prix_produit_normal_HT=$product['price'];
        $active=$product['active'];
        $reference=$product['reference'];
        $reference=produits_caract("$reference");
        $en_vente=$product['active'];
        $barcode=$product['ean13'];
        //$datec=$product['date_add'];
        //$tms=$product['date_upd'];
        //$weight=$product['weight'];
     
        // find tva rate  
        $id_tax_rules_group=$product['id_tax_rules_group'];
        //var_dump($id_tax_rules_group);
        $donnees_id_tax_rules_group = Db::getInstance()->GetRow("select * from "._DB_PREFIX_."tax_rule where id_tax_rules_group = '".$id_tax_rules_group."'");
        //var_dump($donnees_id_tax_rules_group);
        $id_tax=$donnees_id_tax_rules_group['id_tax'];
        //var_dump($id_tax);
        $donnees_tax = Db::getInstance()->GetRow("select * from "._DB_PREFIX_."tax where id_tax = '".$id_tax."'");
        $vat_rate=$donnees_tax['rate'];
        echo "vat_rate : $vat_rate";
        $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);

        //find description
		$product_data = Db::getInstance()->GetRow("select * from "._DB_PREFIX_."product_lang where id_product = '".$id_product."' AND id_lang = '".Context::getContext()->language->id."'");

		if ($product_description == '0') {
			$description = $product_data['description_short'];
		} else {
			$description = $product_data['description'];
		}

        $label = $product_data['name'];
        // RECUPERATION DES DONNEES DU PRODUIT DANS LA BASE ARTICLES *********************************************

        // RECUPERATION ID IMAGE ****************************************************
        //$donnees_id_image = Db::getInstance()->GetRow("select * from ".$prefix_presta."image where id_product='".$product_id."'");
        //$id_image=$donnees_id_image['id_image'];
        // FIN RECUPERATION ID IMAGE ****************************************************
  

        $dolibarr = Dolibarr::getInstance();

		// Check if already exists in Dolibarr
		$exists = $dolibarr->getProduct($prefix_ref_product.$id_product);
		
		$product = new DolibarrProduct();
		$product->ref_ext = $prefix_ref_product.$id_product;
        $product->ref = $reference;
        $product->label = $label;
		$product->description = $description;
		$product->price_net = $prix_produit_normal_HT;
		$product->vat_rate = $vat_rate;

		if ($exists["result"]->result_code == 'NOT_FOUND')
        {
			// Create new product
			echo "Create new product : <br>";
			$result = $dolibarr->createProduct($product);
			if ($result["result"]->result_code == 'KO')
            {
				echo "Erreur de synchronisation : ".$result["result"]->result_label;
			}
		} else
        {
			// Update product
			echo "update product<br>";
			$oldProduct = $exists["product"];
			$product->id = $oldProduct->id;
			$result = $dolibarr->updateProduct($product);
			if ($result["result"]->result_code == 'KO')
            {
				echo "Erreur de synchronisation : ".$result["result"]->result_label;
			}
		}	

    }
}

if (Tools::isSubmit('id_product'))
{
    $id_product=Tools::getValue('id_product');
    synchroProduct($id_product);
}
?>
