<!-- Student Number:101391157-->
<!-- Create -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Starting with PHP</title>
    <meta name="description" content="Our first PHP file">
    <meta name="auther" content="Erdal Ozkaya">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <h1>Online Store</h1>
    <p>
      <?php
      //Declare some variables
      $user_id="dr_pollock";
      $password="3lkgui72";
      $pass_valid=true;
      if($pass_valid and empty($password)){
        echo "Welcoe back $user_id";
      }else{
        echo "Welcome back, please browse the shoe selection"
      }
      ?>
    </p>
  </body>
  
</html>