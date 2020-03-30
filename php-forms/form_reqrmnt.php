<!DOCTYPE html>
<html lang="en">
<head>

  <?php
//bootstrap link
  /*
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
*/?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php include 'test_form_err.php' ?>

<p><span class="error">*Required Field</span></p>
<form class="form" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  Name:<input type="text" name="name" value="<?php echo $name; ?>"><span class="error">*<?php echo $nameErr;?></span>
  <br><br>
  Email:<input type="email" name="email"value="<?php echo $email; ?>"><span class="error">*<?php echo $emailErr;?></span>
  <br><br>
  Mobile:<input type="tel" name="mobile"value="<?php echo $mobile; ?>"><span class="error">*<?php echo $mobileErr;?></span>
  <br><br>
  Website:<input type="url" name="website"value="<?php echo $website; ?>"><span class="error">*<?php echo $websiteErr;?></span> <br><br>

  Gender: <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Comment:<textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
  <input type="submit" name="submit" value="Submit">
</form>

  <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $website;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
?>

</form>
</body>
</html>
