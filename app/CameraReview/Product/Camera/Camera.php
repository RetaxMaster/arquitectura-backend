<?php

namespace App\CameraReview\Product\Camera;

use App\CameraReview\Product\Product;

class Camera extends Product implements ICamera {

    protected $maxISO;
    protected $type;
    protected $cropFactor;

    public function getmaxISO() : int {
        return $this->maxISO;
    }

    public function setmaxISO(int $maxISO) : void {
        $this->maxISO = $maxISO;
    }

    public function getType() : string {
        return $this->type;
    }

    public function setType(string $Type) : void {
        $this->type = $Type;
    }

    public function getCropFactor() : int {
        return $this->cropFactor;
    }

    public function setCropFactor(int $cropFactor) : void {
        $this->cropFactor = $cropFactor;
    }

    public function getContent() : array {
        return [
            "name" => $this->name,
            "type" => $this->type,
            "CropFactor" => $this->cropFactor
        ];
    }

}

?>