<?php 

use PHPUnit\Framework\TestCase;
use \App\CameraReview\Product\Product;

final class ProductTest extends TestCase {

    public function test_product_should_return_content_success(): void {

        // setup
        $product = new Product();

        // exec
        $content = $product->getContent();

        // assert
        $this->assertTrue(!empty($content), "Should return content but obtained null or whitespace.");

    }

}