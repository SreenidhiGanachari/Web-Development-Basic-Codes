<?php
if(isset($_POST['sub']))
{	$u=$_POST['name'];
    $p=$_POST['pass'];
    if(strlen($u)<8)
    {
      echo "less character";
    }
}
?>
<html>
<head>
</head>
<body>
<form method="post" action="">
<input type="textbox" name="name">
<input type="textbox" name="pass">
<input type="submit" name="sub">
<body>
</html>