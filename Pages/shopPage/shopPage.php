
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/recyclemart/Pages/shopPage/shopPage.css">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--lato font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <!--navbar for shop page-->
    <div class="nav">
        <div id="logo">
            <h1>Recyclemart</h1>
        </div>
        <form action="" class="form-control">
            <input type="text" name="search-bar" id="search-bar" class="search-bar" placeholder="search">
        </form>
        <ul>
            <li><a href="/recyclemart/backend/logout/logout.php">LOGOUT</a></li>
        </ul>
    </div>


<!--display data using php-->
<?php

include '/xampp/htdocs/Recyclemart/Database/conn.php';
$conn = connection();

display_products($conn);


function display_products($conn) {
    // Fetching products
    $sql = "SELECT product_id, product_name, price, description, quantity, image_path FROM product_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //css link for php
        echo "<link rel=\"stylesheet\" href=\"/recyclemart/Pages/shopPage/shopPage.css\">";
        
        
        echo "<div class=\"shop-container\">";
        echo "<div class=\"product-container\">";
        
        
        //loop the items
        while($row = $result->fetch_assoc()) {

            echo "<div class=\"product-items\" id=\"product-item-" . $row["product_id"] . "\">"; // Assigning product_id as part of the ID
            
            // image
            echo "<img src='" . $row["image_path"] . "' alt='Product Image'><br>";
            //product name
            echo "<div class=\"product-name\">".  $row["product_name"] . "</div>";
            //product price
            echo "<p class=\"product-price\">₱" . $row["price"] . "</p>";
            echo "</div>";


            // more info about products when clicked
            echo "<span id=\"modal-info-" .$row["product_id"] . "\" class=\"modal\">";
            echo "<div class=\"product-info-container\">";
            // assigning product id
            echo "<span class=\"close-modal-info\" data-product-id=\"" . $row["product_id"] . "\">&times;</span>";

            echo "<div class=\"product-details\">";
            // image
            echo "<div class=\"image-container\">";
            echo "<img src='" . $row["image_path"] . "' alt='Product Image'><br>";
            echo "</div>";
            
            //product name
            echo "<div id=\"modal-product-name\">". $row["product_name"] . "</div>";  
            //product price     
            echo "<div class=\"modal-product-price\">". $row["price"]. "</div><br>";    
            //product desc
            echo "<div class=\"modal-product-description\">". $row["description"] . "</div>";  
            // //product quantity   
            // echo "<div class=\"modal-product-quantity\">". $row["quantity"]."</div>";

            $product_id = $row["product_id"];
            echo "<div class=\"buy-now\"><button value=\"$product_id\" onclick=\"buy_now(this.value)\">BUY IT NOW</button></div>";

            echo "</div>";
            echo "</div>";
            echo "</span>";

        }

        echo "</div>";
        echo "</div>";

    } else {
        echo "No products found";
    }
}
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js\"></script>";
echo "<script src=\"/recyclemart/Pages/shopPage/shopPage.js\"></script>";

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="/recycle-mart-main/Components/navbar.js"></script>
<script src="/recyclemart/Pages/shopPage/shopPage.js"></script>
<script src="/recyclemart/Backend/search/search.js"></script>



<script>

</script>

</body>
</html>