<?php
  if ($_POST["txtage"] < 21)
  {
	   echo "You are under 21 years old<br/>";
     if($_POST["txtgender"] == "Male")
     {
       echo "You are a man";
     }
     elseif($_POST["txtgender"] == "Female")
     {
       echo "You are a woman";
     }
     else
     {
       echo "Please enter your gender exactly as the text specifies!";
     }
  }
  else
  {
	   echo "You are  21 years old or over<br/>";
     if($_POST["txtgender"] == "Male")
     {
       echo "You are a boy";
     }
     elseif($_POST["txtgender"] == "Female")
     {
       echo "You are a girl";
     }
     else
     {
       echo "Please enter your gender exactly as the text specifies!";
     }
  }

?>
