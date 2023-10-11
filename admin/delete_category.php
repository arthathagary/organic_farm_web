<?php
include "../include/connect.php";
// Check if the delete parameter is set in the URL
if(isset($_GET['delete'])) {
    // Get the category ID from the URL parameter
    $category_id = $_GET['delete'];

    // Delete the category from the database
    $delete_query = "DELETE FROM categories WHERE category_id = $category_id";
    $result_query = mysqli_query($con, $delete_query);
    
    // Check if the query was successful
    if($result_query) {
        echo "Category deleted successfully.";
        header("Location: index.php?add_category");
    } else {
        echo "Error deleting category: " . mysqli_error($con);
    }
    
}


?>