<<<<<<< HEAD
<<<<<<< HEAD
<?php
//including the database connection file
include("database.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM shouts WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location: index.php");
=======
=======
>>>>>>> a81707173982a565c02f76192b4eba3f214a852a
<?php
//including the database connection file
include("database.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM shouts WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location: index.php");
<<<<<<< HEAD
>>>>>>> initial commit
=======
>>>>>>> a81707173982a565c02f76192b4eba3f214a852a
?>