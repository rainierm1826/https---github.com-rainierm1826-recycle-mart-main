<?php

include '/xampp/htdocs/Recyclemart/Database/conn.php';

$conn = connection();

// fetching products

$sql = "SELECT product_name, price, image_path FROM product_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<img src='" . $row["image_path"] . "' alt='Product Image'>". "<br>";
        echo $row["image_path"];
        echo $row["product_name"];
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No products found";
}

?>