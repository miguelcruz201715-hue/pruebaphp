<h1>Bienvenidos a mi web</h1>

<?php

require_once 'controllers/usuarioControllers.php';

$controlador = new UsuarioControllers();

$controlador->mostrarTodos();


