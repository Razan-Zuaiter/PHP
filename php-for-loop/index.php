<?php

$x = array(3, 4, 5, 2, 1);

for ($i = 0; $i < count($x); $i++) {
  if ($i == count($x)) {
    print_r($x[$i]);
  } else {
    print_r($x[$i + 1] * $x[$i]);
    echo "<br>";
  }
}
