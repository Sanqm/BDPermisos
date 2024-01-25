<?php

declare(strict_types=1);

namespace Com\Daw2\Controllers;

class UsuarioSistemaController extends \Com\Daw2\Core\BaseController {
       
  
    function mostrarTodos(){
        $data = [];
        $data['titulo'] = 'Todos los usuarios';
        $data['seccion'] = '/usuarios-sistema';
        
        $modelo = new \Com\Daw2\Models\UsuarioSistemaModel();
        $data['usuarios'] = $modelo->getAll();                
        
        $this->view->showViews(array('templates/header.view.php', 'usuario_sistema.view.php', 'templates/footer.view.php'), $data);
    }    
    
    function editar() {
      
        $data['titulo'] = 'Todos los usuarios';
        $data['seccion'] = '/usuarios-sistema';

       
        $modelo = new \Com\Daw2\Models\UsuarioSistemaModel();
        $data['usuarios'] = $modelo->getAll();
        $auxusuariomodel = new \Com\Daw2\Models\AuxUsuarioModel();
        $idiomas = $auxusuariomodel->getAllLanguages();
        $roles= $auxusuariomodel->getAllRols();
        
        
         $input = filter_var_array($_POST); // recogiendo el valor del todos los input de la vista  ?? es mas correcto que ponerlo en un input entero.
        
        ///pasando datos del model a la vista psando por el controller 
        $data = array(
            'idiomas' => $idiomas,
            'roles' =>$roles,
            'email' =>$modelo->getEmailFiltter($_POST),
           

        );

        $this->view->showViews(array('templates/header.view.php', 'formularioAlta.view.php', 'templates/footer.view.php'), $data);
        /// usuario_sistema.view.php
    }
}