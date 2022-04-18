<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $atmnoErr = $genderErr = $ccnoErr = $cvvErr ="";
$name = $atmno = $gender = $ccno = $cvv = "";

if ($_POST)
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  }
  else
  {
    $name = test_input($_POST["name"]);
  }
 
  if (empty($_POST["atmno"]))
  {
    $email = "";
  }
  else
  {
    $email = test_input($_POST["email"]);
  }
   
  if (empty($_POST["cvv"]))
  {
    $cvvErr = "Cvv is required";
  }
  else
  {
    $cvv = test_input($_POST["cvv"]);
  }


  if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
  }
  else
  {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Payment Gateway</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span><br><br>
  Atm card number: <input type="text" name="atmno">
  <span class="error"><?php echo $emailErr;?></span><br><br>
  Credit car Number <input type="text" name="ccno">
  <span class="error"><?php echo $ccnoErr;?></span><br><br>
  CVV <input type="text" name="cvv">
  <span class="error">*<?php echo $cvvErr;?></span><br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span><br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name."<br>";
echo $atmno."<br>";
echo $ccno."<br>";
echo $gender."<br>";
echo $cvv;
?>

</body>
</html>
