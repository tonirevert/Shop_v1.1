<?php
    echo "<br>";echo "<br>";
    echo "<br>";echo "<br>";
    echo "<br>";echo "<br>";
    echo "<br>";echo "<br>";
    
    if (isset($_POST['SubmitProducts'])){
        $_SESSION=$_POST;
        
        $callback="index.php?module=products&view=results_products";
        redirect($callback);
    }
    include 'modules/products/view/create_products.php';