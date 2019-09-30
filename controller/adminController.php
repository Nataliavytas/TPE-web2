<?php
require_once "./model/revistasModel.php";
require_once "./view/adminRevistasView.php";
require_once "./model/categoriasModel.php";
require_once "./view/adminCategoriasView.php";

class adminController{


  private $revistasView;
  private $revistasModel;
  private $categoriasView;
  private $categoriasModel;

  function __construct()
  {
    //asignacion a $view. No se coloca parametros proque el contructor no lleva parametros, si los llevase se colocan aca tambien.
    $this->revistasView = new adminRevistasView();
    //yo objeto, busca mi propiedad View
    $this->revistasModel = new revistasModel();
    //inicializacion de model
    $this->categoriasModel = new categoriasModel();
    $this->categoriasView = new adminCategoriasView();
  }

/*getRevistass
creamos un nombre, con el cual llamamos al modelo donde llama la BBDD.
luego, llamamos al view con una funcion junto al parametro.
*/
  function getRevistas(){
    $revistas = $this->revistasModel->getRevistas();
    $this->revistasView->showRevistas($revistas);
  }


  function getCategorias(){
    $categorias = $this->categoriasModel->getCategorias();
    $this->categoriasView->showCategorias();
  }
}


/* function borrarRevistas($id){
        $this->model->borrarRevistas($id),
        header("Location: " . BASE_URL);
    } 
  */



