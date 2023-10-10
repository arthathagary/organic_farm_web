<?php
include ("../../../htdocs/doa/include/connect.php");
include ("../../../htdocs/doa/functions/common_function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
<div class="wrapper">
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
    
</body>
</html>


