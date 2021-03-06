<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Administration extends CI_Model
{  
    /**
     * \brief Selection de toute la vue infos_contact_client
     * \return Selection complète de la table
     * \autor Grillet Stéphane
     * \date 25/05/2020
     */
    public function session_client()
    {

        $query = $this->db->query("SELECT * FROM clients");
        return $query->row();
    }
    /**
     * \brief Selection de toute la table personnels
     * \return Selection complète de la table
     * \autor Grillet Stéphane
     * \date 26/05/2020
     */
    public function session_admin()
    {

        $query = $this->db->query("SELECT `PER_ID`, `PER_EMAIL`, `PER_MDP`, `PER_ROLE` FROM personnels");
        return $query->row();
    }


}
