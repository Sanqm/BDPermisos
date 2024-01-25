<?php


declare (Strict_types=1);
namespace Com\Daw2\Models;

class AuxUsuarioModel extends \Com\Daw2\Core\BaseModel {
    
    function getAllLanguages(): array{
        return $this->pdo->query("SELECT  nombre_idioma  FROM aux_idiomas")->fetchAll();
    }
    
    function getAllRols(){
        return $this->pdo->query("select nombre_rol from aux_rol ar")->fetchAll();
    }
}