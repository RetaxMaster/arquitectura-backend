<?php

namespace App;

interface IProduct {

    public function getName() : string;
    public function setName() : void;

    public function getManufacturer() : string;
    public function setManufacturer() : void;

    public function getSKU() : string;
    public function setSKU() : void;

    public function getFeatures() : array;
    public function setFeatures() : void;

    public function getContent() : string;

}

?>