<?php
//**************************************  DEBUT   CRON   *******************************************************

// RECUPERATION DE LA CONFIG **********************************************
include('../../config/config.inc.php');
// RECUPERATION DE LA CONFIG **********************************************

// CONNEXION AUTOMATIQUE A LA BASE PRESTA **************************************************
mysql_connect(_DB_SERVER_,_DB_USER_,_DB_PASSWD_); 
mysql_select_db(_DB_NAME_);
mysql_query("SET NAMES UTF8");
// FIN CONNEXION AUTOMATIQUE A LA BASE PRESTA **************************************************

// FONCTIONS *********************************************************
function accents_majuscules($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine=strtoupper($chaine);
    return $chaine;
    }
function accents_minuscules($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    return $chaine;
    }
function accents_sans($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    $chaine = str_replace( "�", "o", $chaine);
    $chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);
    $chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);
    $chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);
    $chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "i", $chaine);
    $chaine = str_replace( "�", "u", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "u", $chaine);$chaine = str_replace( "�", "y", $chaine);$chaine = str_replace( "�", "y", $chaine);
    $chaine = str_replace( "�", "n", $chaine);$chaine = str_replace( "�", "c", $chaine);$chaine = str_replace( "�", "p", $chaine);$chaine = str_replace( "�", "y", $chaine);$chaine = str_replace( "�", "ae", $chaine);
    $chaine = str_replace( "�", "oe", $chaine);$chaine = str_replace( "�", "D", $chaine);$chaine = str_replace( "�", "o", $chaine);
    $chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);
    $chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "E", $chaine);$chaine = str_replace( "�", "E", $chaine);$chaine = str_replace( "�", "E", $chaine);$chaine = str_replace( "�", "E", $chaine);
    $chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);
    $chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "I", $chaine);$chaine = str_replace( "�", "I", $chaine);$chaine = str_replace( "�", "I", $chaine);$chaine = str_replace( "�", "I", $chaine);
    $chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "Y", $chaine);
    $chaine = str_replace( "�", "N", $chaine);$chaine = str_replace( "�", "C", $chaine);$chaine = str_replace( "�", "AE", $chaine);
    $chaine = str_replace( "�", "OE", $chaine);$chaine = str_replace( "�", "D", $chaine);
    return $chaine;
    }
function tel_cacateres($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", "", $chaine);$chaine = str_replace( "-", "", $chaine);$chaine = str_replace( ".", "", $chaine);$chaine = str_replace( " ", "", $chaine);$chaine = str_replace( ",", "", $chaine);$chaine = str_replace( "_", "", $chaine);
    return $chaine;
    }
function produits_caract($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    $chaine = str_replace( "<p>�</p>", "<br />", $chaine);
    $chaine = str_replace( "</p>", "", $chaine);
    return $chaine;
    }
// FIN FONCTIONS *********************************************************

// RECUPERATION AUTOMATIQUE DE DONNEES **************************************************
$date_update=date("Y-m-d");
$heure_update=date("H:i:s");
$date_update="$date_update $heure_update";
setlocale (LC_TIME, 'fr_FR.utf8','fra');
$date_synchro=(strftime("%A %d %B %Y"));
$date_synchro=mb_strtoupper($date_synchro);
$heure_synchro=(strftime("%H:%M:%S"));
$URL  = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$URL .= ($_SERVER['QUERY_STRING']!='')? '?' : '';
$URL .= $_SERVER['QUERY_STRING'];
$nb = strpos($URL,'/');
$URL=substr($URL,0,$nb);
$uri='http://'.$URL.'';
$serveur_presta=_DB_SERVER_;
$admin_presta=_DB_USER_;
$mdp_presta=_DB_PASSWD_;
$base_presta=_DB_NAME_;
$prefix_presta=_DB_PREFIX_;
$donnees_lang = Db::getInstance()->GetRow("select * from ".$prefix_presta."configuration where name='PS_LANG_DEFAULT'");
$lang=$donnees_lang['value'];
// FIN RECUPERATION AUTOMATIQUE DE DONNEES **************************************************

// RECUP VERSIONS PRESTA *****************************************************
$version_presta=_PS_VERSION_;
$version_presta=substr($version_presta,0,3);
// FIN RECUP VERSIONS PRESTA *****************************************************

// RECUPERATION DES PARAMETRES *************************************** 
$donnees_recup_des_bases = Db::getInstance()->GetRow("select * from P2D_param where id=1");
$serveur_doli=$donnees_recup_des_bases['serveur_doli'];
$admin_doli=$donnees_recup_des_bases['admin_doli'];
$mdp_doli=$donnees_recup_des_bases['mdp_doli'];
$base_doli=$donnees_recup_des_bases['base_doli'];
$prefix_doli=$donnees_recup_des_bases['prefix_doli'];
$libelle_port=$donnees_recup_des_bases['libelle_port'];
    $chaine=$libelle_port;    
    $chaine= accents_sans("$chaine");   
    $libelle_port=$chaine;
$code_article_port=$donnees_recup_des_bases['code_article_port'];
$label=$donnees_recup_des_bases['prefix_ref_client'];
    $chaine=$label;    
    $chaine= accents_sans("$chaine");   
    $label=$chaine;
$option_image=$donnees_recup_des_bases['option_image'];
$uri=$donnees_recup_des_bases['uri'];
$decremente=$donnees_recup_des_bases['decremente'];                            
$numero_de_commande=$donnees_recup_des_bases['numero_de_commande'];
$mail_achat=$donnees_recup_des_bases['mail_achat'];                 
$valide=$donnees_recup_des_bases ['valide'];
$memo_id=$donnees_recup_des_bases['memo_id'];                   
$stock_doli=$donnees_recup_des_bases['stock_doli'];

// CALCUL DU NOMBRE DE COMMANDES A TRAITER **************************************
$nb_commandes=$donnees_recup_des_bases['nb_commandes'];
$req_max_id_commandes="select max(id_order) from ".$prefix_presta."orders";
$req_max_id_commandes=mysql_query($req_max_id_commandes);
$id_max_commandes=mysql_result($req_max_id_commandes,0,"max(id_order)");
if ($nb_commandes!=0)
    {
    $nb_commandes=$nb_commandes-1;
    $nb_commandes=$id_max_commandes-$nb_commandes;
    }
else
    {
    $nb_commandes=0;
    }
// FIN CALCUL DU NOMBRE DE COMMANDES A TRAITER **************************************

// CALCUL DU NOMBRE DE CLIENTS A TRAITER ************************************
$nb_clients=$donnees_recup_des_bases['nb_clients'];
$req_max_id_clients="select max(id_customer) from ".$prefix_presta."customer";
$req_max_id_clients=mysql_query($req_max_id_clients);
$id_max_clients=mysql_result($req_max_id_clients,0,"max(id_customer)");
if ($nb_clients!=0)
    {
    $nb_clients=$nb_clients-1;
    $nb_clients=$id_max_clients-$nb_clients;
    }
else
    {
    $nb_clients=0;
    }
// FIN CALCUL DU NOMBRE DE CLIENTS A TRAITER ************************************
// FIN RECUPERATION DES PARAMETRES ***************************************

// CONNEXION A DOLIBARR *************************************
mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
mysql_select_db("$base_doli");
mysql_query("SET NAMES UTF8");
// FIN CONNEXION A DOLIBARR *************************************

// MODIFICATION DE TABLES DE DOLIBARR *************************************************
mysql_query("ALTER TABLE ".$prefix_doli."commande DROP INDEX uk_commande_ref");
//mysql_query("ALTER TABLE ".$prefix_doli."product ADD INDEX uk_commande_ref") Or die ( mysql_error() );
// mysql_query("ALTER TABLE ".$prefix_doli."facturedet DROP INDEX idx_facturedet_fk_facture") Or die ( mysql_error() );
// mysql_query("ALTER TABLE ".$prefix_doli."product MODIFY rowid bigint(30) AUTO_INCREMENT");
// mysql_query("ALTER TABLE ".$prefix_doli."categorie_product MODIFY fk_product bigint(30)");
mysql_query("ALTER TABLE ".$prefix_doli."product MODIFY ref varchar(255)");
mysql_query("ALTER TABLE ".$prefix_doli."product DROP INDEX uk_product_ref"); 
//mysql_query("ALTER TABLE ".$prefix_doli."product ADD INDEX uk_product_ref") Or die ( mysql_error() );
mysql_query("ALTER TABLE ".$prefix_doli."categorie DROP INDEX uk_categorie_ref");
//mysql_query("ALTER TABLE ".$prefix_doli."categorie ADD INDEX uk_categorie_ref") Or die ( mysql_error() );
// FIN MODIFICATION DE TABLES DE DOLIBARR *************************************************

// CONNEXION A PRESTASHOP *************************************
mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
mysql_select_db("$base_presta");
mysql_query("SET NAMES UTF8");     
// FIN CONNEXION A PRESTASHOP *************************************

// DEFINITION DE DONNEES *****************************************
$rang=0;
$total_commandes_traitees=0;
$total_article=0;
$boucle=0;
$entity=1;
$fk_cond_reglement=6;
$fk_mode_reglement=6;
$source=1;
$fk_cond_reglement_commande=1;
$model_pdf='azur';
$model_pdf_facture='oursin';
$model_pdf_commande="einstein";
$type_doli=2;
$active=1;
// FIN DEFINITION DE DONNEES *****************************************

$sql_commande="select * from ".$prefix_presta."orders where id_order>='$nb_commandes' order by id_order asc";
$result_commande = mysql_query($sql_commande) or die($sql_commande."<br />\n".mysql_error());
while ($donnees_orders = mysql_fetch_array($result_commande))
    {
    $total_commandes_traitees=$total_commandes_traitees+1;
    $id_order=$donnees_orders['id_order'];
    $donnees_orders = Db::getInstance()->GetRow("select * from ".$prefix_presta."orders where id_order='".$id_order."'");
    $id_customer=$donnees_orders['id_customer'];
    $dateorder=$donnees_orders['date_add'];
    $ref_client_doli="$label$id_order";
    $date_propal=$donnees_orders['date_add'];
    $date_commande=$donnees_orders['date_add'];
    $date_facture=$donnees_orders['date_add'];
    $total_a_payer_TTC=$donnees_orders['total_paid'];
    $total_a_payer_TTC=sprintf("%.2f",$total_a_payer_TTC);
    $total_paid_real_TTC=$donnees_orders['total_paid_real'];
    $total_paid_real_TTC=sprintf("%.2f",$total_paid_real_TTC);

    if ($version_presta<"1.5")
        {
    
        // RECUPERATION TOTALE TAXES DE LA COMMANDE ***************************************************
        $donnees_total_taxes = Db::getInstance()->GetRow("select * from ".$prefix_presta."order_tax where id_order='".$id_order."'");
        $total_taxes = $donnees_total_taxes['amount'];
        $total_taxes=sprintf("%.2f",$total_taxes);
        $tax_rate_commande = $donnees_total_taxes['tax_rate'];
        $tax_rate_commande=sprintf("%.2f",$tax_rate_commande);
        $taux_taxe_produits=$tax_rate_commande/100;
        $taux_taxe_produits=$taux_taxe_produits+1;
        $taux_taxe_produits=sprintf("%.2f",$taux_taxe_produits);
        // FIN RECUPERATION TOTALE TAXES DE LA COMMANDE ***************************************************
        
        // CALCUL MONTANT TOTAL HT **************************************
        $total_a_payer_HT=$total_a_payer_TTC/$taux_taxe_produits;
        $total_a_payer_HT=sprintf("%.2f",$total_a_payer_HT);
        // CALCUL MONTANT TOTAL HT **************************************
    
        // CALCUL TOTAL TAXES ************************************************
    //     $total_taxes=$total_a_payer_TTC-$total_a_payer_HT;
    //     $total_taxes=sprintf("%.2f",$total_taxes);
        // FIN CALCUL TOTAL TAXES ************************************************
        
        // CALCUL DU PORT ***********************************
        $total_shipping_TTC = $donnees_orders['total_shipping'];
        $total_shipping_TTC=sprintf("%.2f",$total_shipping_TTC);
        $carrier_tax_rate = $donnees_orders['carrier_tax_rate'];
        $carrier_tax_rate=sprintf("%.2f",$carrier_tax_rate);
        $taux_carrier_tax_rate=$carrier_tax_rate/100;
        $taux_carrier_tax_rate=$taux_carrier_tax_rate+1;
        $taux_carrier_tax_rate=sprintf("%.2f",$taux_carrier_tax_rate);
        $total_shipping_HT=$total_shipping_TTC/$taux_carrier_tax_rate;
        $total_shipping_HT=sprintf("%.2f",$total_shipping_HT);
        // FIN CALCUL DU PORT ***********************************
        
        }                            
    if ($version_presta>="1.5")                
        {
        $total_a_payer_HT=$donnees_orders['total_paid_tax_excl'];
        $total_a_payer_HT=sprintf("%.2f",$total_a_payer_HT);
        $total_taxes = $total_a_payer_TTC-$total_a_payer_HT;
        $total_taxes=sprintf("%.2f",$total_taxes);
    
        // CALCUL DU PORT *********************************** 
        $total_shipping_TTC = $donnees_orders['total_shipping_tax_incl'];
        $total_shipping_TTC=sprintf("%.2f",$total_shipping_TTC);
        $total_shipping_HT = $donnees_orders['total_shipping_tax_excl'];
        $total_shipping_HT=sprintf("%.2f",$total_shipping_HT);
        $carrier_tax_rate = $donnees_orders['carrier_tax_rate'];
        $carrier_tax_rate=sprintf("%.2f",$carrier_tax_rate);
        // FIN CALCUL DU PORT ***********************************
        
        }
    $total_shipping_TVA = $total_shipping_TTC - $total_shipping_HT;
    $total_shipping_TVA=sprintf("%.2f",$total_shipping_TVA);
    $type_paiement=$donnees_orders['payment'];
        $chaine=$type_paiement;    
        $chaine= accents_minuscules("$chaine");   
        $type_paiement=$chaine;
    $valid=$donnees_orders['valid'];
    
    // FIN RECUPERATION DONNEES DE LA COMMANDE ************************************

// DETERMINATION DU STATUT DE LA COMMANDE **************************************
$creer_facture="non";
$statut_propal=4;       //** Propal valid�e sign�e
$statut_commande=1;     //** Commande en Valid�
$commande_facturee=0;   //** Commande NON factur�e
$statut_facture=0;      //** Facture en brouillon
$paye=0;                //** Facture non pay�e
$facture=0;             //** Commande Factur�e --> Passe la commande en trait�e quand statut='Livr�'
$sql_order_history="select * from ".$prefix_presta."order_history where id_order='".$id_order."'";
$result_order_history = mysql_query($sql_order_history) or die($sql_order_history."<br />\n".mysql_error());
while ($donnees_order_history = mysql_fetch_assoc($result_order_history) ) 
    {
    $id_order_state=$donnees_order_history['id_order_state'];
    if (($id_order_state==1) or ($id_order_state==10)) //** Paiement par ch�que ou virement
        {
        $statut_commande=0;           //** Commande en brouillon
        }
    if ($id_order_state==2) //** Paiement accept�
        {
        $creer_facture="oui";
        $statut_commande=1;           //** Commande en Valid�
        $commande_facturee=1;         //** Commande factur�e
        $statut_facture=2;            //** Facture en paiement valid�
        $paye=1;                      //** Facture en pay�e
        }
    if ($id_order_state==3) //** En cours de pr�paration
        {
        $statut_commande=2;           //** Commande en Envoi en cours (mais pas encore exp�di�e)
        }

    if ($id_order_state==4) //** En cours de livraison
        {
        $statut_commande=3;           //** Commande en D�livr�e (Exp�dition effectu�e)
        }
    if (($id_order_state==5) or ($id_order_state==35) or ($id_order_state==37)) //** Livr�
        {
        $statut_commande=3;           //** Commande en D�livr�e (Et la commande est en : Factur�e donc Commande passe en : Trait�e)
        }
    if (($id_order_state==6) or ($id_order_state==7)) //** Commande annul�e ou rembours�e
        {
        $statut_commande='-1';        //** Commande en Annul�e
        }
    if ($id_order_state==8) //** Commande en erreur de paiement ou avec un sattut de commande non valid�e
        {
        $statut_commande=0;           //** Commande en brouillon
        }
    }
// FIN DETERMINATION DU STATUT DE LA COMMANDE **************************************

    // RECUPERATION DONNEES DU CLIENT *************************************************
    $donnees_customer = Db::getInstance()->GetRow("select * from ".$prefix_presta."customer where id_customer='".$id_customer."'");
    $id_gender=$donnees_customer['id_gender'];
    $note=$donnees_customer['note'];
        $chaine=$note;    
        $chaine= accents_minuscules("$chaine");
        $note=$chaine;
    $birthday=$donnees_customer['birthday'];
    if ($id_gender==9)
        {
        $civilite="";
        }
    if ($id_gender==1)
        {
        $civilite="MR";
        }
    if ($id_gender==2)
        {
        $civilite="MME";
        }
    $mail=$donnees_customer['email'];
    // FIN RECUPERATION DONNEES DU CLIENT *************************************************

    // RECUPERATION ADRESSES DU CLIENT *************************************************
    $sql_adresse="select * from ".$prefix_presta."address where id_customer='".$id_customer."'";
    $result_adresse = mysql_query($sql_adresse) or die($sql_adresse."<br />\n".mysql_error());
    while ($adresse = mysql_fetch_array($result_adresse))
        {
        $entreprise=$adresse['company'];
            $entreprise = str_replace( "�", "e", $entreprise);$entreprise = str_replace( "�", "E", $entreprise);
            $chaine=$entreprise;    
            $chaine= accents_majuscules("$chaine");   
            $entreprise=$chaine;
        $prenom=$adresse['firstname'];
            $prenom = str_replace( "�", "e", $prenom);$prenom = str_replace( "�", "E", $prenom);
            $chaine=$prenom;    
            $chaine= accents_majuscules("$chaine");
            $prenom=$chaine;
        $nom=$adresse['lastname'];
            $nom = str_replace( "�", "e", $nom);$nom = str_replace( "�", "E", $nom);
            $chaine=$nom;    
            $chaine= accents_majuscules("$chaine");
            $nom=$chaine;
        if ($entreprise!="")
            {
            $societe=$entreprise;
                $chaine=$societe;    
                $chaine= accents_majuscules("$chaine");
                $societe=$chaine;
            }
        if ($entreprise=="")
            {
            $societe="$nom $prenom";
                $chaine=$societe;    
                $chaine= accents_majuscules("$chaine");
                $societe=$chaine;
            }
        $champadresse1=$adresse['address1'] ;
            $chaine=$champadresse1;    
            $chaine= accents_majuscules("$chaine");
            $champadresse1=$chaine;
        $champadresse2=$adresse['address2'];
            $chaine=$champadresse2;    
            $chaine= accents_majuscules("$chaine");
            $champadresse2=$chaine;
        $codepostal=$adresse['postcode'];
        $ville=$adresse['city'];
            $chaine=$ville;    
            $chaine= accents_majuscules("$chaine");
            $ville=$chaine;
        $country=$adresse['country'];
            $chaine=$country;    
            $chaine= accents_majuscules("$chaine");    
            $country=$chaine;
        $id_country=$adresse['id_country'];
            $donnees_country = Db::getInstance()->GetRow("select * from ".$prefix_presta."country where id_country='".$id_country."'");
            $iso_code_country=$donnees_country['iso_code'];
        $tel=$adresse['phone'];
            $chaine=$tel;    
            $chaine= tel_cacateres("$chaine");
            $tel=$chaine;
        $mobile=$adresse['phone_mobile'];
            $chaine=$tel;    
            $chaine= tel_cacateres("$chaine");
            $tel=$chaine;
        $vat_number=$adresse['vat_number'];
        $date=$adresse['date_add'];
        $date_compte_client=substr($date,2,5);
            $date_compte_client= str_replace( "-", "", $date_compte_client);
        $active=$adresse['active'];
        $deleted=$adresse['deleted'];                                       
        $alias=$adresse['alias'];
        $poste=$alias;
            $poste="($poste)";
            $chaine=$poste;    
            $chaine= accents_minuscules("$chaine");
            $poste=$chaine;
        $emetteur_paiement = "$entreprise $nom";
        mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
        mysql_select_db("$base_doli");
        mysql_query("SET NAMES UTF8");
          
        // RECUPERATION DE LA VERSION DE DOLIBARR **************************************************
        $sql_recup_version_dolibarr="select * from ".$prefix_doli."const where name='MAIN_VERSION_LAST_UPGRADE'";
        $result_version_dolibarr = mysql_query($sql_recup_version_dolibarr) or die($sql_recup_version_dolibarr."<br />\n".mysql_error());
        $donnees_version_dolibarr = mysql_fetch_array($result_version_dolibarr);
        $version_dolibarr=$donnees_version_dolibarr['value'];
        $version_dolibarr=substr($version_dolibarr,0,3);
        if ($version_dolibarr=="")
            {
            $sql_recup_version_dolibarr="select * from ".$prefix_doli."const where name='MAIN_VERSION_LAST_INSTALL'";
            $result_version_dolibarr = mysql_query($sql_recup_version_dolibarr) or die($sql_recup_version_dolibarr."<br />\n".mysql_error());
            $donnees_version_dolibarr = mysql_fetch_array($result_version_dolibarr);
            $version_dolibarr=$donnees_version_dolibarr['value'];
            $version_dolibarr=substr($version_dolibarr,0,3);
            }
        // FIN RECUPERATION DE LA VERSION DE DOLIBARR **************************************************

        // DETERMINATION PAYS DOLIBARR *****************************************************************
        $sql_recup_country_doli="select * from ".$prefix_doli."c_pays where code='".$iso_code_country."'";
        $result_country_doli = mysql_query($sql_recup_country_doli) or die($sql_recup_country_doli."<br />\n".mysql_error());
        $donnees_country_doli = mysql_fetch_array($result_country_doli);
        $country_doli=$donnees_country_doli['rowid'];
        // FIN DETERMINATION PAYS DOLIBARR *****************************************************************

        // CREATION USER DANS DOLIBARR ***************************************
        $req_id_user="select max(rowid) from ".$prefix_doli."user";
        $req_id_user=mysql_query($req_id_user);
        $id_user=mysql_result($req_id_user,0,"max(rowid)");
        $id_user=$id_user+1;
        $sql_recup_verif_user="select * from ".$prefix_doli."user where login='noreply@boutique.fr'";
        $result_verif_user = mysql_query($sql_recup_verif_user) or die($sql_recup_verif_user."<br />\n".mysql_error());
        $donnees_verif_user = mysql_fetch_array($result_verif_user);
        $verif_user=$donnees_verif_user['login'];
        if ($verif_user=='noreply@boutique.fr')
            {
            $info_erreur="Erreur de synchro sur : UPDATE USER DANS DOLIBARR - ID User : $rowid_user";//or die($info_erreur."<br />\n".mysql_error())
            $rowid_user=$donnees_verif_user['rowid'];
            mysql_query ("UPDATE ".$prefix_doli."user set login='noreply@boutique.fr',statut=1 where rowid=$rowid_user")
                or die($info_erreur."<br />\n".mysql_error());
                
            }
        else
            {
            $info_erreur="Erreur de synchro sur : INSERT USER DANS DOLIBARR - ID User : $rowid_user";//or die($info_erreur."<br />\n".mysql_error())
            $rowid_user=$id_user;
            mysql_query ("INSERT INTO ".$prefix_doli."user (rowid,login,statut) VALUES ($rowid_user,'noreply@boutique.fr',1)")
                or die($info_erreur."<br />\n".mysql_error());
            }
        // FIN CREATION USER DANS DOLIBARR ***************************************

        // DETERMINATION ID CLIENT DOLIBARR ******************************************    
        $req_id_client="select max(rowid) from ".$prefix_doli."societe";
        $req_id_client=mysql_query($req_id_client);
        $id_client=mysql_result($req_id_client,0,"max(rowid)");
        $id_client=$id_client+1;
        $sql_recup_verif_client="select * from ".$prefix_doli."societe where email='$mail'";
        $result_verif_client = mysql_query($sql_recup_verif_client) or die($sql_recup_verif_client."<br />\n".mysql_error());
        $donnees_verif_client = mysql_fetch_array($result_verif_client);
        $verif_client=$donnees_verif_client['email'];
        if ($verif_client==$mail)
            {
            $rowid_client=$donnees_verif_client['rowid'];
            }
        else
            {
            $rowid_client=$id_client;
            }
        // FIN DETERMINATION ID CLIENT DOLIBARR ******************************************

        // RECUPERATION DU MASQUE CODE CLIENT *******************************
        $sql_recup_format_code_client="select * from ".$prefix_doli."const where name='SOCIETE_CODECLIENT_ADDON'";
        $result_format_code_client = mysql_query($sql_recup_format_code_client) or die($sql_recup_format_code_client."<br />\n".mysql_error());
        $donnees_format_code_client = mysql_fetch_array($result_format_code_client);
        $format_code_client=$donnees_format_code_client['value'];
        if ($format_code_client=="mod_codeclient_monkey")
            {
            $prefixe_code_client="CU";
            }
        if ($format_code_client=="mod_codeclient_elephant")
            {
            $sql_recup_prefixe_code_client="select * from ".$prefix_doli."const where name='COMPANY_ELEPHANT_MASK_CUSTOMER'";
            $result_prefixe_code_client = mysql_query($sql_recup_prefixe_code_client) or die($sql_recup_prefixe_code_client."<br />\n".mysql_error());
            $donnees_prefixe_code_client = mysql_fetch_array($result_prefixe_code_client);
            $prefixe_code_client=$donnees_prefixe_code_client['value'];
            $nb_apres_coupe = strpos($prefixe_code_client,'{');
            $prefixe_code_client=substr($prefixe_code_client,0,$nb_apres_coupe);
            }
        if ($format_code_client=="mod_codeclient_leopard")
            {
            $prefixe_code_client="";
            }
        $code_client="000000000$rowid_client";
        $code_client=substr($code_client,-6);
        $ref_client="$prefixe_code_client$date_compte_client-";
        $code_client="$ref_client$code_client";
        // FIN RECUPERATION DU MASQUE CODE CLIENT *******************************

        // CREATION DE LA FICHE SOCIETE *****************************************
        if ($version_dolibarr<"3.4")
            {
            if (($verif_client==$mail) and ($boucle==0))
                {
                $info_erreur="Erreur de synchro sur : UPDATE FICHE SOCIETE ID : $id_customer - NOM : $societe --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."societe set tms='$date',datec='$date',datea='$date',nom='$societe',code_client='$code_client',address='$champadresse1 $champadresse2',cp='$codepostal',ville='$ville',fk_pays='$country_doli',tel='$tel',fk_typent='8',tva_intra='$vat_number',note='$note',client='1',fk_user_modif=$rowid_user where rowid=$rowid_client") 
                    or die($info_erreur."<br />\n".mysql_error());
                }
            if (($verif_client!=$mail) and ($boucle==0))
                {
                $info_erreur="Erreur de synchro sur : INSERT FICHE SOCIETE ID : $id_customer - NOM : $societe --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("INSERT INTO ".$prefix_doli."societe (rowid,tms,datec,datea,nom,code_client,address,cp,ville,fk_pays,tel,email,fk_typent,tva_intra,note,client,fk_user_creat,fk_user_modif) 
                    VALUES ($rowid_client,'$date','$date','$date','$societe','$code_client','$champadresse1 $champadresse2','$codepostal','$ville','$country_doli','$tel','$mail','8','$vat_number','$note','1',$rowid_user,$rowid_user)") 
                        or die($info_erreur."<br />\n".mysql_error());
                }
            if ($vat_number=="")
                {
                $info_erreur="Erreur de synchro sur : UPDATE VAT NUMBER";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."societe set tva_assuj='0' where rowid=$rowid_client")
                    or die($info_erreur."<br />\n".mysql_error());
                }
            }    
        if ($version_dolibarr>="3.4")
            {
            if (($verif_client==$mail) and ($boucle==0))
                {
                $info_erreur="Erreur de synchro sur : UPDATE FICHE SOCIETE ID : $id_customer - NOM : $societe --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."societe set tms='$date',datec='$date',datea='$date',nom='$societe',code_client='$code_client',address='$champadresse1 $champadresse2',zip='$codepostal',town='$ville',fk_pays='$country_doli',phone='$tel',fk_typent='8',tva_intra='$vat_number',note_private='$note',client='1',fk_user_modif=$rowid_user where rowid=$rowid_client") 
                    or die($info_erreur."<br />\n".mysql_error());
                }
            if (($verif_client!=$mail) and ($boucle==0))
                {
                $info_erreur="Erreur de synchro sur : INSERT FICHE SOCIETE ID : $id_customer - NOM : $societe --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("INSERT INTO ".$prefix_doli."societe (rowid,tms,datec,datea,nom,code_client,address,zip,town,fk_pays,phone,email,fk_typent,tva_intra,note_private,client,fk_user_creat,fk_user_modif) 
                    VALUES ($rowid_client,'$date','$date','$date','$societe','$code_client','$champadresse1 $champadresse2','$codepostal','$ville','$country_doli','$tel','$mail','8','$vat_number','$note','1',$rowid_user,$rowid_user)") 
                        or die($info_erreur."<br />\n".mysql_error());
                }
            if ($vat_number=="")
                {
                $info_erreur="Erreur de synchro sur : UPDATE VAT NUMBER";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."societe set tva_assuj='0' where rowid=$rowid_client")
                    or die($info_erreur."<br />\n".mysql_error());
                }
            }    
        // FIN CREATION DE LA FICHE SOCIETE *****************************************     

        // CREATION DE LA FICHE CONTACT ***********************************************
        $req_id_clientpeople="select max(rowid) from ".$prefix_doli."socpeople";
        $req_id_clientpeople=mysql_query($req_id_clientpeople);
        $id_clientpeople=mysql_result($req_id_clientpeople,0,"max(rowid)");
        $id_clientpeople=$id_clientpeople+1;
        $sql_recup_verif_clientpeople="select * from ".$prefix_doli."socpeople where email='$mail' and poste='$poste'";
        $result_verif_clientpeople = mysql_query($sql_recup_verif_clientpeople) or die($sql_recup_verif_clientpeople."<br />\n".mysql_error());
        $donnees_verif_clientpeople = mysql_fetch_array($result_verif_clientpeople);
        $verif_clientpeople=$donnees_verif_clientpeople['email'];
        if ($deleted=='1')
            {
            $nom="__ADRESSE SUPPRIMEE__";
            $prenom="";
            }
        if ($active!='1')
            {
            $nom="__ADRESSE DESACTIVEE__";
            $prenom="";
            }
        if ($version_dolibarr<"3.4")
            {
            if ($verif_clientpeople!='')
                {
                $info_erreur="Erreur de synchro sur : UPDATE FICHE CONTACT ID : $id_customer - NOM : $nom --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                $rowid_clientpeople=$donnees_verif_clientpeople['rowid'];
                mysql_query ("UPDATE ".$prefix_doli."socpeople set datec='$date',tms='$date',fk_soc='$rowid_client',civilite='$civilite',name='$nom',firstname='$prenom',address='$champadresse1 $champadresse2',cp='$codepostal',ville='$ville',fk_pays='$country_doli',birthday='$birthday',poste='$poste',phone='$tel',phone_mobile='$mobile',email='$mail',fk_user_modif=$rowid_user,note='$note' where rowid=$rowid_clientpeople") 
                    or die($info_erreur."<br />\n".mysql_error());
                }
            if ($verif_clientpeople=='')
                {
                $info_erreur="Erreur de synchro sur : INSERT FICHE CONTACT ID : $id_customer - NOM : $nom --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                $rowid_clientpeople=$id_clientpeople;
                mysql_query ("INSERT INTO ".$prefix_doli."socpeople (rowid,datec,tms,fk_soc,civilite,name,firstname,address,cp,ville,fk_pays,birthday,poste,phone,phone_mobile,email,fk_user_creat,fk_user_modif,note) 
                    VALUES ($rowid_clientpeople,'$date','$date',$rowid_client,'$civilite','$nom','$prenom','$champadresse1 $champadresse2','$codepostal','$ville','$country_doli','$birthday','$poste','$tel','$mobile','$mail',$rowid_user,$rowid_user,'$note')")
                        or die($info_erreur."<br />\n".mysql_error());
                }
            }    
        if ($version_dolibarr>="3.4")
            {
            if ($verif_clientpeople!='')
                {
                $info_erreur="Erreur de synchro sur : UPDATE FICHE CONTACT ID : $id_customer - NOM : $nom --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                $rowid_clientpeople=$donnees_verif_clientpeople['rowid'];
                mysql_query ("UPDATE ".$prefix_doli."socpeople set datec='$date',tms='$date',fk_soc='$rowid_client',civilite='$civilite',lastname='$nom',firstname='$prenom',address='$champadresse1 $champadresse2',zip='$codepostal',town='$ville',fk_pays='$country_doli',birthday='$birthday',poste='$poste',phone='$tel',phone_mobile='$mobile',email='$mail',fk_user_modif=$rowid_user,note_private='$note' where rowid=$rowid_clientpeople") 
                    or die($info_erreur."<br />\n".mysql_error());
                }
            if ($verif_clientpeople=='')
                {
                $info_erreur="Erreur de synchro sur : INSERT FICHE CONTACT ID : $id_customer - NOM : $nom --> Verifiez la fiche client sous PrestaShop";//or die($info_erreur."<br />\n".mysql_error())
                $rowid_clientpeople=$id_clientpeople;
                mysql_query ("INSERT INTO ".$prefix_doli."socpeople (rowid,datec,tms,fk_soc,civilite,lastname,firstname,address,zip,town,fk_pays,birthday,poste,phone,phone_mobile,email,fk_user_creat,fk_user_modif,note_private) 
                    VALUES ($rowid_clientpeople,'$date','$date',$rowid_client,'$civilite','$nom','$prenom','$champadresse1 $champadresse2','$codepostal','$ville','$country_doli','$birthday','$poste','$tel','$mobile','$mail',$rowid_user,$rowid_user,'$note')")
                        or die($info_erreur."<br />\n".mysql_error());
                }
            }
        // FIN CREATION DE LA FICHE CONTACT ***********************************************

        mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
        mysql_select_db("$base_presta");
        mysql_query("SET NAMES UTF8");
        $boucle=$boucle+1;
        }
    $boucle=0;
    // FIN RECUPERATION ADRESSES DU CLIENT *************************************************

    mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
    mysql_select_db("$base_doli");
    mysql_query("SET NAMES UTF8");

    // Insertion TYPE DE PAIEMENT ***********************************************************
    $sql_recup_verif_mode_paiement="select * from ".$prefix_doli."c_paiement where libelle='Paiement en ligne'";
    $result_verif_mode_paiement = mysql_query($sql_recup_verif_mode_paiement) or die($sql_recup_verif_mode_paiement."<br />\n".mysql_error());
    $donnees_verif_mode_paiement = mysql_fetch_array($result_verif_mode_paiement);
    $verif_mode_paiement=$donnees_verif_mode_paiement['libelle'];
    if($verif_mode_paiement=="")
        {
        $info_erreur="Erreur de synchro sur : INSERT TYPE DE PAIEMENT ID : $id_mode_paiement - NOM : Paiement en ligne";//or die($info_erreur."<br />\n".mysql_error())
        $req_id_mode_paiement="select max(id) from ".$prefix_doli."c_paiement";
        $req_id_mode_paiement=mysql_query($req_id_mode_paiement);
        $id_mode_paiement=mysql_result($req_id_mode_paiement,0,"max(rowid)");
        $id_mode_paiement=$id_mode_paiement+1;
        mysql_query ("INSERT INTO ".$prefix_doli."c_paiement (id,code,libelle,type,active) 
            VALUES ($id_mode_paiement,'VAD','Paiement en ligne',2,1)")
                or die($info_erreur."<br />\n".mysql_error());
        }
    if($verif_mode_paiement=="Paiement en ligne")
        {
        $info_erreur="Erreur de synchro sur : UPDATE TYPE DE PAIEMENT ID : $id_mode_paiement - NOM : Paiement en ligne";//or die($info_erreur."<br />\n".mysql_error())
        $id_mode_paiement=$donnees_verif_mode_paiement['id'];
        mysql_query ("UPDATE ".$prefix_doli."c_paiement set code='VAD',libelle='Paiement en ligne',type=2,active=1 where id=$id_mode_paiement")
            or die($info_erreur."<br />\n".mysql_error());
        }
    $info_erreur="Erreur de synchro sur : COMPTE BANQUE NOM : Site Internet";//or die($info_erreur."<br />\n".mysql_error())
    mysql_query ("INSERT INTO ".$prefix_doli."bank_account (ref,label,entity,courant,rappro,currency_code) 
        VALUES ('Site','Site Internet',1,1,1,'EUR')") 
            Or mysql_query ("UPDATE ".$prefix_doli."bank_account set label='Site Internet',courant=1,rappro=1,currency_code='EUR' where ref='Site'")
                or die($info_erreur."<br />\n".mysql_error());
    $sql_recup_verif_bank_account="select * from ".$prefix_doli."bank_account where ref='Site'";
    $result_verif_bank_account = mysql_query($sql_recup_verif_bank_account) or die($sql_recup_verif_bank_account."<br />\n".mysql_error());
    $donnees_verif_bank_account = mysql_fetch_array($result_verif_bank_account);
    $verif_bank_account=$donnees_verif_bank_account['rowid'];
    if($verif_bank_account=="")
        {
        $id_bank_account=1;
        }
    if($verif_bank_account!="")
        {
        $id_bank_account=$donnees_verif_bank_account['rowid'];
        }
    // FIN Insertion TYPE DE PAIEMENT ***********************************************************

    // Insertion TYPE DE BANQUE ***********************************************************
    $sql_recup_verif_bank_categ="select * from ".$prefix_doli."bank_categ where label='Vente de produits sur Site Internet'";
    $result_verif_bank_categ = mysql_query($sql_recup_verif_bank_categ) or die($sql_recup_verif_bank_categ."<br />\n".mysql_error());
    $donnees_verif_bank_categ = mysql_fetch_array($result_verif_bank_categ);
    $verif_bank_categ=$donnees_verif_bank_categ['rowid'];
    if($verif_bank_categ=="")
        {
        $info_erreur="Erreur de synchro sur : INSERT TYPE DE BANQUE NOM : Vente de produits sur Site Internet";//or die($info_erreur."<br />\n".mysql_error())
        $req_id_bank_categ="select max(id) from ".$prefix_doli."bank_categ";
        $req_id_bank_categ=mysql_query($req_id_bank_categ);
        $id_bank_categ=mysql_result($req_id_bank_categ,0,"max(rowid)");
        $id_bank_categ=$id_bank_categ+1;
        mysql_query ("INSERT INTO ".$prefix_doli."bank_categ (label,entity) 
            VALUES ('Vente de produits sur Site Internet',1)")
                or die($info_erreur."<br />\n".mysql_error());
        }
    if($verif_bank_categ!="")
        {
        $id_bank_categ=$donnees_verif_bank_categ['rowid'];
        }
    // FIN Insertion TYPE DE BANQUE ***********************************************************

    // Insertion du produit PORT dans Dolibarr ***************************
    $info_erreur="Erreur de synchro sur : Produit PORT dans Dolibarr - Code article/ID : $code_article_port - Libelle : $libelle_port NOM : Vente de produits sur Site Internet";//or die($info_erreur."<br />\n".mysql_error())
    $fk_product_type=0;
    mysql_query ("INSERT INTO ".$prefix_doli."product (rowid,ref,label,description,tva_tx,note,fk_user_author,fk_product_type,barcode) 
        VALUES ($code_article_port,'$libelle_port','$libelle_port','$libelle_port','$tva_tx_taux','$libelle_port','$rowid_user',$fk_product_type,$code_article_port)") 
            or mysql_query ("UPDATE ".$prefix_doli."product set ref='$libelle_port',label='$libelle_port',description='$libelle_port',tva_tx='$tva_tx_taux',note='$libelle_port',fk_user_author='$rowid_user',fk_product_type=$fk_product_type,barcode='".$code_article_port."' where rowid='".$code_article_port."'")
                or die($info_erreur."<br />\n".mysql_error());
    // FIN Insertion du produit PORT dans Dolibarr ***************************

    // CREATION DU TYPE DE PAIEMENT DANS DOLIBARR *******************************
    $req_id_mode_paiement="select max(id) from ".$prefix_doli."c_paiement";
    $req_id_mode_paiement=mysql_query($req_id_mode_paiement);
    $id_mode_paiement=mysql_result($req_id_mode_paiement,0,"max(id)");
    $id_mode_paiement=$id_mode_paiement+1;
    $sql_recup_verif_mode_paiement="select * from ".$prefix_doli."c_paiement where libelle='$type_paiement'";
    $result_verif_mode_paiement = mysql_query($sql_recup_verif_mode_paiement) or die($sql_recup_verif_mode_paiement."<br />\n".mysql_error());
    $donnees_verif_mode_paiement = mysql_fetch_array($result_verif_mode_paiement);
    $verif_mode_paiement=$donnees_verif_mode_paiement['id'];
    $code_paiement=$type_paiement;
        $chaine=$code_paiement;    
        $chaine= accents_sans("$chaine");   
        $code_paiement=$chaine;
        $code_paiement=strtoupper($code_paiement);
    $code_paiement=substr($type_paiement,0,3);
    if ($verif_mode_paiement!="")
        {
        $rowid_mode_paiement=$donnees_verif_mode_paiement['id'];
        }
    if ($verif_mode_paiement=="")
        {
        $info_erreur="Erreur de synchro sur : INSERT MODE DE PAIEMENT - ID : $rowid_mode_paiement - Code paiement : $code_paiement - Libelle : $type_paiement";//or die($info_erreur."<br />\n".mysql_error())
        $rowid_mode_paiement=$id_mode_paiement;
        mysql_query ("INSERT INTO ".$prefix_doli."c_paiement (id,code,libelle,type,active) 
            VALUES ($rowid_mode_paiement,'$code_paiement','$type_paiement','$type_doli','$active')")
                or die($info_erreur."<br />\n".mysql_error());
        }
    $fk_mode_reglement_commande=$rowid_mode_paiement;
    // FIN CREATION DU TYPE DE PAIEMENT DANS DOLIBARR *******************************

    // DETERMINATION ID PROPAL DOLIBARR *******************************************
    $req_id_propal="select max(rowid) from ".$prefix_doli."propal";
    $req_id_propal=mysql_query($req_id_propal);
    $id_propal=mysql_result($req_id_propal,0,"max(rowid)");
    $id_propal=$id_propal+1;
    $sql_recup_verif_propal="select * from ".$prefix_doli."propal where total='$total_a_payer_TTC' and datec ='".$dateorder."'";
    $result_verif_propal = mysql_query($sql_recup_verif_propal) or die($sql_recup_verif_propal."<br />\n".mysql_error());
    $donnees_verif_propal = mysql_fetch_array($result_verif_propal);
    $verif_propal=$donnees_verif_propal['ref_client'];
    if ($verif_propal!="")
        {
        $rowid_propal=$donnees_verif_propal['rowid'];
        // CREATION DE LA REFERENCE PROPAL *************************************************
        $ref_propal=$donnees_verif_propal['ref'];
        // FIN CREATION DE LA REFERENCE PROPAL *************************************************
        }
    if ($verif_propal=="")
        {
        $rowid_propal=$id_propal;
        // CREATION DE LA REFERENCE PROPAL *************************************************
        $req_dernier_id="select max(rowid) from ".$prefix_doli."propal order by ref asc";
        $req_dernier_id=mysql_query($req_dernier_id);
        $dernier_id=mysql_result($req_dernier_id,0,"max(rowid)");
        $sql_derniere_ref = Db::getInstance()->GetRow("select * from ".$prefix_doli."propal where rowid='$dernier_id'");
        $derniere_ref=$sql_derniere_ref['ref'];
        $verif_chrono=substr($derniere_ref,0,2);
        $chrono=substr($derniere_ref,7,4);
        $chrono=$chrono+1;
        $chrono_nnnn=str_pad($chrono, 4, "0", STR_PAD_LEFT);
        $annee=substr($date_propal,2,2);
        $mois=substr($date_propal,5,2);
        $ref="$annee";
        $ref="$ref$mois-";
        $ref="PR$ref$chrono_nnnn";
        }
        // FIN CREATION DE LA REFERENCE PROPAL *************************************************
    // FIN DETERMINATION ID PROPAL DOLIBARR *******************************************

    // CREATION DE LA PROPAL ***************************************************
    if ($rowid_client!="")
        {
        if ($verif_propal!="")
            {
            $info_erreur="Erreur de synchro sur : UPDATE PROPAL - ID PROPAL : $rowid_propal - ID CLIENT : $rowid_client - REF COMMANDE PRESTASHOP : $ref_client_doli";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("UPDATE ".$prefix_doli."propal set fk_soc='$rowid_client',tms='$dateorder',entity='$entity',ref_client='$ref_client_doli',datec='$dateorder',datep='$date_propal',fin_validite='$dateorder',date_valid='$dateorder',date_cloture='$dateorder',fk_statut='$statut_propal',total_ht='$total_a_payer_HT',tva='$total_taxes',total='$total_a_payer_TTC',fk_mode_reglement='$fk_mode_reglement_commande' where rowid=$rowid_propal") 
                or die($info_erreur."<br />\n".mysql_error());
            }
        if ($verif_propal=="")
            {
            $info_erreur="Erreur de synchro sur : INSERT PROPAL - ID PROPAL : $rowid_propal - ID CLIENT : $rowid_client - REF COMMANDE PRESTASHOP : $ref_client_doli";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."propal (rowid,fk_soc,tms,ref,entity,ref_client,datec,datep,fin_validite,date_valid,date_cloture,fk_statut,total_ht,tva,total,fk_cond_reglement,fk_mode_reglement,model_pdf) 
                VALUES ('$rowid_propal','$rowid_client','$dateorder','$ref','$entity','$ref_client_doli','$dateorder','$date_propal','$dateorder','$dateorder','$dateorder','$statut_propal','$total_a_payer_HT','$total_taxes','$total_a_payer_TTC','$fk_cond_reglement','$fk_mode_reglement','$model_pdf')") 
                    or die($info_erreur."<br />\n".mysql_error());
            }
        }
    // FIN CREATION DE LA PROPAL ***************************************************

    // DETERMINATION ID COMMANDE DOLIBARR *******************************************
    $req_id_commande="select max(rowid) from ".$prefix_doli."commande";
    $req_id_commande=mysql_query($req_id_commande);
    $id_commande=mysql_result($req_id_commande,0,"max(rowid)");
    $id_commande=$id_commande+1;
    $sql_recup_verif_commande="select * from ".$prefix_doli."commande where total_ttc='$total_a_payer_TTC' and date_creation ='".$dateorder."'";
    $result_verif_commande = mysql_query($sql_recup_verif_commande) or die($sql_recup_verif_commande."<br />\n".mysql_error());
    $donnees_verif_commande = mysql_fetch_array($result_verif_commande);
    $verif_commande=$donnees_verif_commande['ref_client'];
    if ($verif_commande!="")
        {
        $rowid_commande=$donnees_verif_commande['rowid'];
        // CREATION DE LA REFERENCE COMMANDE *************************************************
        $ref_commande=$donnees_verif_commande['ref'];
        // FIN CREATION DE LA REFERENCE COMMANDE *************************************************
        }
    if ($verif_commande=="")
        {
        $rowid_commande=$id_commande;
        // CREATION DE LA REFERENCE COMMANDE *************************************************
        $req_dernier_id="select max(rowid) from ".$prefix_doli."commande order by ref asc";
        $req_dernier_id=mysql_query($req_dernier_id);
        $dernier_id=mysql_result($req_dernier_id,0,"max(rowid)");
        $sql_derniere_ref = Db::getInstance()->GetRow("select * from ".$prefix_doli."commande where rowid='$dernier_id'");
        $derniere_ref=$sql_derniere_ref['ref'];
        $verif_chrono=substr($derniere_ref,0,2);
        $chrono=substr($derniere_ref,7,4);
        $chrono=$chrono+1;
        $chrono_nnnn=str_pad($chrono, 4, "0", STR_PAD_LEFT);
        $annee=substr($date_commande,2,2);
        $mois=substr($date_commande,5,2);
        $ref="$annee";
        $ref="$ref$mois-";
        $ref="CO$ref$chrono_nnnn";
        }
        // FIN CREATION DE LA REFERENCE COMMANDE *************************************************
    // FIN DETERMINATION ID COMMANDE DOLIBARR *******************************************

    // CREATION DE LA COMMANDE ***************************************************
    if ($rowid_client!="")
        {
        if ($verif_commande=="")
            {
            $info_erreur="Erreur de synchro sur : INSERT COMMANDE - ID COMMANDE : $rowid_commande - ID CLIENT : $rowid_client - REF COMMANDE PRESTASHOP : $ref_commande";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."commande (rowid,tms,fk_soc,ref,entity,ref_client,date_creation,date_valid,date_cloture,date_commande,source,fk_statut,tva,total_ht,total_ttc,model_pdf,facture,fk_cond_reglement,fk_mode_reglement,date_livraison) 
                VALUES ('$rowid_commande','$dateorder','$rowid_client','$ref',$entity,'$ref_client_doli','$dateorder','$dateorder','$dateorder','$dateorder','$source','$statut_commande','$total_taxes','$total_a_payer_HT','$total_a_payer_TTC','$model_pdf_commande','$commande_facturee','$fk_cond_reglement_commande','$fk_mode_reglement_commande','$dateorder')") 
                    or die($info_erreur."<br />\n".mysql_error());
            }
        if ($verif_commande!="")
            {
            $info_erreur="Erreur de synchro sur : UPDATE COMMANDE - ID COMMANDE : $rowid_commande - ID CLIENT : $rowid_client - REF COMMANDE PRESTASHOP : $ref_commande";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("UPDATE ".$prefix_doli."commande set tms='$dateorder',fk_soc='$rowid_client',entity='$entity',ref_client='$ref_client_doli',date_creation='$dateorder',date_valid='$dateorder',date_cloture='$dateorder',date_commande='$dateorder',source='$source',fk_statut='$statut_commande',tva='$total_taxes',total_ht='$total_a_payer_HT',total_ttc='$total_a_payer_TTC',model_pdf='$model_pdf_commande',facture='$commande_facturee',fk_mode_reglement='$fk_mode_reglement_commande',date_livraison='$dateorder' where rowid=$rowid_commande") 
                or die($info_erreur."<br />\n".mysql_error());
            }
        
        // INSERTION DES LIENS PROPAL / COMMANDE ************************************
        $sql_recup_verif_lien_propal="select * from ".$prefix_doli."element_element where fk_source ='".$rowid_propal."' and sourcetype='propal' and fk_target='".$rowid_commande."' and targettype='commande'";
        $result_verif_lien_propal = mysql_query($sql_recup_verif_lien_propal) or die($sql_recup_verif_lien_propal."<br />\n".mysql_error());
        $donnees_verif_lien_propal = mysql_fetch_array($result_verif_lien_propal);
    //     $donnees_verif_lien_propal = Db::getInstance()->GetRow("select * from ".$prefix_doli."element_element where fk_source ='".$rowid_propal."' and sourcetype='propal' and fk_target='".$rowid_commande."' and targettype='commande'");
        $verif_lien_propal=$donnees_verif_lien_propal['rowid'];
        if ($verif_lien_propal=="")
            {
            $info_erreur="Erreur de synchro sur : INSERTION DES LIENS PROPAL / COMMANDE";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."element_element (fk_source,sourcetype,fk_target,targettype) 
                VALUES ('$rowid_propal','propal','$rowid_commande','commande')") 
                    or die($info_erreur."<br />\n".mysql_error());
            }
        // FIN INSERTION DES LIENS PROPAL / COMMANDE ************************************
        
        }
    // FIN CREATION DE LA COMMANDE ***************************************************

    // DETERMINATION ID FACTURE DOLIBARR *******************************************
    $req_id_facture="select max(rowid) from ".$prefix_doli."facture";
    $req_id_facture=mysql_query($req_id_facture);
    $id_facture=mysql_result($req_id_facture,0,"max(rowid)");
    $id_facture=$id_facture+1;
    $sql_recup_verif_facture="select * from ".$prefix_doli."facture where total_ttc='$total_a_payer_TTC' and datec ='".$dateorder."'";
    $result_verif_facture = mysql_query($sql_recup_verif_facture) or die($sql_recup_verif_facture."<br />\n".mysql_error());
    $donnees_verif_facture = mysql_fetch_array($result_verif_facture);
    $verif_facture=$donnees_verif_facture['ref_client'];
    if ($verif_facture!="")
        {
        $rowid_facture=$donnees_verif_facture['rowid'];
        // CREATION DE LA REFERENCE FACTURE *************************************************
        $ref_facture=$donnees_verif_facture['facnumber'];
        // FIN CREATION DE LA REFERENCE FACTURE *************************************************
        }
    if ($verif_facture=="")
        {
        $rowid_facture=$id_facture;
        // CREATION DE LA REFERENCE FACTURE *************************************************
        $req_dernier_id="select max(rowid) from ".$prefix_doli."facture order by facnumber asc";
        $req_dernier_id=mysql_query($req_dernier_id);
        $dernier_id=mysql_result($req_dernier_id,0,"max(rowid)");
        $sql_derniere_ref = Db::getInstance()->GetRow("select * from ".$prefix_doli."facture where rowid='$dernier_id'");
        $derniere_ref=$sql_derniere_ref['facnumber'];
        $verif_chrono=substr($derniere_ref,0,2);
        $chrono=substr($derniere_ref,7,4);
        $chrono=$chrono+1;
        $chrono_nnnn=str_pad($chrono, 4, "0", STR_PAD_LEFT);
        $annee=substr($date_facture,2,2);
        $mois=substr($date_facture,5,2);
        $ref="$annee";
        $ref="$ref$mois-";
        $ref="FA$ref$chrono_nnnn";
        }
        // FIN CREATION DE LA REFERENCE FACTURE *************************************************
    // FIN DETERMINATION ID FACTURE DOLIBARR *******************************************

    // CREATION DE LA FACTURE *********************************************************
    if ($rowid_client!="")
        {
        if ($creer_facture=="oui")
            {        
            if ($verif_facture=="")
                {
                $info_erreur="Erreur de synchro sur : INSERT FACTURE - ID FACTURE : $rowid_facture - ID CLIENT : $rowid_client - REF COMMANDE PRESTASHOP : $ref_facture";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("INSERT INTO ".$prefix_doli."facture (rowid,facnumber,ref_client,fk_soc,datec,datef,date_valid,tms,paye,tva,total,total_ttc,fk_statut,fk_cond_reglement,fk_mode_reglement,date_lim_reglement,model_pdf) 
                    VALUES ('$rowid_facture','$ref','$ref_client_doli','$rowid_client','$dateorder','$dateorder','$dateorder','$dateorder','$paye','$total_taxes','$total_a_payer_HT','$total_a_payer_TTC','$statut_facture',$fk_cond_reglement_commande,$fk_mode_reglement_commande,'$dateorder','$model_pdf_facture')") 
                        or die($info_erreur."<br />\n".mysql_error());
                }
            if ($verif_facture!="")
                {
                $info_erreur="Erreur de synchro sur : UPDATE FACTURE - ID FACTURE : $rowid_facture - ID CLIENT : $rowid_client - REF COMMANDE PRESTASHOP : $ref_facture";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."facture set entity='$entity',ref_client='$ref_client_doli',fk_soc='$rowid_client',datec='$dateorder',datef='$dateorder',date_valid='$dateorder',tms='$dateorder',tva='$total_taxes',total='$total_a_payer_HT',total_ttc='$total_a_payer_TTC',fk_mode_reglement='$fk_mode_reglement_commande' where rowid=$rowid_facture") 
                    or die($info_erreur."<br />\n".mysql_error());
                }
            }        
        // INSERTION DES LIENS COMMANDE / FACTURE ************************************
        $sql_recup_verif_lien_commande="select * from ".$prefix_doli."element_element where fk_source ='".$rowid_commande."' and sourcetype='commande' and fk_target='".$rowid_facture."' and targettype='facture'";
        $result_verif_lien_commande = mysql_query($sql_recup_verif_lien_commande) or die($sql_recup_verif_lien_commande."<br />\n".mysql_error());
        $donnees_verif_lien_commande = mysql_fetch_array($result_verif_lien_commande);
        $verif_lien_commande=$donnees_verif_lien_commande['rowid'];
        if ($verif_lien_commande=="")
            {
            $info_erreur="Erreur de synchro sur : INSERTION DES LIENS COMMANDE / FACTURE";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."element_element (fk_source,sourcetype,fk_target,targettype) 
                VALUES ('$rowid_commande','commande','$rowid_facture','facture')")
                    or die($info_erreur."<br />\n".mysql_error());
            }
        // FIN INSERTION DES LIENS COMMANDE / FACTURE ************************************
        
        }

    // INSERTION DES LIENS PROPAL / FACTURE ************************************
    if ($rowid_client!="")
        {
        $sql_recup_verif_lien_commande="select * from ".$prefix_doli."element_element where fk_source ='".$rowid_propal."' and sourcetype='propal' and fk_target='".$rowid_facture."' and targettype='facture'";
        $result_verif_lien_commande = mysql_query($sql_recup_verif_lien_commande) or die($sql_recup_verif_lien_commande."<br />\n".mysql_error());
        $donnees_verif_lien_commande = mysql_fetch_array($result_verif_lien_commande);
    //     $donnees_verif_lien_commande = Db::getInstance()->GetRow("select * from ".$prefix_doli."element_element where fk_source ='".$rowid_propal."' and sourcetype='propal' and fk_target='".$rowid_facture."' and targettype='facture'");
        $verif_lien_commande=$donnees_verif_lien_commande['rowid'];
        if ($verif_lien_commande=="")
            {
            $info_erreur="Erreur de synchro sur : INSERTION DES LIENS PROPAL / FACTURE";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."element_element (fk_source,sourcetype,fk_target,targettype) 
                VALUES ('$rowid_propal','propal','$rowid_facture','facture')")
                    or die($info_erreur."<br />\n".mysql_error());
            }
        }
    // FIN INSERTION DES LIENS PROPAL / FACTURE ************************************
    // FIN CREATION DE LA FACTURE *********************************************************
    
    // ECRITURE DU PAIEMENT SI POSSIBLE ***********************************************************
    if ($creer_facture=="oui")
        {
        $req_id_paiement="select max(rowid) from ".$prefix_doli."paiement";
        $req_id_paiement=mysql_query($req_id_paiement);
        $id_paiement=mysql_result($req_id_paiement,0,"max(rowid)");
        $id_paiement=$id_paiement+1;
        $sql_recup_verif_paiement="select * from ".$prefix_doli."paiement where amount='".$total_paid_real_TTC."' and datep='".$dateorder."'";
        $result_verif_paiement = mysql_query($sql_recup_verif_paiement) or die($sql_recup_verif_paiement."<br />\n".mysql_error());
        $donnees_verif_paiement = mysql_fetch_array($result_verif_paiement);
        $verif_paiement=$donnees_verif_paiement['amount'];
        if ($verif_paiement!="")
            {
            $rowid_paiement=$donnees_verif_paiement['rowid'];
            }
        if ($verif_paiement=="")
            {
            $rowid_paiement=$id_paiement;
            }
        $req_rowid_bank="select max(rowid) from ".$prefix_doli."bank";
        $req_rowid_bank=mysql_query($req_rowid_bank);
        $id_bank=mysql_result($req_rowid_bank,0,"max(rowid)");
        $id_bank=$id_bank+1;
        $sql_recup_verif_bank="select * from ".$prefix_doli."bank where datec='".$dateorder."' and amount='".$total_paid_real_TTC."'";
        $result_verif_bank = mysql_query($sql_recup_verif_bank) or die($sql_recup_verif_bank."<br />\n".mysql_error());
        $donnees_verif_bank = mysql_fetch_array($result_verif_bank);
        $verif_bank=$donnees_verif_bank['datec'];
        if ($verif_bank==$date_commande)
            {
            $rowid_bank=$donnees_verif_bank['rowid'];
            }
        if ($verif_bank!=$date_commande)
            {
            $rowid_bank=$id_bank;
            }
        $num_releve = $dateorder;
        $num_releve = str_replace( "-", "", $num_releve);
        $lg_max = 6;
        if (strlen($num_releve) > $lg_max)
            {
            $num_releve = substr($num_releve, 0, $lg_max);
            }
        
        $info_erreur="Erreur de synchro sur : PAIEMENT - ID PAIEMENT : $rowid_paiement - ID BANK : $rowid_bank";//or die($info_erreur."<br />\n".mysql_error())    
        mysql_query ("INSERT INTO ".$prefix_doli."paiement (rowid,datec,tms,datep,amount,fk_paiement,fk_bank,statut) 
            VALUES ('$rowid_paiement','$dateorder','$dateorder','$dateorder','$total_paid_real_TTC','$rowid_mode_paiement','$rowid_bank',0)"); 
        
        $info_erreur="Erreur de synchro sur : paiement_facture - ID PAIEMENT : $rowid_paiement - ID FACTURE : $rowid_facture";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("INSERT INTO ".$prefix_doli."paiement_facture (rowid,fk_paiement,fk_facture,amount) 
            VALUES ('$rowid_paiement','$rowid_paiement','$rowid_facture','$total_paid_real_TTC')") 
                Or mysql_query ("UPDATE ".$prefix_doli."paiement_facture set amount='$total_paid_real_TTC' where rowid='".$rowid_paiement."'")
                    or die($info_erreur."<br />\n".mysql_error()); 
        
        $info_erreur="Erreur de synchro sur : UPDATE statut facture - ID FACTURE : $rowid_facture";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("UPDATE ".$prefix_doli."facture set paye='$paye',amount='$total_paid_real_TTC',fk_statut=2 where rowid='".$rowid_facture."'")
            or die($info_erreur."<br />\n".mysql_error());
        
        $info_erreur="Erreur de synchro sur : bank - ID BANK : $rowid_bank - EMETTEUR PAIEMENT : $emetteur_paiement - DATE : $dateorder - MONTANT : $total_paid_real_TTC";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("INSERT INTO ".$prefix_doli."bank (rowid,datec,datev,dateo,amount,label,fk_account,fk_type,banque,emetteur) 
            VALUES ('$rowid_bank','$dateorder','$dateorder','$dateorder','$total_paid_real_TTC','(CustomerInvoicePayment)','$id_bank_account','VAD',0,'$emetteur_paiement')") 
                Or mysql_query ("UPDATE ".$prefix_doli."bank set datec='$dateorder',datev='$dateorder',dateo='$dateorder',amount='$total_paid_real_TTC',label='(CustomerInvoicePayment)',fk_type='VAD',banque=0,emetteur='$emetteur_paiement' where rowid='".$rowid_bank."'")
                    or die($info_erreur."<br />\n".mysql_error());
        
        $info_erreur="Erreur de synchro sur : bank_url 1";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("INSERT INTO ".$prefix_doli."bank_url (fk_bank,url_id,url,label,type) 
            VALUES ('$rowid_bank','$rowid_paiement','/_doli/htdocs/compta/paiement/fiche.php?id=','(paiement)','payment')") 
                Or mysql_query ("UPDATE ".$prefix_doli."bank_url set url='/_doli/htdocs/compta/paiement/fiche.php?id=',label='(paiement)',type='payment' where fk_bank='".$rowid_bank."' and url_id='".$rowid_paiement."'")
                    or die($info_erreur."<br />\n".mysql_error());
        
        $info_erreur="Erreur de synchro sur : bank_url 2 - EMETTEUR PAIEMENT : $emetteur_paiement";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("INSERT INTO ".$prefix_doli."bank_url (fk_bank,url_id,url,label,type) 
            VALUES ('$rowid_bank','$rowid_client','/_doli/htdocs/comm/fiche.php?socid=','$emetteur_paiement','company')") 
                Or mysql_query ("UPDATE ".$prefix_doli."bank_url set url='/_doli/htdocs/comm/fiche.php?socid=',label='$emetteur_paiement',type='company' where fk_bank='".$rowid_bank."' and url_id='".$rowid_client."'")
                    or die($info_erreur."<br />\n".mysql_error());
        } 
    // FIN ECRITURE DU PAIEMENT SI POSSIBLE ***********************************************************

    // ECRITURE RAPPROCHEE SI POSSIBLE **********************************************************
    if ($creer_facture=="oui")
        {    
        
        $info_erreur="Erreur de synchro sur : ECRITURE RAPPROCHEE - EMETTEUR PAIEMENT : $emetteur_paiement";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("INSERT INTO ".$prefix_doli."bank (rowid,datec,datev,dateo,amount,label,fk_account,num_releve,rappro,fk_type,banque,emetteur) 
            VALUES ('$rowid_bank','$dateorder','$dateorder','$dateorder','$total_paid_real_TTC','(CustomerInvoicePayment)','$id_bank_account','$num_releve',1,'VAD',0,'$emetteur_paiement')") 
                Or mysql_query ("UPDATE ".$prefix_doli."bank set datec='$dateorder',datev='$dateorder',dateo='$dateorder',amount='$total_paid_real_TTC',label='(CustomerInvoicePayment)',num_releve='".$num_releve."',rappro=1,fk_type='VAD',banque=0,emetteur='$emetteur_paiement' where rowid='".$rowid_bank."'")
                    or die($info_erreur."<br />\n".mysql_error());
        
        $info_erreur="Erreur de synchro sur : ECRITURE RAPPROCHEE bank_url 1 - EMETTEUR PAIEMENT : $emetteur_paiement";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("INSERT INTO ".$prefix_doli."bank_url (fk_bank,url_id,url,label,type) 
            VALUES ('$rowid_bank','$rowid_paiement','/_doli/htdocs/compta/paiement/fiche.php?id=','(paiement)','payment')") 
                Or mysql_query ("UPDATE ".$prefix_doli."bank_url set url='/_doli/htdocs/compta/paiement/fiche.php?id=',label='(paiement)',type='payment' where fk_bank='".$rowid_bank."' and url_id='".$rowid_paiement."'")
                    or die($info_erreur."<br />\n".mysql_error());
    
        $info_erreur="Erreur de synchro sur : ECRITURE RAPPROCHEE bank_url 2 - EMETTEUR PAIEMENT : $emetteur_paiement";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("INSERT INTO ".$prefix_doli."bank_url (fk_bank,url_id,url,label,type) 
            VALUES ('$rowid_bank','$rowid_client','/_doli/htdocs/comm/fiche.php?socid=','$emetteur_paiement','company')") 
                Or mysql_query ("UPDATE ".$prefix_doli."bank_url set url='/_doli/htdocs/comm/fiche.php?socid=',label='$emetteur_paiement',type='company' where fk_bank='".$rowid_bank."' and url_id='".$rowid_client."'")
                    or die($info_erreur."<br />\n".mysql_error());
        
        $sql_recup_verif_bank_class="select * from ".$prefix_doli."bank_class where lineid='".$rowid_bank."'";
        $result_verif_bank_class= mysql_query($sql_recup_verif_bank_class) or die($sql_recup_verif_bank_class."<br />\n".mysql_error());
        $donnees_verif_bank_class = mysql_fetch_array($result_verif_bank_class);
        $verif_bank_class=$donnees_verif_bank_class['fk_categ'];
        if ($verif_bank_class=="")
            {
            $info_erreur="Erreur de synchro sur : ECRITURE RAPPROCHEE INSERT bank_class - EMETTEUR PAIEMENT : $emetteur_paiement";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."bank_class (lineid,fk_categ) 
                VALUES ('$rowid_bank','$id_bank_categ')")
                    or die($info_erreur."<br />\n".mysql_error());
            }
        if ($verif_bank_class!="")
            {
            $info_erreur="Erreur de synchro sur : ECRITURE RAPPROCHEE UPDATE bank_class - EMETTEUR PAIEMENT : $emetteur_paiement";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("UPDATE ".$prefix_doli."bank_class set fk_categ='$id_bank_categ' where lineid='".$rowid_bank."'")
                or die($info_erreur."<br />\n".mysql_error());
            }
        }
    // FIN ECRITURE RAPPROCHEE SI POSSIBLE **********************************************************

    // VERIFICATION DES LIENS ENTRE LE PAIEMENT, BANQUE,FACTURE et LE CLIENT *********************************************************�
    if ($rowid_client!="")
        {
        $info_erreur="Erreur de synchro sur : VERIFICATION DES LIENS ENTRE LE PAIEMENT, BANQUE,FACTURE et LE CLIENT - ID FACTURE : $rowid_facture - ID PAIEMENT : $rowid_paiement - EMETTEUR PAIEMENT : $emetteur_paiement";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query ("UPDATE ".$prefix_doli."paiement_facture set fk_facture='$rowid_facture',amount='$total_paid_real_TTC' where rowid='".$rowid_paiement."'")
            or die($info_erreur."<br />\n".mysql_error());
        }
    // FIN VERIFICATION DES LIENS ENTRE LE PAIEMENT, BANQUE,FACTURE et LE CLIENT *********************************************************�

    // INSERTION DU DETAIL DE LA COMMANDE ******************************************************************
    mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
    mysql_select_db("$base_presta");
    mysql_query("SET NAMES UTF8");
    $sql_detail="select * from ".$prefix_presta."order_detail where id_order='".$id_order."'";
    $result_detail = mysql_query($sql_detail) or die($sql_detail."<br />\n".mysql_error()); 
    while ($donnees = mysql_fetch_assoc($result_detail) ) 
        {
        $rang=$rang+1;
        $product_id=$donnees['product_id'];
        $product_attribute_id=$donnees['product_attribute_id'];
        $product_name_order = $donnees['product_name'];
        $rowid_existe_plus=$donnees['product_id'];
        $product_name_existe_plus=$donnees['product_name'];
        $product_reference_existe_plus=$donnees['product_reference'];
        $barcode_commande=$donnees['product_ean13'];
        $reduction_amount=$donnees['reduction_amount'];
        $qty_article=$donnees['product_quantity'];
        $qty_article=sprintf("%.2f",$qty_article);

        // CALCUL DU PRIX DU PRODUIT SUR LA COMMANDE **********************************************
        $donnees_product_order_detail = Db::getInstance()->GetRow("select * from ".$prefix_presta."order_detail where id_order = '".$id_order."' and product_id = '".$product_id."'");
        if ($version_presta<"1.5")     	       
            {
            $unit_price_tax_excl_product_order_detail = $donnees_product_order_detail['product_quantity_discount'];
            if ($unit_price_tax_excl_product_order_detail=="0.000000")
                {
                $unit_price_tax_excl_product_order_detail = $donnees_product_order_detail['product_price'];
                $unit_price_tax_excl_product_order_detail=sprintf("%.2f",$unit_price_tax_excl_product_order_detail);
                }
            $unit_price_tax_excl_product_order_detail=sprintf("%.2f",$unit_price_tax_excl_product_order_detail);
            $tax_rate_product_order_detail = $donnees_product_order_detail['tax_rate'];
            $tax_rate_product_order_detail=sprintf("%.2f",$tax_rate_product_order_detail);
            }                            
        if ($version_presta>="1.5")     	
            {
            $unit_price_tax_excl_product_order_detail = $donnees_product_order_detail['unit_price_tax_excl'];
            $unit_price_tax_excl_product_order_detail=sprintf("%.2f",$unit_price_tax_excl_product_order_detail);
            $donnees_tax_rate_product = Db::getInstance()->GetRow("select * from ".$prefix_presta."product where id_product='".$product_id."'");
            $id_tax_rules_group=$donnees_tax_rate_product['id_tax_rules_group'];
            $donnees_id_tax_rules_group = Db::getInstance()->GetRow("select * from ".$prefix_presta."tax_rule where id_tax_rules_group='".$id_tax_rules_group."'");
            $id_tax=$donnees_id_tax_rules_group['id_tax'];
            $donnees_product_order_detail = Db::getInstance()->GetRow("select * from ".$prefix_presta."tax where id_tax='".$id_tax."'");
            $tax_rate_product_order_detail = $donnees_product_order_detail['rate'];
            $tax_rate_product_order_detail=sprintf("%.2f",$tax_rate_product_order_detail);
            }
        $taux_tax_rate_product_order_detail=$tax_rate_product_order_detail/100;
        $taux_tax_rate_product_order_detail=$taux_tax_rate_product_order_detail+1;
        $taux_tax_rate_product_order_detail=sprintf("%.2f",$taux_tax_rate_product_order_detail);
        
        $unit_price_tax_incl_product_order_detail = $unit_price_tax_excl_product_order_detail*$taux_tax_rate_product_order_detail;
        $unit_price_tax_incl_product_order_detail=sprintf("%.2f",$unit_price_tax_incl_product_order_detail);
        
        $tva_unit_price_product_order_detail=$unit_price_tax_incl_product_order_detail-$unit_price_tax_excl_product_order_detail;
        $tva_unit_price_product_order_detail=sprintf("%.2f",$tva_unit_price_product_order_detail);
        
        $reduction_amount=$reduction_amount/$taux_tax_rate_product_order_detail;
        
        $unit_price_tax_excl_product_order_detail=$unit_price_tax_excl_product_order_detail-$reduction_amount;
        $unit_price_tax_excl_product_order_detail=sprintf("%.2f",$unit_price_tax_excl_product_order_detail);
        
        $unit_price_tax_incl_product_order_detail=$unit_price_tax_excl_product_order_detail*$taux_tax_rate_product_order_detail;
        $unit_price_tax_incl_product_order_detail=sprintf("%.2f",$unit_price_tax_incl_product_order_detail);
        
        $total_article_ht=$unit_price_tax_excl_product_order_detail*$qty_article;
        $total_article_ht=sprintf("%.2f",$total_article_ht);
        
        $total_ttc_article=$unit_price_tax_incl_product_order_detail*$qty_article;
        $total_ttc_article=sprintf("%.2f",$total_ttc_article);
        
        $total_tva_article=$total_ttc_article-$total_article_ht;
        $total_tva_article=sprintf("%.2f",$total_tva_article);                                                             
        // FIN CALCUL DU PRIX DU PRODUIT SUR LA COMMANDE **********************************************

        // CALCUL DU PRIX DU PRODUIT NORMALEMENT SANS REDUCTION **********************************************
        $donnees_product = Db::getInstance()->GetRow("select * from ".$prefix_presta."product where id_product='".$product_id."'");
        $prix_produit_normal_HT=$donnees_product['price'];

        // VERIFICATION SI REDUCTION / PROMO ******************************************************            
        $donnees_specific_price = Db::getInstance()->GetRow("select * from ".$prefix_presta."specific_price where id_product='".$product_id."'");
        $reduc_valeur=$donnees_specific_price['reduction'];
        $reduction_type=$donnees_specific_price['reduction_type'];
        $date_debut_reduc=$donnees_specific_price['from'];
        $date_debut_reduc = str_replace( "-", " ", $date_debut_reduc);
        $date_debut_reduc = str_replace( ":", " ", $date_debut_reduc);
        $date_debut_reduc = str_replace( " ", "", $date_debut_reduc);
        $date_fin_reduc=$donnees_specific_price['to'];
        $date_fin_reduc = str_replace( "-", " ", $date_fin_reduc);
        $date_fin_reduc = str_replace( ":", " ", $date_fin_reduc);
        $date_fin_reduc = str_replace( " ", "", $date_fin_reduc);
        $date_fin_reduc_lu=$donnees_specific_price['to'];
        $date_jour = date('Y-m-d G:i:s');
        $date_jour = str_replace( "-", " ", $date_jour);
        $date_jour = str_replace( ":", " ", $date_jour);
        $date_jour = str_replace( " ", "", $date_jour);
        $prix_produit_normal_HT=$donnees_product['price'];
        $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);
        if (($date_jour<$date_debut_reduc) or ($date_jour>$date_fin_reduc))
            {
            $prix_produit_normal_HT=$donnees_product['price'];
            $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);
            }
        if (($date_jour>=$date_debut_reduc) and ($date_jour<=$date_fin_reduc))
            {
            if ($reduction_type=="percentage")
                {
                $calcul_valeur_pourcen=$prix_produit_normal_HT*$reduc_valeur;
                $prix_produit_normal_HT=$prix_produit_normal_HT-$calcul_valeur_pourcen;
                $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);
                }
            if (($reduction_type=="amount"))
                {
                $prix_produit_normal_HT=$prix_produit_normal_HT-$reduc_valeur;
                $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);
                }
            }
        if (($date_fin_reduc_lu==="0000-00-00 00:00:00"))
            {
            if ($reduction_type=="percentage")
                {
                $calcul_valeur_pourcen=$prix_produit_normal_HT*$reduc_valeur;
                $prix_produit_normal_HT=$prix_produit_normal_HT-$calcul_valeur_pourcen;
                $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);
                }
            if (($reduction_type=="amount"))
                {
                $prix_produit_normal_HT=$prix_produit_normal_HT-$reduc_valeur;
                $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);
                }
            }
        if($prix_produit_normal_HT<=0)
            {
            $prix_produit_normal_HT=0;
            }
        // FIN VERIFICATION SI REDUCTION / PROMO ******************************************************

        // TAUX TVA PRODUIT NORMAL ***********************************************************************    
        if ($version_presta>"1.3")
            {
            $id_tax_rules_group=$donnees_product['id_tax_rules_group'];
            $donnees_id_tax_rules_group = Db::getInstance()->GetRow("select * from ".$prefix_presta."tax_rule where id_tax_rules_group='".$id_tax_rules_group."'");
            $id_tax=$donnees_id_tax_rules_group['id_tax'];
            $donnees_tax = Db::getInstance()->GetRow("select * from ".$prefix_presta."tax where id_tax='".$id_tax."'");
            $tax_rate_product_normal=$donnees_tax['rate'];
            }
        if ($version_presta<="1.3")
            {
            $id_tax=$donnees_product['id_tax'];
            $donnees_tax = Db::getInstance()->GetRow("select * from ".$prefix_presta."tax where id_tax='".$id_tax."'");
            $tax_rate_product_normal=$donnees_tax['rate'];
            }
        $taux_taxe_produits_normal=$tax_rate_product_normal/100;
        $taux_taxe_produits_normal=$taux_taxe_produits_normal+1;
        $taux_taxe_produits_normal=sprintf("%.2f",$taux_taxe_produits_normal);
        // FIN TAUX TVA PRODUIT NORMAL ***********************************************************************

        $prix_produit_normal_HT=sprintf("%.2f",$prix_produit_normal_HT);
        $prix_produit_normal_TTC=$prix_produit_HT*$taux_taxe_produits_normal;
        $prix_produit_normal_TTC=sprintf("%.2f",$prix_produit_normal_TTC);
        $tva_produit_normal=$prix_produit_normal_TTC-$prix_produit_normal_HT;
        $tva_produit_normal=sprintf("%.2f",$tva_produit_normal);
        // FIN CALCUL DU PRIX DU PRODUIT NORMALEMENT SANS REDUCTION **********************************************
    
        // RECUPERATION DES DONNEES DU PRODUIT DANS LA BASE ARTICLES *********************************************
        $active=$donnees_product['active'];
        $ref_produit=$donnees_product['reference'];
            $chaine=$ref_produit;    
            $chaine= produits_caract("$chaine");
            $ref_produit=$chaine;
        $en_vente=$donnees_product['active'];
        $barcode=$donnees_product['ean13'];
        $datec=$donnees_product['date_add'];
        $tms=$donnees_product['date_upd'];
        $weight=$donnees_product['weight'];
        // FIN RECUPERATION DES DONNEES DU PRODUIT DANS LA BASE ARTICLES *********************************************

        // RECUPERATION ID IMAGE ****************************************************
        $donnees_id_image = Db::getInstance()->GetRow("select * from ".$prefix_presta."image where id_product='".$product_id."'");
        $id_image=$donnees_id_image['id_image'];
        // FIN RECUPERATION ID IMAGE ****************************************************

        // VERIFICATION DE LA DESCRIPTION PRODUIT **********************************************************    
        $donnees_product_desc = Db::getInstance()->GetRow("select * from ".$prefix_presta."product_lang where id_product='".$product_id."' and id_lang='".$lang."'");
        $label_produit=$donnees_product_desc['name'];
            $chaine=$label_produit;    
            $chaine= produits_caract("$chaine");
            $label_produit=$chaine;
        if($label_produit=="")
            {
            $label_produit="D�faut de Label sur ID $product_id";
            }
        if($ref_produit=="")
            {
            $ref_produit=$label_produit;
            }
        $description_produit=$donnees_product_desc['description'];
            $chaine=$description_produit;    
            $chaine= produits_caract("$chaine");
            $description_produit=$chaine;
        if ($description_produit=="")
            {
            $ref_produit="LA REFERENCE DU PRODUIT N\'EXISTE PLUS";
            $label_produit="LE LABEL DU PRODUIT N\'EXISTE PLUS";
            $description_produit="LA DESCRIPTION DU PRODUIT N\'EXISTE PLUS";
            }                          
        // FIN VERIFICATION DE LA DESCRIPTION PRODUIT **********************************************************

        // PRODUIT NORMAL (PAS UNE DECLINAISON) *****************************    
        if ($product_attribute_id==0)
            {
    
            // IMAGE PRODUIT EXISTE PAS **********************************
            if (($id_image=="") and ($option_image!=""))
                {
                $description_produit="$description_produit<br />-<br />";
                }
            // FIN IMAGE PRODUIT EXISTE PAS **********************************
            
            // IMAGE EXISTE NOUVEAU SYSTEME STOCKAGE ******************************
            if (($id_image!="") and ($option_image!=""))
                { 
                if (!$fp = fopen("../../img/p/$product_id-$id_image-home.jpg","r"))
                    { 
                    $dossier=substr($id_image,0,1);
                    $chemin = "../../img/p/$dossier";
                    $dossier_suiv=substr($id_image,1,1);
                    if($dossier_suiv!="")
                        {
                        $chemin = "$chemin/$dossier_suiv";
                            $dossier_suiv=substr($id_image,2,1);
                            if($dossier_suiv!="")
                                {
                                $chemin = "$chemin/$dossier_suiv";
                                }
                                $dossier_suiv=substr($id_image,3,1);
                                if($dossier_suiv!="")
                                    {
                                    $chemin = "$chemin/$dossier_suiv";
                                    }
                                    $dossier_suiv=substr($id_image,4,1);
                                    if($dossier_suiv!="")
                                        {
                                        $chemin = "$chemin/$dossier_suiv";
                                        }
                                        $dossier_suiv=substr($id_image,5,1);
                                        if($dossier_suiv!="")
                                            {
                                            $chemin = "$chemin/$dossier_suiv";
                                            }
                                            $dossier_suiv=substr($id_image,6,1);
                                            if($dossier_suiv!="")
                                                {
                                                $chemin = "$chemin/$dossier_suiv";
                                                }
                                                $dossier_suiv=substr($id_image,7,1);
                                                if($dossier_suiv!="")
                                                    {
                                                    $chemin = "$chemin/$dossier_suiv";
                                                    }
                                                    $dossier_suiv=substr($id_image,8,1);
                                                    if($dossier_suiv!="")
                                                        {
                                                        $chemin = "$chemin/$dossier_suiv";
                                                        }
                                                        $dossier_suiv=substr($id_image,9,1);
                                                        if($dossier_suiv!="")
                                                            {
                                                            $chemin = "$chemin/$dossier_suiv";
                                                            }
                                                            $dossier_suiv=substr($id_image,10,1);
                                                            if($dossier_suiv!="")
                                                                {
                                                                $chemin = "$chemin/$dossier_suiv";
                                                                }
                        }
                    $chemin = str_replace( "../..", "$uri", $chemin);
                    $title =  $ref_produit;
                    $title =  str_replace( " ", "_", $title);
                    $description_produit="$description_produit<br /><img title=$title src=$chemin/$id_image-home.jpg alt=Produit/>";
                    } 
            // FIN IMAGE EXISTE NOUVEAU SYSTEME STOCKAGE ******************************
        
            // IMAGE EXISTE ANCIEN SYSTEME STOCKAGE ******************************            
            else
                {
                $title =  $ref_produit;
                $title =  str_replace( " ", "_", $title);
                $description_produit="$description_produit<br /><img title=$title src=$uri/img/p/$product_id-$id_image-home.jpg alt=Produit/>";                    
                }
            // FIN IMAGE EXISTE ANCIEN SYSTEME STOCKAGE ******************************
                }
            // FIN PRODUIT NORMAL (PAS UNE DECLINAISON) *****************************
    
            // PRODUIT NORMAL SANS IMAGE ********************************************************************        
            if ($option_image=="")
                {
                $description_produit=$description_produit;
                }
            }
        // FIN PRODUIT NORMAL SANS IMAGE ********************************************************************

        // RATTACHEMENT DU PRODUIT A LA CATEGORIE ***************************************************
        $sql_category_product="select * from ".$prefix_presta."category_product where id_product='".$product_id."'";
        $result_category_product = mysql_query($sql_category_product) or die($sql_category_product."<br />\n".mysql_error());
        while ($creer_category_product = mysql_fetch_array($result_category_product))
            {
            $id_category_prod=$creer_category_product['id_category'];
            mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
            mysql_select_db("$base_doli");
            mysql_query("SET NAMES UTF8");
            mysql_query ("INSERT INTO ".$prefix_doli."categorie_product (fk_categorie,fk_product) 
                VALUES ('".$id_category_prod."','".$product_id."')"); 
            mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
            mysql_select_db("$base_presta");     
            mysql_query("SET NAMES UTF8");
            }
        // FIN RATTACHEMENT DU PRODUIT A LA CATEGORIE ***************************************************

        // PRODUIT DECLINAISON ***********************************************************        
            if ($product_attribute_id!=0)
                {
                $creer_declinaisons = Db::getInstance()->GetRow("select * from ".$prefix_presta."product_attribute where id_product_attribute='".$product_attribute_id."'");
                $id_product_attribute=$product_attribute_id;
    //             $id_product_attribute=$creer_declinaisons['id_product_attribute'];
                $donnees_id_image = Db::getInstance()->GetRow("select * from ".$prefix_presta."product_attribute_image where id_product_attribute='".$id_product_attribute."'");
                $id_image=$donnees_id_image['id_image']; 
                $ref_attribut=$creer_declinaisons['reference'];
                    $chaine=$ref_attribut;    
                    $chaine= produits_caract("$chaine");
                    $ref_attribut=$chaine;
                $supplier_reference =$creer_declinaisons['supplier_reference'];
                    $chaine=$supplier_reference;    
                    $chaine= produits_caract("$chaine");
                    $supplier_reference=$chaine;
                $location =$creer_declinaisons['location'];
                $barcode =$creer_declinaisons['ean13'];
                $upc =$creer_declinaisons['upc'];
                $wholesale_price =$creer_declinaisons['wholesale_price'];
                $wholesale_price=sprintf("%.2f",$wholesale_price);
                $price_att =$creer_declinaisons['price'];
                $price_att=sprintf("%.2f",$price_att);
                $ecotax =$creer_declinaisons['ecotax'];
                $ecotax=sprintf("%.2f",$ecotax);
                $quantity =$creer_declinaisons['quantity'];
                $weight =$creer_declinaisons['weight'];
                $unit_price_impact =$creer_declinaisons['unit_price_impact'];
                $price_attribut= $price_att+$prix_produit_normal_HT;
                $price_attribut=sprintf("%.2f",$price_attribut);
                $donnees_product_attribute_combination = Db::getInstance()->GetRow("select * from ".$prefix_presta."product_attribute_combination where id_product_attribute='".$id_product_attribute."'");
                $product_attribute_combination=$donnees_product_attribute_combination['id_attribute'];
                $donnees_attribute = Db::getInstance()->GetRow("select * from ".$prefix_presta."attribute where id_attribute='".$product_attribute_combination."'");
                $id_attribute_group =$donnees_attribute['id_attribute_group'];
                $donnees_attribute_group_lang = Db::getInstance()->GetRow("select * from ".$prefix_presta."attribute_group_lang where id_attribute_group='".$id_attribute_group."' and id_lang='".$lang."'");
                $attribute_group_name =$donnees_attribute_group_lang['name'];
                    $chaine=$attribute_group_name;    
                    $chaine= produits_caract("$chaine");
                    $attribute_group_name=$chaine;
                $donnees_attribute_lang = Db::getInstance()->GetRow("select * from ".$prefix_presta."attribute_lang where id_attribute='".$product_attribute_combination."' and id_lang='".$lang."'");
                $attribute_lang_name =$donnees_attribute_lang['name'];                    
                    $chaine=$attribute_lang_name;    
                    $chaine= produits_caract("$chaine");
                    $attribute_lang_name=$chaine;
                $id_attribute_lang_name=$donnees_attribute_lang['id_attribute'];
                if ($attribute_lang_name=="")
                    {
                    $attribute_lang_name="*";
                    $attribute_group_name="DECLINAISON";  
                    }
                if ($ref_attribut=="")
                    {
                    $ref_attribut="$ref_produit $attribute_lang_name";
                    }
                if($ref_attribut==$ref_produit)
                    {
                    $ref_attribut="$ref_produit $attribute_lang_name *";
                    }
            $label_produit_attribut="$label_produit<br /> $attribute_group_name = $attribute_lang_name";
            $description_produit_attribut="$description_produit<br /><strong> $attribute_group_name = $attribute_lang_name</strong>";
    
            // IMAGE PRODUIT EXISTE PAS **********************************
            if (($id_image=="") and ($option_image!=""))
                {
                $description_produit_attribut="$description_produit_attribut<br />-<br />";
                }
            // FIN IMAGE PRODUIT EXISTE PAS **********************************

            // IMAGE EXISTE NOUVEAU SYSTEME STOCKAGE ******************************
            if (($id_image!="") and ($option_image!=""))
                { 
                if (!$fp = fopen("../../img/p/$id_product_attribute-$id_image-home.jpg","r")) 
                    { 
                    $dossier=substr($id_image,0,1);
                    $chemin = "../../img/p/$dossier";
                    $dossier_suiv=substr($id_image,1,1);
                    if($dossier_suiv!="")
                        {
                        $chemin = "$chemin/$dossier_suiv";
                            $dossier_suiv=substr($id_image,2,1);
                            if($dossier_suiv!="")
                                {
                                $chemin = "$chemin/$dossier_suiv";
                                }
                                $dossier_suiv=substr($id_image,3,1);
                                if($dossier_suiv!="")
                                    {
                                    $chemin = "$chemin/$dossier_suiv";
                                    }
                                    $dossier_suiv=substr($id_image,4,1);
                                    if($dossier_suiv!="")
                                        {
                                        $chemin = "$chemin/$dossier_suiv";
                                        }
                                        $dossier_suiv=substr($id_image,5,1);
                                        if($dossier_suiv!="")
                                            {
                                            $chemin = "$chemin/$dossier_suiv";
                                            }
                                            $dossier_suiv=substr($id_image,6,1);
                                            if($dossier_suiv!="")
                                                {
                                                $chemin = "$chemin/$dossier_suiv";
                                                }
                                                $dossier_suiv=substr($id_image,7,1);
                                                if($dossier_suiv!="")
                                                    {
                                                    $chemin = "$chemin/$dossier_suiv";
                                                    }
                                                    $dossier_suiv=substr($id_image,8,1);
                                                    if($dossier_suiv!="")
                                                        {
                                                        $chemin = "$chemin/$dossier_suiv";
                                                        }
                                                        $dossier_suiv=substr($id_image,9,1);
                                                        if($dossier_suiv!="")
                                                            {
                                                            $chemin = "$chemin/$dossier_suiv";
                                                            }
                                                            $dossier_suiv=substr($id_image,10,1);
                                                            if($dossier_suiv!="")
                                                                {
                                                                $chemin = "$chemin/$dossier_suiv";
                                                                }
                        }
                    $chemin = str_replace( "../..", "$uri", $chemin);
                    $title =  $ref_attribut;
                    $title =  str_replace( " ", "_", $title);
                    $description_produit_attribut="$description_produit_attribut<br /><img title=$title src=$chemin/$id_image-home.jpg alt=Produit/>";
                    } 
            // FIN IMAGE EXISTE NOUVEAU SYSTEME STOCKAGE ******************************
        
            // IMAGE EXISTE ANCIEN SYSTEME STOCKAGE ******************************
            else
                {
                $title =  $ref_attribut;
                $title =  str_replace( " ", "_", $title);
                $description_produit_attribut="$description_produit_attribut<br /><img title=$title src=$uri/img/p/$id_product_attribute-$id_image-home.jpg alt=Produit/>";
                }
            // FIN IMAGE EXISTE ANCIEN SYSTEME STOCKAGE ******************************
                
                }
            // FIN PRODUIT DECLINAISON AVEC IMAGE ***********************************************************

            // PRODUIT DECLINAISON SANS IMAGE ***********************************************************            
            if ($option_image=="")
                {
                $description_produit_attribut=$description_produit_attribut;
                }

            // DEFINITION ID DU PRODUIT DECLINAISON *************************************    
            $id_product_attribut_creer="99$id_product_attribute";
            // FIN DEFINITION ID DU PRODUIT DECLINAISON *************************************
    
            // FIN PRODUIT DECLINAISON SANS IMAGE ***********************************************************

            // RATTACHEMENT DU PRODUIT DECLINAISON A LA CATEGORIE ***************************************************
            $sql_category_product="select * from ".$prefix_presta."category_product where id_product='".$product_id."'";
            $result_category_product = mysql_query($sql_category_product) or die($sql_category_product."<br />\n".mysql_error());
            while ($creer_category_product = mysql_fetch_array($result_category_product))
                {
                $id_category_prod=$creer_category_product['id_category'];
                mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
                mysql_select_db("$base_doli");
                mysql_query("SET NAMES UTF8");
                mysql_query ("INSERT INTO ".$prefix_doli."categorie_product (fk_categorie,fk_product) 
                    VALUES ('".$id_category_prod."','".$id_product_attribut_creer."')"); 
                mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
                mysql_select_db("$base_presta");     
                mysql_query("SET NAMES UTF8");
                }
            // FIN RATTACHEMENT DU PRODUIT DECLINAISON A LA CATEGORIE ***************************************************
            
            $product_id=$id_product_attribut_creer;
            $ref_produit=$ref_attribut;
            $label_produit=$label_produit_attribut;
            $description_produit=$description_produit_attribut;
            $prix_produit_normal_HT=$price_attribut;
            $prix_produit_normal_TTC=$prix_produit_normal_HT*$taux_tax_rate_product_order_detail;
            $prix_produit_normal_TTC=sprintf("%.2f",$prix_produit_normal_TTC);
            }
    
        // EXPORT PRODUIT VERS DOLIBARR *************************************************                
        mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
        mysql_select_db("$base_doli");
        mysql_query("SET NAMES UTF8");
        $info_erreur="Erreur de synchro sur : EXPORT PRODUIT VERS DOLIBARR - ID PRODUIT : $product_id - REFERENCE PRODUIT : $ref_produit";//or die($info_erreur."<br />\n".mysql_error())
        if ($version_dolibarr>="3")
            {
            mysql_query ("INSERT INTO ".$prefix_doli."product (rowid,datec,tms,ref,entity,label,description,note,price,price_ttc,tva_tx,tosell,barcode,weight,finished) 
                VALUES ($product_id,'$datec','$date_update','$product_id','$entity','$ref_produit','$ref_produit','$description_produit','$prix_produit_normal_HT','$prix_produit_normal_TTC','$tax_rate_product_normal','$active','$barcode','$weight',1)") 
                    or mysql_query ("UPDATE ".$prefix_doli."product set datec='$datec',tms='$date_update',ref='$product_id',entity='$entity',label='$ref_produit',description='$ref_produit',note='$description_produit',price='$prix_produit_normal_HT',price_ttc='$prix_produit_normal_TTC',tva_tx='$tax_rate_product_normal',tosell='$active',barcode='$barcode',weight='$weight',finished=1 where rowid=$product_id")
                        or die($info_erreur."<br />\n".mysql_error());
            }
        if ($version_dolibarr<"3")
            {
            mysql_query ("INSERT INTO ".$prefix_doli."product (rowid,datec,tms,ref,entity,label,description,note,price,price_ttc,tva_tx,envente,barcode,weight,stock) 
                VALUES ($product_id,'$datec','$date_update','$product_id','$entity','$ref_produit','$ref_produit','$description_produit','$prix_produit_normal_HT','$prix_produit_normal_TTC','$tax_rate_product_normal','$active','$barcode','$weight',1)")  
                    or mysql_query ("UPDATE ".$prefix_doli."product set datec='$datec',tms='$date_update',ref='$product_id',entity='$entity',label='$ref_produit',description='$ref_produit',note='$description_produit',price='$prix_produit_normal_HT',price_ttc='$prix_produit_normal_TTC',tva_tx='$tax_rate_product_normal',envente='$active',barcode='$barcode',weight='$weight',stock=1 where rowid=$product_id")
                        or die($info_erreur."<br />\n".mysql_error());
            }
        // FIN EXPORT PRODUIT VERS DOLIBARR *************************************************

        // RATTACHEMENT DU PRODUIT AU STOCK CENTRAL *********************************************        
        $sql_recup_verif_product_stock="select * from ".$prefix_doli."product_stock where fk_product='".$product_id."'";
        $result_verif_product_stock = mysql_query($sql_recup_verif_product_stock) or die($sql_recup_verif_product_stock."<br />\n".mysql_error());
        $donnees_verif_product_stock = mysql_fetch_array($result_verif_product_stock);
        $verif_product_stock=$donnees_verif_product_stock['rowid'];
        if ($verif_product_stock=="")
            {
            $info_erreur="Erreur de synchro sur : RATTACHEMENT DU PRODUIT AU STOCK CENTRAL - ID PRODUIT : $product_id";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."product_stock (tms,fk_product,fk_entrepot,reel) 
                VALUES ('$datec',$product_id,1,0)")
                    or die($info_erreur."<br />\n".mysql_error());
            }
        // FIN RATTACHEMENT DU PRODUIT AU STOCK CENTRAL *********************************************

        // AJOUT DU PRODUIT SUR LA PROPAL **************************************
        if ($rowid_client!="")
            {
            $sql_recup_verif_art_propal="select * from ".$prefix_doli."propaldet where fk_propal=$rowid_propal and fk_product=$product_id";
            $result_verif_art_propal = mysql_query($sql_recup_verif_art_propal) or die($sql_recup_verif_art_propal."<br />\n".mysql_error());
            $donnees_verif_art_propal = mysql_fetch_array($result_verif_art_propal);
            $verif_art_propal=$donnees_verif_art_propal['fk_product'];
            if ($verif_art_propal==$product_id)
                {
                $info_erreur="Erreur de synchro sur : UPDATE DU PRODUIT SUR LA PROPAL - ID PROPAL : $rowid_propal - ID PRODUIT : $product_id - NOM DU PRODUIT : $product_name_order";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."propaldet set description='$product_name_order',tva_tx='$tax_rate_product_order_detail',qty='$qty_article',price='$unit_price_tax_excl_product_order_detail',subprice='$unit_price_tax_excl_product_order_detail',total_ht='$total_article_ht',total_tva='$total_tva_article',total_ttc='$total_ttc_article' where fk_propal=$rowid_propal and fk_product=$product_id")
                    or die($info_erreur."<br />\n".mysql_error());  
                }
            else
                {
                $info_erreur="Erreur de synchro sur : INSERT DU PRODUIT SUR LA PROPAL - ID PROPAL : $rowid_propal - ID PRODUIT : $product_id - NOM DU PRODUIT : $product_name_order";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("INSERT INTO ".$prefix_doli."propaldet (fk_propal,fk_product,description,tva_tx,qty,price,subprice,total_ht,total_tva,total_ttc,rang) 
                    values ($rowid_propal,'$product_id','$product_name_order','$tax_rate_product_order_detail','$qty_article','$unit_price_tax_excl_product_order_detail','$unit_price_tax_excl_product_order_detail','$total_article_ht','$total_tva_article','$total_ttc_article','$rang')")
                        or die($info_erreur."<br />\n".mysql_error());
                }
            }
        // FIN AJOUT DU PRODUIT SUR LA PROPAL **************************************
        
        // AJOUT DU PRODUIT SUR LA COMMANDE **************************************
        if ($rowid_client!="")
            {
            $sql_recup_verif_art_commande="select * from ".$prefix_doli."commandedet where 	fk_commande=$rowid_commande and fk_product=$product_id";
            $result_verif_art_commande = mysql_query($sql_recup_verif_art_commande) or die($sql_recup_verif_art_commande."<br />\n".mysql_error());
            $donnees_verif_art_commande = mysql_fetch_array($result_verif_art_commande);
            $verif_art_commande=$donnees_verif_art_commande['fk_product'];      
            if ($verif_art_commande!=$product_id)
                {
                $info_erreur="Erreur de synchro sur : INSERT DU PRODUIT SUR LA COMMANDE - ID COMMANDE : $rowid_commande - ID PRODUIT : $product_id - NOM DU PRODUIT : $product_name_order";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("INSERT INTO ".$prefix_doli."commandedet (	fk_commande,fk_product,description,tva_tx,qty,price,subprice,total_ht,total_tva,total_ttc,rang) 
                    values ($rowid_commande,'$product_id','$product_name_order','$tax_rate_product_order_detail','$qty_article','$unit_price_tax_excl_product_order_detail','$unit_price_tax_excl_product_order_detail','$total_article_ht','$total_tva_article','$total_ttc_article','$rang')")
                        or die($info_erreur."<br />\n".mysql_error());
                
                // DECREMENTE LE STOCK DOLIBARR DU PRODUIT *******************************************
                if ($decremente=="checked")
                    {
                    $info_erreur="Erreur de synchro sur : DECREMENTE LE STOCK DOLIBARR DU PRODUIT - ID COMMANDE : $rowid_commande - ID PRODUIT : $product_id - NOM DU PRODUIT : $product_name_order - QUANTITE DU PRODUIT : $qty_article";//or die($info_erreur."<br />\n".mysql_error())
                    mysql_query("UPDATE ".$prefix_doli."product_stock set reel=reel-'$qty_article' where fk_product='".$product_id."'")
                        or die($info_erreur."<br />\n".mysql_error());
                    }
                // FIN DECREMENTE LE STOCK DOLIBARR DU PRODUIT *******************************************
                
                }
            else
                {
                $info_erreur="Erreur de synchro sur : UPDATE DU PRODUIT SUR LA COMMANDE - ID COMMANDE : $rowid_commande - ID PRODUIT : $product_id - NOM DU PRODUIT : $product_name_order";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."commandedet set description='$product_name_order',tva_tx='$tax_rate_product_order_detail',qty='$qty_article',price='$unit_price_tax_excl_product_order_detail',subprice='$unit_price_tax_excl_product_order_detail',total_ht='$total_article_ht',total_tva='$total_tva_article',total_ttc='$total_ttc_article' where fk_commande=$rowid_commande and fk_product=$product_id")
                    or die($info_erreur."<br />\n".mysql_error());  
                }
            }
        // FIN AJOUT DU PRODUIT SUR LA COMMANDE **************************************
        
        // AJOUT DU PRODUIT SUR LA FACTURE **************************************
        if ($rowid_client!="")
            {
            if ($creer_facture=="oui")
                {
                $sql_recup_verif_art_facture="select * from ".$prefix_doli."facturedet where 	fk_facture=$rowid_facture and fk_product=$product_id";
                $result_verif_art_facture = mysql_query($sql_recup_verif_art_facture) or die($sql_recup_verif_art_facture."<br />\n".mysql_error());
                $donnees_verif_art_facture = mysql_fetch_array($result_verif_art_facture);
                $verif_art_facture=$donnees_verif_art_facture['fk_product'];      
                if ($verif_art_facture!=$product_id)
                    {
                    $info_erreur="Erreur de synchro sur : INSERT DU PRODUIT SUR LA FACTURE - ID FACTURE : $rowid_facture - ID PRODUIT : $product_id - NOM DU PRODUIT : $product_name_order";//or die($info_erreur."<br />\n".mysql_error())
                    mysql_query ("INSERT INTO ".$prefix_doli."facturedet (fk_facture,fk_product,description,tva_tx,qty,subprice,price,total_ht,total_tva,total_ttc,rang) 
                        values ($rowid_facture,'$product_id','$product_name_order','$tax_rate_product_order_detail','$qty_article','$unit_price_tax_excl_product_order_detail','$unit_price_tax_excl_product_order_detail','$total_article_ht','$total_tva_article','$total_ttc_article','$rang')")
                            or die($info_erreur."<br />\n".mysql_error()); 
                    }
                else
                    {
                    $info_erreur="Erreur de synchro sur : UPDATE DU PRODUIT SUR LA FACTURE - ID FACTURE : $rowid_facture - ID PRODUIT : $product_id - NOM DU PRODUIT : $product_name_order";//or die($info_erreur."<br />\n".mysql_error())
                    mysql_query ("UPDATE ".$prefix_doli."facturedet set description='$product_name_order',tva_tx='$tax_rate_product_order_detail',qty='$qty_article',subprice='$unit_price_tax_excl_product_order_detail',price='$unit_price_tax_excl_product_order_detail',total_ht='$total_article_ht',total_tva='$total_tva_article',total_ttc='$total_ttc_article' where fk_facture=$rowid_facture and fk_product=$product_id")
                        or die($info_erreur."<br />\n".mysql_error());  
                    }
            // FIN AJOUT DU PRODUIT SUR LA FACTURE **************************************
                
                }
            }
        mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
        mysql_select_db("$base_presta"); 
        mysql_query("SET NAMES UTF8");
        $total_article =$total_article+1;
        $rang=$rang+1;
        }
        // FIN INSERTION DU DETAIL DE LA COMMANDE ******************************************************************

    // AJOUT DE LA LIGNE DE PORT ****************************************************************************************    
    $rang=$rang+1;
    mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
    mysql_select_db("$base_doli");
    mysql_query("SET NAMES UTF8"); 
    if ($rowid_client!="")
        {
        $rowid=$code_article_port;      
        $sql_recup_verif_art_propal="select * from ".$prefix_doli."propaldet where fk_propal=$rowid_propal and fk_product=$rowid";
        $result_verif_art_propal= mysql_query($sql_recup_verif_art_propal) or die($sql_recup_verif_art_propal."<br />\n".mysql_error());
        $donnees_verif_art_propal = mysql_fetch_array($result_verif_art_propal);
        $verif_art_propal=$donnees_verif_art_propal['fk_product'];
        if ($verif_art_propal==$rowid)
            {
            $info_erreur="Erreur de synchro sur : UPDATE DE LA LIGNE DE PORT - ID PROPAL : $rowid_propal - ID DU PORT : $rowid - LIBELLE DU PORT : $libelle_port";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("UPDATE ".$prefix_doli."propaldet set description='$libelle_port',tva_tx='$carrier_tax_rate',qty='1',price=$total_shipping_HT,subprice=$total_shipping_HT,total_ht=$total_shipping_HT,total_tva=$total_shipping_TVA,total_ttc=$total_shipping_TTC where fk_propal=$rowid_propal and fk_product=$rowid")
                or die($info_erreur."<br />\n".mysql_error()); 
            }
        else
            {
            $info_erreur="Erreur de synchro sur : INSERT DE LA LIGNE DE PORT - ID PROPAL : $rowid_propal - ID DU PORT : $rowid - LIBELLE DU PORT : $libelle_port";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."propaldet (fk_propal,fk_product,description,tva_tx,qty,price,subprice,total_ht,total_tva,total_ttc,product_type,rang) 
                values ($rowid_propal,$rowid,'$libelle_port','$carrier_tax_rate','1','$total_shipping_HT','$total_shipping_HT','$total_shipping_HT','$total_shipping_TVA','$total_shipping_TTC',0,'$rang')")
                    or die($info_erreur."<br />\n".mysql_error()); 
            }
        $rowid=$code_article_port;      
        $sql_recup_verif_art_commande="select * from ".$prefix_doli."commandedet where fk_commande=$rowid_commande and fk_product=$rowid";
        $result_verif_art_commande= mysql_query($sql_recup_verif_art_commande) or die($sql_recup_verif_art_commande."<br />\n".mysql_error());
        $donnees_verif_art_commande = mysql_fetch_array($result_verif_art_commande);
        $verif_art_commande=$donnees_verif_art_commande['fk_product'];      
        if ($verif_art_commande==$rowid)
            {
            $info_erreur="Erreur de synchro sur : UPDATE DE LA LIGNE DE PORT - ID COMMANDE : $rowid_commande - ID DU PORT : $rowid - LIBELLE DU PORT : $libelle_port";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("UPDATE ".$prefix_doli."commandedet set description='$libelle_port',tva_tx='$carrier_tax_rate',qty='1',price='$total_shipping_HT',subprice='$total_shipping_HT',total_ht='$total_shipping_HT',total_tva='$total_shipping_TVA',total_ttc='$total_shipping_TTC' where fk_commande=$rowid_commande and fk_product=$rowid")
                or die($info_erreur."<br />\n".mysql_error()); 
            }
        else
            {
            $info_erreur="Erreur de synchro sur : INSERT DE LA LIGNE DE PORT - ID COMMANDE : $rowid_commande - ID DU PORT : $rowid - LIBELLE DU PORT : $libelle_port";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query ("INSERT INTO ".$prefix_doli."commandedet (	fk_commande,fk_product,description,tva_tx,qty,subprice,total_ht,total_tva,total_ttc,product_type,rang) 
                values ($rowid_commande,$rowid,'$libelle_port','$carrier_tax_rate','1','$total_shipping_HT','$total_shipping_HT','$total_shipping_TVA','$total_shipping_TTC',0,'$rang')")
                    or die($info_erreur."<br />\n".mysql_error()); 
            }
        if ($creer_facture=="oui")
            {
            $rowid=$code_article_port;      
            $sql_recup_verif_art_facture="select * from ".$prefix_doli."facturedet where fk_facture=$rowid_facture and fk_product=$rowid";
            $result_verif_art_facture= mysql_query($sql_recup_verif_art_facture) or die($sql_recup_verif_art_facture."<br />\n".mysql_error());
            $donnees_verif_art_facture = mysql_fetch_array($result_verif_art_facture);
            $verif_art_facture=$donnees_verif_art_facture['fk_product'];      
            if ($verif_art_facture==$rowid)
                {
                $info_erreur="Erreur de synchro sur : UPDATE DE LA LIGNE DE PORT - ID FACTURE : $rowid_facture - ID DU PORT : $rowid - LIBELLE DU PORT : $libelle_port";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("UPDATE ".$prefix_doli."facturedet set description='$libelle_port',tva_tx='$carrier_tax_rate',qty='1',subprice='$total_shipping_HT',price='$total_shipping_HT',total_ht='$total_shipping_HT',total_tva='$total_shipping_TVA',total_ttc='$total_shipping_TTC' where fk_product=$rowid and fk_facture=$rowid_facture")
                    or die($info_erreur."<br />\n".mysql_error());
                }
            else
                {
                $info_erreur="Erreur de synchro sur : INSERT DE LA LIGNE DE PORT - ID FACTURE : $rowid_facture - ID DU PORT : $rowid - LIBELLE DU PORT : $libelle_port";//or die($info_erreur."<br />\n".mysql_error())
                mysql_query ("INSERT INTO ".$prefix_doli."facturedet (fk_facture,fk_product,description,tva_tx,qty,subprice,price,total_ht,total_tva,total_ttc,product_type,rang) 
                    values ($rowid_facture,$rowid,'$libelle_port','$carrier_tax_rate','1','$total_shipping_HT','$total_shipping_HT','$total_shipping_HT','$total_shipping_TVA','$total_shipping_TTC',0,'$rang')")
                        or die($info_erreur."<br />\n".mysql_error());
                }
            }
        }
    // FIN AJOUT DE LA LIGNE DE PORT ****************************************************************************************

    $rang=0;
    mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
    mysql_select_db("$base_presta");
    mysql_query("SET NAMES UTF8");
    }
$nb_id_commandes_a_traiter= $id_max_commandes-$nb_commandes+1;

// DEFINITION DE L'AFFICHAGE *************************************************************
mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
mysql_select_db("$base_presta");
mysql_query("SET NAMES UTF8");
$echo ='';
$echo =''.$echo.'Le '.$date_synchro.' a '.$heure_synchro.'\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'[ SYNCHRONISATION REUSSIE ]\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'---------------------------------------------------\n';
$echo =''.$echo.'Nombre ID Commandes Clients a traiter : '.$nb_id_commandes_a_traiter.'\n';
$echo =''.$echo.'Total des Commandes Clients traitees : '.$total_commandes_traitees.'\n';
$echo =''.$echo.'---------------------------------------------------\n';
$echo =''.$echo.'Total produits trait�s : '.$total_article.'\n';
$echo =''.$echo.'(Hors article de port)\n';
$echo =''.$echo.'---------------------------------------------------\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'^^^^^^^^^^^^^^^^^^^^\n';
$echo =''.$echo.'Info Configuration :\n';
$echo =''.$echo.'PrestaShop : '.$version_presta.' / Dolibarr : '.$version_dolibarr.' \n';
$echo =''.$echo.'^^^^^^^^^^^^^^^^^^^^\n';
$echo =''.$echo.'\n';
// FIN DEFINITION DE L'AFFICHAGE *************************************************************

//**************************************  FIN   CRON   *******************************************************

// AFFICHAGE ****************************************************
echo "<script language='JavaScript'>alert('$echo')</script>";   
echo '<SCRIPT>javascript:window.close()</SCRIPT>';
// FIN AFFICHAGE ****************************************************

?>