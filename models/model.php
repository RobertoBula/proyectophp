<?php

class EnlacesPaginas
{

    public static function enlacesPaginasModel($enlacesM)
    {
        // if (
        //     $enlacesM == "inicio" ||
        //     $enlacesM == "nosotros" ||
        //     $enlacesM == "servicios" ||
        //     $enlacesM == "contacto"
        // ) {
            $module = "views/modules/" . $enlacesM . ".php";
       // }

        return $module;
    }
}
