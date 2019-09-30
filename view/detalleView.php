<?php
class detalleView {

  function __construct(){

  }
  function detalleCategorias($detalle){
$html = '<!DOCTYPE html>
        <html>
        <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta charset="UTF-8">
          <title> Minimalismo </title>
          <link rel="stylesheet" href="css/main.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link rel="stylesheet" href="estilos/css/bootstrap-grid.css">
          <link rel="stylesheet" href="estilos/css/bootstrap-grid.min.css">
          <link rel="stylesheet" href="estilos/css/bootstrap-reboot.css">
          <link rel="stylesheet" href="estilos/css/bootstrap-reboot.min.css">
          <link rel="stylesheet" href="estilos/css/bootstrap.css">
          <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
      </head>

      <body>
      <nav class="navbar navbar-expand-lg fixed-top ">
          <a class="navbar-brand" href="inicio" id="marcaMinimalismo"> MINIMALISMO </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
              id="navResponsive">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav mr-4">';
              #DISCLAIMER para Nati: Mas adelante vamos a cambiar el href.

           $html.=' <li class="nav-item">
                      <a class="nav-link" data-value="about" href="revistas"> Administrador </a> </li>
                  <li class="nav-item">
                      <a class="nav-link" data-value="about" href="viajes"> Viajes </a> </li>
                  <li class="nav-item">
                      <a class="nav-link " data-value="contact" href="testimonios"> Testimonios </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " data-value="blog" href="informacion">Revistas </a> </li>
                  <li class="nav-item">
                      <a class="nav-link " data-value="contact" href="contacto"> Contacto </a> </li>
              </ul>
          </div>
      </nav>
          <div id="textoinicio">
          <h2> Detalle individual por Revista. </h2>
          <table>';
          $html.="<h2>".$revista->titulo ."</h2>"."<p>".$revista->descripcion."</p>";
          $html.= '</table>
          </div>';

          $html .='<footer class="page-footer font-small cyan darken-3">
              <div class="footer-copyright text-center py-3">© 2019 Copyright:
              <a href="inicio.html"> Minimalismo.com</a>
              </div>
        </footer>
        <script type="text/javascript" src="js/cargarTabla.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
    </html>';
$html .= '</div>
            </body>
          </html>';
          echo $html;



}

}
?>
