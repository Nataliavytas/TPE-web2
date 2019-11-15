<?php
require_once "./view/revistasView.php";
require_once  "./view/detalleView.php";
require_once  "./model/revistasModel.php";
require_once "./model/categoriasModel.php";
require_once "./view/inicioView.php";
require_once "./view/header.php";
require_once "./view/revistasPorCategoria.php";
require_once "./view/comentariosView.php";


class visitController{

  private $categoriasModel;
  private $revistasModel;
  private $revistasView;
  private $detalleView;
  private $inicioView;
  private $header;
  private $revPorCategoriaView;
  private $detalle;
  private $comentariosView;

  function __construct(){

    $this->inicioView = new inicioView();
    $this->revistasModel = new revistasModel();
    $this->revistasView = new revistasView();
    $this->header  = new header();
    $this->categoriasModel = new categoriasModel();
    $this->detalleView = new detalleView();
    $this->revPorCategoriaView = new revistasPorCategoria();
    $this->comentariosView = new comentariosView();

  }


  function getRevistas(){
    $categorias = $this->categoriasModel->getCategorias();
    $revistas = $this->revistasModel->getRevistas();
    $this->revistasView->showRevistas($revistas,$categorias);
  }

  function getCategorias(){
    $categorias = $this->categoriasModel->getCategorias();
    $this->header->showCategorias($categorias);
  }

  function Home(){
    $categorias = $this->categoriasModel->getCategorias();
    $this->inicioView->Home($categorias);
  }

  function mostrarDetalle($id){
      $detalle = $this->revistasModel->getDetalle($id);
    //  var_dump($detalle);
      $this->detalleView->showDetalle($detalle);
  }

  function getRevistasPorCategoria($id){
      $categorias = $this->categoriasModel->getCategorias();
      $revistas = $this->revistasModel->filtroPorCategoria($id);
      //var_dump($revistas);
      $this->revPorCategoriaView->showRevistasCategoria($revistas, $categorias);
  }
  function comentarios($id){
    $revistas = $this->revistasModel->revistas();
    var_dump($revistas);
    $comentarios = $this->revistasModel->getComentarios($id);
    var_dump($comentarios);
    $this->comentariosView->showComentario($revistas, $comentarios);


  }
}
