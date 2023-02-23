<?php
// Generate some example data
$data = array(
  array("label" => "A", "value" => 5),
  array("label" => "B", "value" => 10),
  array("label" => "C", "value" => 15),
  array("label" => "D", "value" => 20),
  array("label" => "E", "value" => 25),
);

// Output data as JSON
echo json_encode($data);
?>