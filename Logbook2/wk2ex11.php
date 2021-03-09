<?php
  $mymarks["CO403"] = 69;
  $mymarks["CO404"] = 67;
  $mymarks["CO450"] = 84;
  $mymarks["CO451"] = 90;
  $mymarks["CO454"] = 46;
  $mymarks["CO456"] = 82;
  $total = 0;


  while(list($index, $value) = each($mymarks))
  {
    $total = $total + $mymarks[$index];
    $average = $total /  6;
  }
  echo "My average mark was $average";
?>
