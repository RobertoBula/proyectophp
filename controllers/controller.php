<?php
# llamada plantilla

class Controller
{
    public function plantilla()
    {

        include "views/plantilla.php";
    }


    #interaccion usuario

    public function enlacesPaginasController()
    {

        if (isset($_GET["action"])) {

            $enlacesC = $_GET["action"];
        } else {
            $enlacesC = "index";
        }

        $response = EnlacesPaginas::enlacesPaginasModel($enlacesC);

        include $response;
    }
}
