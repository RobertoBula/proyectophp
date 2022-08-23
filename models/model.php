<?php

class EnlacesPaginas
{

    public static function enlacesPaginasModel($enlacesM)
    {
        if (
            $enlacesM == "registro" ||
            $enlacesM == "informacion" ||
            $enlacesM == "salir"
        ) {
            $module = "views/modules/" . $enlacesM . ".php";
        } else if ($enlacesM == "index") {
            $module = "views/modules/inicio.php";
        } else {
            $module = "views/modules/error404.php";
        }
        return $module;
    }
}
