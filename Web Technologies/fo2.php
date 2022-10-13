<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  
<?php
$phoneErr = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["phone"])) 
  {
    $phoneErr = "phone no is required";
  } 
  else 
  {
     $pat="/^[6-9]{1}[0-9]{9}/";
     $check=preg_match($pat, $_POST['phone']);
     if($check)
     {
      $phone=$_POST["phone"];
     }
     else
     {
      $phoneErr = "Enter correct data";
     }
  }

}
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="">  
  Name: <input type="text" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
 <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $phone;
echo "<br>";
?>
</body>
</html>
