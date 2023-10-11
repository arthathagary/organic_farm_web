<?php
include "../include/connect.php"; // Make sure to include your database connection

if (isset($_GET['delete_product'])) {
    $product_id = $_GET['delete_product'];

    // Perform the deletion query
    $delete_query = "DELETE FROM products WHERE product_id = $product_id";
    $delete_result = mysqli_query($con, $delete_query);

    if ($delete_result) {
        // Deletion successful
        echo "<script>alert('Product Deleted Successfully');</script>";
        // Redirect back to the product listing page or wherever you want
        header("Location: index.php?add_product"); // Replace 'index.php' with the appropriate URL
        exit();
    } else {
        // Deletion failed
        echo "<script>alert('Product Deletion Failed');</script>";
    }
}
?>


