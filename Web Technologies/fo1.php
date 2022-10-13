<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
  	 $pat="/^[a-zA-z]+$/";
  	 $check=preg_match($pat, $_POST['name']);
  	 if($check)
  	 {
  	 	$name=$_POST["name"];
  	 }
  	 else
  	 {
  	 	$nameErr = "Enter correct data";
  	 }
  }

}
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
?>
</body>
</html>
