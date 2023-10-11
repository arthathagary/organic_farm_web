<?php
    include "../include/connect.php";
    
?>


<div class="table-section container pt-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Question ID</th>
                <th>Question Title</th>
                <th>Question Content</th>
                <th>Answer</th>
                <th>Put Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "SELECT * FROM questions";
                $result = mysqli_query($con,$select_query);
                while($row = mysqli_fetch_assoc($result)){
                    $quiz_id = $row['question_id'];
                    $quiz_title = $row['question_title'];
                    $quiz_content = $row['question_content'];
                    $quiz_answer = $row['answer'];
            ?>
            <tr>
                <td><?php echo $quiz_id; ?></td>
                <td><?php echo $quiz_title; ?></td>
                <td><?php echo $quiz_content; ?></td>
                <td><?php echo $quiz_answer; ?></td>
                <td><a href="answer.php?answer=<?php echo $quiz_id; ?>" class="btn btn-danger">Answer</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>






