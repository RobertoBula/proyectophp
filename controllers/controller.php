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

        $enlacesC = $_GET["action"];

        $response = EnlacesPaginas::enlacesPaginasModel($enlacesC);

        include $response;
    }
}
