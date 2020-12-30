<?php

namespace App\Review;

use App\IProduct;

interface IReview {

    public function getTitle() : string;
    public function setTitle() : void;

    public function getContent() : string;
    public function setContent() : void;

    public function getAuthor() : string;
    public function setAuthor() : void;

    public function getProduct() : IProduct;
    public function setProduct() : void;

}

?>