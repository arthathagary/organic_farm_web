<?php
    include "../include/connect.php";
    
?>


<?php
    include "../include/connect.php";
    if(isset($_GET['quiz'])){
        $select_query = "SELECT * FROM questions";
        $result_query = mysqli_query($con, $select_query);
        while($row = mysqli_fetch_assoc($result_query)){
            $question_id = $row['question_id'];
            $question_title = $row['question_title'];
            $question_content = $row['question_content'];
            echo "<table class='table table-bordered container my-6'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Question ID</th>";
            echo "<th>Question Title</th>";
            echo "<th>Question Content</th>";
            echo "<th>Delete</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>{$question_id}</td>";
            echo "<td>{$question_title}</td>";
            echo "<td>{$question_content}</td>";
            echo "<td><a href='index.php?delete={$question_id}'>Delete</a></td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";

         

        }
    }


?>

<?php
    if(isset($_GET['delete'])){
        $question_id = $_GET['delete'];
        $delete_query = "DELETE FROM questions WHERE question_id = $question_id";
        $result_query = mysqli_query($con, $delete_query);
        if($result_query){
            echo "<script>alert('Question Deleted Successfully')</script>";
            echo "<script>window.open('index.php?quiz', '_self')</script>";
        }
    }

?>

