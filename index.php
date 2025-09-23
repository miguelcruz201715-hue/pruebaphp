<h1> Bienvenido a mi mundo </h1>

<?php

require_once 'controllers/UsuarioControllers.php';  

$controller = new usuarioControllers();

$controller->mostrarTodos();

