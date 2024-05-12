<?php
include '/xampp/htdocs/Recyclemart/Database/conn.php';
$conn = connection();

if(isset($_POST["query"])){
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "SELECT * FROM product_info WHERE product_name LIKE '%".$search."%'";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        echo "<link rel=\"stylesheet\" href=\"/recyclemart/Pages/shopPage/shopPage.css\">";
        echo "<div class=\"product-container\">";

        while($row = $result->fetch_assoc()) {
            echo "<div class=\"product-items\" id=\"product-items\">";
            echo "<img src='" . $row["image_path"] . "' alt='Product Image'><br>";
            echo "<div class=\"product-name\">".  $row["product_name"] . "</div>";
            echo "<p class=\"product-price\">₱" . $row["price"] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    }
}
?>
