<?php

namespace App\CameraReview\Product;
use App\CameraReview\Product\IProduct;

class Product implements IProduct {

    protected $name;
    protected $manufacturer;
    protected $SKU;
    protected $features;

    public function getName() : string {
        return $this->name;
    }

    public function setName(string $name) : void {
        $this->name = $name;
    }

    public function getManufacturer() : string {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer) : void {
        $this->manufacturer = $manufacturer;
    }

    public function getSKU() : string {
        return $this->SKU;
    }

    public function setSKU(string $sku) : void {
        $this->SKU = $sku;
    }

    public function getFeatures() : array {
        return $this->features;
    }

    public function setFeature(Feature $feature) : void {
        array_push($this->features, $feature);
    }

    public function getContent() : string {
        return "";
    }

}

?>