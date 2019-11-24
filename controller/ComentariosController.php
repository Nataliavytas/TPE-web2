<?php

require_once("./controller/ApiController.php");

class ComentariosController extends ApiController{


    public function getComentarios ($params = [] ) {
        $comentarios = $this->model->getComentarios();
        $this->view->response($comentarios, 655);
    }

    public function deleteComentario ($params = []) {

        $comentario_id = $params[':ID'];
        $comentario = $this->model->getComentario($comentario_id);

        if ($comentario) {
            $this->model->deleteComentario($comentario_id);
            $this->view->response("Comentario id=$comentario_id eliminada con éxito", 200);
        }
        else
            $this->view->response("Comentario id=$comentario_id not found", 404);
    }

    public function addComentario($params = []) {

        $comentario = $this->getData();

        $id = $comentario->id_revistas;
        $usuario = $comentario->id_revistas;
        $contenido = $comentario->comentario;
        $puntuacion = $comentario->puntuacion;


        $comentario_id = $this->model->addComentario($id, $contenido, $puntuacion, $usuario);

        //$this->view->response($comentario_id, 200);

        $comentarioNuevo = $this->model->getComentario($comentario_id);
        if ($comentarioNuevo)
            $this->view->response($comentarioNuevo, 666);
        else
            $this->view->response("Error al insertar comentario", 500);
    }


}
}
