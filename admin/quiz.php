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
            $answer = $row['answer'];
            echo "<table class='table table-bordered container my-6'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Question ID</th>";
            echo "<th>Question Title</th>";
            echo "<th>Question Content</th>";
            echo "<th>Answer</th>";
            echo "<th>Put Answer</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>{$question_id}</td>";
            echo "<td>{$question_title}</td>";
            echo "<td>{$question_content}</td>";
            echo "<td>{$answer}</td>";
            echo "<td><a href='answer.php?answer={$question_id}'>Answer</a></td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";

         

        }
    }


?>

<?php
   


?>

