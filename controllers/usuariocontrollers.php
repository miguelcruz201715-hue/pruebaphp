<?php

//Aca mostramos todas acciones que puede hacer un controlador//
class usuarioControllers{

    public function mostrarTodos(){

   require_once 'models/UsuarioModels.php';

    $usuario = new usuario();

    $todos_los_usuarios = $usuario ->conseguirTodos();

    require_once 'views/usuario/mostrar-todos.php';
}
}