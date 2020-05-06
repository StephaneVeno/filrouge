<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Categories extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author Grillet Stéphane
   * \date 05/05/2020
   */
  public function cat_list()
  {
    $resultlist = $this->Categorie->select_cat();
    $data["select_cat"] = $resultlist;

    $this->templates->display('cat_list', $data);
  }
  /**
   * \brief 
   * \return  
   * \author Grillet Stéphane
   * \date 05/05/2020
   */
  public function catAjouts()
  {
    $res_cat = $this->Categorie->select_cat();
    $data["select_cat"] = $res_cat;

    $resultajout = $this->input->post();
    $this->form_validation->set_rules('cat_cat', 'cat_cat', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('libelle', 'libelle', 'required', array('required' => 'Veuillez renseigner ce champ.'));

    if ($this->form_validation->run() == false) {
      $this->templates->display('catAjouts', $data);
    } else {
      $ajout = array(
        'CAT_CAT_ID' => $resultajout['cat_cat'],
        'CAT_LIBELLE' => $resultajout['libelle'],
        'PER_ID' => $resultajout['cat_cat'],
        'CAT_D_AJOUT' => date('Y-m-d')
      );
      $this->Categorie->catAjouts($ajout);
      redirect('produits/liste');
    }
  }
  /**
   * \brief 
   * \return  
   * \author Grillet Stéphane
   * \date 05/05/2020
   */
  public function catModif($id)
  {
    $res_cat = $this->Categorie->select_cat();
    $data["select_cat"] = $res_cat;

    $res_modif = $this->Categorie->detail($id);
    $data2["detail"] = $res_modif;

    if ($this->input->post()) {
      $resultmodif = $this->input->post();
      $this->form_validation->set_rules('libelle', 'libelle', 'required', array('required' => 'Veuillez renseigner ce champ.'));
      $this->form_validation->set_rules('cat_cat', 'cat_cat', 'required', array('required' => 'Veuillez renseigner ce champ.'));

      if ($this->form_validation->run() == false) {
        $this->templates->display('catModif', $data, $data2);
      } else {
        $modif = array(
          'CAT_CAT_ID' => $resultmodif['cat_cat'],
          'CAT_LIBELLE' => $resultmodif['libelle'],
          'PER_ID' => $resultmodif['cat_cat'],
          'CAT_D_MODIF' => date('Y-m-d H-i-s')
        );
        $this->Categorie->catModif($id, $modif);
        redirect('categories/cat_list');
      }
    }
  }
  public function catSuppr($id)
  {
    $row = $this->Categorie->detail($id);
    $this->Categorie->catSuppr($id);
    redirect('categorie/cat_list');
  }
}