<?php
function getProductsUnderPrice($products, $maxPrice) {
    return array_filter($products, function($product) use ($maxPrice) {
        return $product["price"] <= $maxPrice;
    });
}

function formatPrice($price) {
    return "Rs. " . $price;
}
?>