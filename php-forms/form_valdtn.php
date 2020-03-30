 <!DOCTYPE html>
 <html lang="en">
 <head>
<?php //Integrating with bootstrap Basics ?>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <?php include 'test_form.php' ?>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Name:<input type="text" name="name" required><br>
   E-mail:<input type="text" name="email" required><br>
   Mobile:<input type="text" name="mobile"required><br>
   Gender:<input type="radio" name="gender" value="male"required>Male<input type="radio" name="gender" value="female"required>Female<input type="radio" name="gender" value="others"required>Others<br>
   Comment:<textarea name="comment" rows="5" cols="50"required></textarea><br>
   <input type="submit" name="submit" value="Submit">

   <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
?>

 </form>
 </body>
 </html>
