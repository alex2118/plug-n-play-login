<?php

  function hasError($errors) {
    if (in_array(true, $errors)) {
        return;
    }
  }

  function getKeys($arr) {
    foreach(array_keys($arr) as $column) {
			array_push($this->columns, $column);
		}
  }

 ?>
