<?php

namespace App\CameraReview\Review;

use App\CameraReview\Product\Product;

interface IReview {

    public function getTitle() : string;
    public function setTitle(string $title) : void;

    public function getContent() : array;

    public function getAuthor() : string;
    public function setAuthor(string $author) : void;

    public function getProduct() : Product;
    public function setProduct(Product $product) : void;

}

?>