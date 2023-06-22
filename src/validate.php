<?php
$data = [];

$data['name'] = test_input($_POST['name']);
$data['email'] = test_input($_POST['email']);
$data['contact'] = test_input($_POST['contact']);
$data['oid'] = test_input($_POST['oid']);
$data['address'] = test_input($_POST['address']);
$data['date'] = $_POST['date'];

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (
    filter_var($data['email'], FILTER_VALIDATE_EMAIL) &&
    preg_match("/^[0-9]{10}$/", $data['contact']) &&
    preg_match("/^([a-zA-Z' ]+)$/", $data['name']) &&
    $data['oid'] != '' && $data['address'] != '' &&
    $data['date'] != ''
) {
    echo "<h3>All the input fields are filled correctly</h3>";
} else {
    echo "<h3>Please fill all the details correctly</h3>";
}
