<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    echo 'Welcome ' . $_POST["fname"] . $_POST["lname"] . '<br>';
    echo 'Your Email Address is ' . $_POST["email"] . '<br>';
    echo 'Your Password has' . strlen($_POST["pass"]) . '<br>';

    if($_POST["pass"] == $_POST["cpass"])
    {
      echo 'Your password is equal!';
    }
    else
    {
      echo 'Not Equal';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      echo 'It is a POST DATA.';
    }

    else
    {
      echo 'It is not a POST DATA.';
    }
  }
?>