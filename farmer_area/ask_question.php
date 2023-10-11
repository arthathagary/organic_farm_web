<?php
    include "../include/connect.php";
?>

<div class="wrapper container">
	<div class="registration_form">
		<div class="title">
			Question Form
		</div>

		<form method="post" action="">
			<div class="form_wrap">
				
				<div class="input_wrap">
					<label for="quiz_title">Enter Question Subject</label>
					<input type="text" id="quiz_title" name="quiz_title" required>
				</div>
				
				<div class="input_wrap">
					<label for="quiz">Enter Question</label>
                    <textarea id="quiz" name="quiz" rows="4" cols="47" required></textarea>
				</div>
			
				<div class="input_wrap">
					<input type="submit" value="Submit" class="submit_btn" name="submit_quiz" >
				</div>
				
				
		</form>
	</div>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Question Id</th>
            <th>Question Subject</th>
            <th>Question Content</th>
            <th>Answer</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
            $get_quiz = "SELECT * FROM `questions`";
            $run_quiz = mysqli_query($con,$get_quiz);
            while($row_quiz = mysqli_fetch_array($run_quiz)){
                $quiz_id = $row_quiz['question_id'];
                $quiz_title = $row_quiz['question_title'];
                $quiz_content = $row_quiz['question_content'];
                $quiz_answer = $row_quiz['answer'];
               
                echo "
                    <tr>
                        <td>$quiz_id</td>
                        <td>$quiz_title</td>
                        <td>$quiz_content</td>
                        <td>$quiz_answer</td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>

<?php
if(isset($_POST['submit_quiz'])){
    $quiz_title = $_POST['quiz_title'];
    $quiz = $_POST['quiz'];
	$answer = 'Waiting for answer';
    $insert_query = "INSERT INTO `questions`(`question_title`, `question_content`,`answer`) VALUES ('$quiz_title','$quiz','$answer')";
    $result_insert = mysqli_query($con,$insert_query);
    if($result_insert){
        echo "<script>alert('Quiz Added Successfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }else{
        echo "<script>alert('Quiz Added Failed')</script>";
    }
}
?>