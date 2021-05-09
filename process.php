<<<<<<< HEAD
<<<<<<< HEAD
<?php
include "database.php";
// check if form is submited using the isset function
if(isset($_POST['submit'])) {
	// normally we cout just set the code as $_POST['user'], but it is better we use a string, therefore we use $user=$_POST['user'] then we add the msqli real escape command to strip the code off any excesses and always do not forget to include yout connection string along side
	$user = mysqli_real_escape_string($connect,$_POST['user']);
	$message = mysqli_real_escape_string($connect,$_POST['message']);
	// step 1 :the mysqli_real_escape_string will help to strip the code of any harmful html tags submitted

	

	// step3; we use this codeline to validate the users info input(||(double pipes represent or))

	if(!isset($user) || $user == '' || !isset($message) || $message == ''){
       // echo "bad";
		// the below code line is to display an error message when the form isint properly filled
		$error = 'Please fill in your name and message';
		// the below code is for redirection draging the possible error along
		header("Location: index.php?error=".urlencode($error));
		exit();
	}
       else {
       	// echo "good"; we first used echo to test, then since it worked, we now set it to populate the query row in our database using the code below NB same comma order should be followed in both places
       	$query = "insert into shouts(user,message)VALUES('$user','$message')";
       	// Else, if it didnt insert we use the !mysqli_connect funtion to ascertain 
       	if (!mysqli_query($connect, $query)) {
       		die('Error:'.mysqli_error($connect));
       	}
       	// Else redirect us back to our index page
       	else {
       		header("Location: index.php");
       		exit();
       	}
       }


		 
		

		
	

 }
 ?>
=======
=======
>>>>>>> a81707173982a565c02f76192b4eba3f214a852a
<?php
include "database.php";
// check if form is submited using the isset function
if(isset($_POST['submit'])) {
	// normally we cout just set the code as $_POST['user'], but it is better we use a string, therefore we use $user=$_POST['user'] then we add the msqli real escape command to strip the code off any excesses and always do not forget to include yout connection string along side
	$user = mysqli_real_escape_string($connect,$_POST['user']);
	$message = mysqli_real_escape_string($connect,$_POST['message']);
	// step 1 :the mysqli_real_escape_string will help to strip the code of any harmful html tags submitted

	

	// step3; we use this codeline to validate the users info input(||(double pipes represent or))

	if(!isset($user) || $user == '' || !isset($message) || $message == ''){
       // echo "bad";
		// the below code line is to display an error message when the form isint properly filled
		$error = 'Please fill in your name and message';
		// the below code is for redirection draging the possible error along
		header("Location: index.php?error=".urlencode($error));
		exit();
	}
       else {
       	// echo "good"; we first used echo to test, then since it worked, we now set it to populate the query row in our database using the code below NB same comma order should be followed in both places
       	$query = "insert into shouts(user,message)VALUES('$user','$message')";
       	// Else, if it didnt insert we use the !mysqli_connect funtion to ascertain 
       	if (!mysqli_query($connect, $query)) {
       		die('Error:'.mysqli_error($connect));
       	}
       	// Else redirect us back to our index page
       	else {
       		header("Location: index.php");
       		exit();
       	}
       }


		 
		

		
	

 }
 ?>
<<<<<<< HEAD
>>>>>>> initial commit
=======
>>>>>>> a81707173982a565c02f76192b4eba3f214a852a
