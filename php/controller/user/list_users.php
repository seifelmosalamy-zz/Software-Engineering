<?php

require_once '../../model/user_values.php';

$uv = new user_values(null);
$data = array();

$data[0] = $usertypeID = $_POST['usertypeID'];
$x = $uv->_read($data, array());
echo json_encode($x);

?>