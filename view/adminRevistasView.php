<?php
require_once('./libs/Smarty.class.php');
class adminRevistasView {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function showRevistas($revistas){

    $this->smarty->assign('revistas',$revistas);
    $this->smarty->display('templates/administradorRevistas.tpl');
    } 


    
    /* function showRevistas($revistas){
        $html = '<!DOCTYPE html>
                <html>
                <head>
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <meta charset="UTF-8">
                  <title> Minimalismo </title>
                  <link rel="stylesheet" href="./css/main.css">
                  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                  <link rel="stylesheet" href="estilos/css/bootstrap-grid.css">
                  <link rel="stylesheet" href="estilos/css/bootstrap-grid.min.css">
                  <link rel="stylesheet" href="estilos/css/bootstrap-reboot.css">
                  <link rel="stylesheet" href="estilos/css/bootstrap-reboot.min.css">
                  <link rel="stylesheet" href="estilos/css/bootstrap.css">
                  <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
                  <link rel="icon" href="../images/aguacate.png?v1" type="image/x-icon" />
                  <link rel="shortcut icon" href="../images/aguacate.png?v1" type="image/x-icon" />
              </head>
              <body>';
              
        $html .= '<nav class="navbar navbar-expand-lg fixed-top ">
                  <a class="navbar-brand" href="inicio" id="marcaMinimalismo"> MINIMALISMO </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                      id="navResponsive">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                      <ul class="navbar-nav mr-4">
                          <li class="nav-item">
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
                  <h2> Revistas publicadas </h2>
                  </div>
                  <form id="formview" action="insertar" method="post">
                      <div class="form-group">
                          <label> Titulo de Revista a publicar: </label>
                          <input type="text" class="form-control" id="nombreTabla" aria-describedby="emailHelp" placeholder="Titulo">
                      </div>
                      <div class="form-group">
                          <label> Descripción de la Revista: </label>
                          <input type="text" class="form-control" id="autorTabla" placeholder="Descripcion">
                      </div>
                      <div class="form-group">
                          <label> Fecha de publicación: </label>
                          <input type="text" class="form-control" id="tipoTabla" placeholder="Mes de publicación">
                      </div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary">Insertar</button>
                      </div>
                      <div class="form-group">
                          <label for="inputState">Filtrar por:</label>
                          <select onchange=mostrarTabla() id="tipoFiltro" class="form-control"> <!-- el onchange esta mal, se agrega un addeventlistener en el javascript-->
                            <option> Todas </option>
                            <option>';
                            #Filtro por fecha de publicacion!
                            #Traemos por mysql la columna fecha y la colocamos en los tag de option.
                            #Problemas con que trae TODOS los meses repetidos.
                            foreach($revistas as $revista) {
                            $html.= "<option>" . $revista->fecha . "</option>";
                            }
                              $html .= '</option>
                          </select>
                      </div>
                  </form>';
                  #Tabla inferior donde van a estar hubicadas las revistas.
                  #La tabla es la misma que en "Informacion.php" dentro de $html. junto a tag de foreach (no es un tag lo se)
                  #quien trae info de mysql.
                          $html.= '<div id="formatoTabla">
                          <table class="table table-bordered">
                          <thead>
                          <tr>
                          <th scope="col"> Titulo </th>
                          <th scope="col"> Descripción </th>
                          <th>Borrar</th>
                          </tr>
                          </thead>
                          <tbody id="cuerpoTabla">';
                          #El titulo tiene que tiene que con el tag <a>  id_revista
                          #Cambiar la base de datos por categorias.
                          #Cambiar el Admin.
                          #Cambiar el nav.
                            foreach($revistas as $revista) {
                           $html.="<tr><td>".$revista->titulo ."</td><td>".$revista->descripcion."</td><td><a href='borrar/".$revista->id_revista."'>Borrar</a></td>";
        }
                          $html.='</tbody>
                          </table>
                          </div>';
        $html .= '</div>
                    </body>
                  </html>';
        #footer
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
          echo $html;
        }*/
}

?>
