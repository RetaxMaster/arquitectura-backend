<?php

namespace App\Product;

use App\IProduct;

interface ICamera extends IProduct {

    public function getmaxISO() : int;
    public function setmaxISO() : void;

    public function getType() : string;
    public function setType() : void;

    public function getCropFactor() : int;
    public function setCropFactor() : void;

}

?>