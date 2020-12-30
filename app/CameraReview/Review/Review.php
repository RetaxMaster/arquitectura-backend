<?php

namespace App\CameraReview\Review;

use App\CameraReview\Product\IProduct;
use App\CameraReview\Product\Product;

class Review implements IReview {

    protected $product;
    protected $content = array(
        "title" => "",
        "author" => "",
        "products" => []
    );

    public function getTitle() : string {
        return $this->content["title"];
    }

    public function setTitle(string $title) : void {
        $this->content["title"] = $title;
    }

    public function getAuthor() : string {
        return $this->content["author"];
    }

    public function setAuthor(string $author) : void {
        $this->content["author"] = $author;
    }

    public function getProduct() : Product {
        return $this->product;
    }

    public function setProduct(Product $product) : void {
        $this->product = $product;
        array_push($this->content["products"], $product);
    }

    public function getContent() : array {
        return $this->content;
    }

}

?>