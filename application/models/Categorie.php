<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Categorie extends CI_Model
{

    /**
     * \brief Selection de toute la table par classement d'ID 
     * \return Selection complète de la table
     * \autor Grillet Stéphane
     * \date 05/05/2020
     */
    public function select_cat()
    {

        $select_cat = $this->db->query("SELECT * FROM categorie ORDER BY cat_id ASC");
        return $select_cat->result();
    }
    /**
     * \brief Selection du detail
     * \param id = id de la categorie
     * \return Selection d'une certaine catégorie par appel de son ID dans le formulaire
     * \autor Grillet Stéphane
     * \date 05/05/2020
     */
    public function detail($id)
    {

        $detail = $this->db->where("CAT_ID", $id)->get('categorie');
        return $detail->row();
    }
    /**
     * \brief Ajout dans la table, par l'insert, du formulaire
     * \return Création dans la table par un formulaire d'une nouvelle catégorie
     * \autor Grillet Stéphane
     * \date 06/05/2020
     */
    public function catAjouts($ajout)
    {

        $this->db->insert('categorie', $ajout);
    }
    /**
     * \brief Modification de la table, par l'update, du formulaire
     * \return Update de la table par un formulaire
     * \autor Grillet Stéphane
     * \date 06/05/2020
     */
    public function catModif($id, $modif)
    {

        $this->db->update('categorie', $modif, "CAT_ID=" . $id);
    }
    /**
     * \brief Suppression dans la table, par le delete, d'une catégorie
     * \param id = id de la catégorie
     * \return Delete d'une catégorie contenu dans la table
     * \autor Grillet Stéphane
     * \date 11/05/2020
     */
    public function catSuppr($id)
    {

        $this->db->delete('categorie', 'CAT_ID=' . $id);
    }

    //id peut être en décalage selon la bdd, la mienne commence par -aucune'
    public function GuitBass(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=2");
        return $cat->result();
    }
    public function Batteries(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=3");
        return $cat->result();
    }
    public function Piano(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=4");
        return $cat->result();    
    }
    public function Studio(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=5");
        return $cat->result();
    }
    public function Eclairage(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=6");
        return $cat->result();
    }
    public function Dj(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=7");
        return $cat->result();
    }
    public function cases(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=8");
        return $cat->result();
    }
    public function Accessoire(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=9");
        return $cat->result();
    }
    public function InstruAVent(){

        $cat=$this->db->query("SELECT `PRO_LIBELLE`,`PRO_REF`,`PRO_PRIX_ACHAT`,`PRO_STOCK_PHYSIQUE`,`PRO_DESCRIPTION`,`PRO_PHOTO`,`PRO_SLUG` FROM `produits` JOIN `categorie` ON `categorie`.`CAT_ID`=`produits`.`CAT_ID` WHERE `categorie`.`CAT_ID`=10");
        return $cat->result();
    }
}