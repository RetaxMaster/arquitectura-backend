<?php

namespace App\CameraReview\Product;

interface IProduct {

    public function getName() : string;
    public function setName(string $name) : void;

    public function getManufacturer() : string;
    public function setManufacturer(string $manufacturer) : void;

    public function getSKU() : string;
    public function setSKU(string $sku) : void;

    public function getFeatures() : array;
    public function setFeature(Feature $feature) : void;

    public function getContent() : string;

}

?>