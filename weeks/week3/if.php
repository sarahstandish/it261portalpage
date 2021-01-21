<?php
  
  $temp = 80;

  if ($temp <= 60) {
    echo "It's not hot";
  } else if ($temp <= 70) {
      echo "Getting warmer";
  } else if ($temp <= 80) {
      echo "Getting really hot.";
  };

  function total_compensation($salary, $sales) {
    if ($sales >= 800000) {
        return $salary *= 1.1;
    } else if ($sales > 500000 && $sales < 800000) {
        return $salary *= 1.05;
    } else {
        return $salary;
    };
}
    echo "<br>";
    echo "My compensation is $" . total_compensation(200000, 800000);

?>