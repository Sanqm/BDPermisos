<?php

declare(strict_types=1);

namespace Com\Daw2\Models;

class UsuarioSistemaModel extends \Com\Daw2\Core\BaseModel {

    private const SELECT_FROM = "SELECT us.*, ar.nombre_rol, ai.nombre_idioma FROM usuario_sistema us LEFT JOIN aux_rol ar ON ar.id_rol = us.id_rol LEFT JOIN aux_idiomas ai ON ai.id_idioma = us.id_idioma ORDER BY us.nombre";

    function getAll(): array {
        return $this->pdo->query(self::SELECT_FROM)->fetchAll();
    }

    function getEmailFiltter(array $filtros): string {

        if (isset($filtros['enviar'])) {
            var_dump($filtros);
        }



        if (isset($filtros['email']) && !empty($filtros['email'])) {

            if (filter_var($filtros['email'], FILTER_VALIDATE_EMAIL)) {
                return "";
            }
        }
        return "Mail introducido incorrecto";
    }

    function getValidatePas($filtros) {
        $pwd1 = $filtros['pwd1'];
       
        if (preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-])[A-Za-z\d!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]{8,}$/', $pwd1)) {
            echo "La contraseña cumple con los criterios.";
        } else {
            echo "La contraseña no cumple con los criterios.";
        }
    }

}
