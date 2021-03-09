<?php

  //The cookie method
  /*
  setcookie('selqty', $_POST['selqty']);
  */

  session_start();
  $_SESSION['selqty'] = $_POST['selqty'];

?>
<html>
  <head><title>Select colour page</title></head>
  <body>
    <form action="selectcolour.php"  method="post">
	     Select the size of the <?php echo intval($_POST['selqty']) ?> widgets you are ordering
       <select name="selsize">
       	 <option value ="Small">Small (£15.75)</option>
      	 <option value ="Medium">Medium (£16.75)</option>
        <option value ="Large">Large (£17.75)</option>
    	  <option value ="Extra Large">Extra Large (£18.75)</option>
      </select>
      <br/><br/>
      <!--
      The hidden field method:
      <input type="hidden" name="selqty" value="<?php //echo $_POST['selqty']?>"/>
      -->
      <input type="submit" value="Buy"/>
    </form>
 </body>
</html>
