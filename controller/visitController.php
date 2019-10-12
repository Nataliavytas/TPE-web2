<?php
require_once "./view/revistasView.php";
require_once "./view/detalleView.php";
require_once "./view/inicioView.php";
require_once "./view/header.php";
require_once "./model/revistasModel.php";
require_once "./model/categoriasModel.php";




class visitController{

  private $revistasView;
  private $detalleView;
  private $inicioView;
  private $header;

  private $revistasModel;
  private $categoriasModel;

  private $filtro;
  private $arrFiltro;

  function __construct(){
    $this->inicioView = new inicioView();
    $this->revistasView = new revistasView();
    $this->header  = new header();

    $this->categoriasModel = new categoriasModel();
    $this->revistasModel = new revistasModel();
  }

//si selecciona algun filtro, trae una tabla de eso. Si no, trae todas las revistas.

  /*function getRevistas(){
    if(isset($_GET['SeleccionCat'])){
    $this->filtro = $_GET['SeleccionCat'];
    $this->arrFiltro = $this->revistasModel->filtroFecha($this->filtro);
    $revistas = $this->revistasModel->getRevistas();
    $categorias = $this->categoriasModel->getCategorias();
    $this->revistasView->showRevistas($revistas,$arrFiltro,$categorias);
  }else{
      $revistas = $this->revistasModel->getRevistas();
      $categorias = $this->categoriasModel->getCategorias();
      $this->revistasView->showRevistas($this->arrFiltro, $revistas,$categorias);
    }
  }*/
  function getRevistas(){
    $revistas = $this->revistasModel->getRevistas();
    $categorias = $this->categoriasModel->getCategorias();
    $this->revistasView->showRevistas($revistas,$categorias);
  }

  function Home(){
    $this->inicioView->Home();

  }


  //function detalleCategorias(){
  //  $detalle = $this->model->filtroCategoria($id);
  //  $this->detalle->detalleCategorias($detalle);
  //}

  function filtrarCategoria(){
    $id= $_GET['SeleccionCat'];
    $filtroCat = $this->categoriasModel->filtroPorCategoria($id);
    $this->header->filtroPorCategoria($filtroCat);
  }

  //Este es el controller de todo lo que no tiene que ver con el admin
  //Desde aca controlamos el dropdown de categorias y los detalles de cada revista
  //tambien los filtros de la tabla y blabla
}
 ?>
