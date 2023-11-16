<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

// disimulasikan ini adalah class controller product
class ProductController extends Controller
{
    // gunakan trait yang sudah dibuat
    use ResponseFormatter;

    // magic method, method ini akan diakses pada saat pembuatan object.
    public function __construct()
    {
        // set atribut controllername pada parent class controller
        $this->controllerName = "Get All Product";
        // set atribut controller
        $this->controllerMethod = "GET";
    }

    // disimulasikan ini method untuk get data product
    public function getAllProduct()
    {
        // array dummy data
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribut" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];

        // menggunakan method dari trait

        return $this->responseFormatter(200, "Success", $response);
    }
}
