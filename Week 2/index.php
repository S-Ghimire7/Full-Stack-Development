<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 - Advanced PHP</title>
</head>
<body>



    <h1>Week 2 - Advanced PHP</h1>
    <p>Full Stack Web Development - Week 2 Tutorial</p>
    <?php

    require_once "functions.php";

echo"<h1>First Question</h1>";

        $categories = ["Laptops", "Phones", "Accessories", "Audio"];

        foreach ($categories as $item) {
    echo $item,"<br>";
}

echo"<h1>Second Question</h1>";

$product = [
    "name" => "Wireless Mouse",
    "price" => 850,
    "stock" => 12
];

echo " ",$product["name"],"<br>",$product["price"],"<br>",$product["stock"],"<br>";

echo"<h1>Third Question</h1>";

    $products = [
    ["id" => 101, "name" => "Wireless Mouse", "category" => "Accessories", "price" => 850, "stock" => 12],
    ["id" => 102, "name" => "USB-C Cable", "category" => "Accessories", "price" => 350, "stock" => 25],
    ["id" => 103, "name" => "USB-A Cable", "category" => "Accessories", "price" => 200, "stock" => 20],
    ["id" => 104, "name" => "Wireless Keyboard", "category" => "Accessories", "price" => 5000, "stock" => 8]
];
    
foreach ($products as $product){
    echo " ".$product["id"]." ".$product["name"]." ".$product["category"]." ".$product["price"]." ".$product["stock"]."<br>";
}

echo"<h1>Fourth Question</h1>";
$filtered=array_filter($products,function($pr){
    return $pr["price"]>500;
});

echo"Price Greater than 500: <br>";
foreach($filtered as $fivehund){

echo $fivehund["id"]." ".$fivehund["name"]." ".$fivehund["price"]."<br>";
}

echo"<h1>Fifth Question</h1>";
$filtered1=array_filter($products,function($product){
    return $product["stock"]<10;
});

echo" Stock less than 10:<br>";

foreach($filtered1 as $stlt){
echo $stlt["id"]." ".$stlt["name"]." ".$stlt["price"]."<br>";
}

echo"<h1>Sixth Question</h1>";

$new= array_map(function($prod){
 return $prod["name"];
},$products);

echo"Mapped Array:";
foreach ($new as $nameonly){
    echo "<br>".$nameonly;
}

echo"<h1>Seventh Question</h1>";
$np = array_map(function($namepr){
$final = $namepr["name"]."-".$namepr["price"];
return $final;
},$products);

echo"Name and Products:<br>";
foreach($np as $nameprice){
    echo "".$nameprice."<br>";
}

echo"<h1>Eighth Question</h1>";

$pxs = array_reduce($products,function($carry,$product){
return $carry*$product["stock"];
},1);

echo"Total stock: ".$pxs;

echo"<h1>Ninth Question</h1>";
$count = array_reduce($products, function($carry, $product) {
    if ($product["stock"] > 0) {
        return $carry + 1;
    }
    return $carry;
}, 0);

echo "Available products: " . $count;

echo"<h1>Tenth Question</h1>";
$reversedProducts = array_reverse($products);

echo "Reversed Product Catalogue:<br>";

foreach ($reversedProducts as $product) {
    echo $product["id"] . " "
       . $product["name"] . " "
       . $product["price"] . "<br>";
}

echo"<h1>Eleventh Question</h1>";

foreach ($products as $product) {   
    echo $product["name"] . " - ";
    echo formatPrice($product["price"]) . "<br>";
}

echo"<h1>Twelveth Question</h1>";

$filteredProducts = getProductsUnderPrice($products, 1000);

foreach ($filteredProducts as $product) {
    echo $product["id"] . " ";
    echo $product["name"] . " ";
    echo formatPrice($product["price"]);
    echo "<br>";
}
    ?>
</body>
</html>
