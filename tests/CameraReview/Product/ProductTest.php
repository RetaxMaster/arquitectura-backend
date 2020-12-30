<?php

use PHPUnit\Framework\TestCase;
use App\CameraReview\Product\Product;
use App\CameraReview\Product\Camera\Camera;
use App\CameraReview\Review\Review;

final class ProductTest extends TestCase {

    public function test_product_should_return_content_success(): void {

        // setup
        $product = new Product();
        $product->setName("Producto1");
        $product->setSKU("1234");
        $product->setManufacturer("empresa");

        // exec
        $content = $product->getContent();

        // assert
        $this->assertTrue(!empty($content), "Should return content but obtained null or whitespace.");

    }

    public function test_camera_should_return_content_that_include_its_features_success() {

        // setup
        $type = "FullFrame";
        $cameraProduct = new Camera();
        $cameraProduct->setName("Canon 60D");
        $cameraProduct->setType("FullFrame");
        $cameraProduct->setCropFactor(1);

        // exec
        $content = $cameraProduct->getContent();

        // assert
        $this->assertTrue(in_array($type, $content), "Should be FullFrame content.");

    }

    public function test_review_content_match_with_product() {

        // setup
        $cameraProduct = new Camera();
        $cameraProduct->setName("Canon 60D");
        $cameraProduct->setType("FullFrame");
        $cameraProduct->setCropFactor(1);

        $review = new Review();
        $review->setTitle("Titulo del review");
        $review->setAuthor("Un autor");
        $review->setProduct($cameraProduct);

        // exec
        $content = $review->getContent();

        // assert
        $this->assertTrue(in_array($cameraProduct, $content["products"]), "Should match content with the product.");

    }

}