  <?php
//connection


include ('admin/conn.php'); 

$id_number = $_POST['votingid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$year_level = $_POST['year_level'];


$query = "SELECT * FROM `voters` WHERE `voting_id` = '$id_number'";
$result = mysqli_query($con,$query);
if ($result) {
  if (mysqli_num_rows($result) > 0) {
   echo "<script>
alert('ID Number Already Exist');
 </script>";
echo "<script>
 window.location.href = 'register.php';
 </script>";
  } else {
    mysqli_query($con, "INSERT INTO `voters`(`id`, `voting_id`, `firstname`, `lastname`, `password`, `level`, `status`, `account`) VALUES (NULl, '$id_number', '$firstname', '$lastname', '$password', '$year_level','Unvoted', 'not-active')");
    echo "<script>
alert('Registration Successfully');
 </script>";
echo "<script>
 window.location.href = 'index.php';
 </script>";
  }
} else {
  echo 'Error: '.mysqli_error();
}


  ?>