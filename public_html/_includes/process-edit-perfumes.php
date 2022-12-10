<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$perfumeName_value = sanitize_value($_POST['perfumeName']);
$type_value = sanitize_value($_POST['type']);
$brand_value = sanitize_value($_POST['brand']);
$image_value = sanitize_value($_POST['image']);
$description_value = sanitize_value($_POST['description']);
$topNote_value = sanitize_value($_POST['topNote']);
$middleNote_value = sanitize_value($_POST['middleNote']);
$bottomNote_value = sanitize_value($_POST['bottomNote']);
$id_value = sanitize_value($_POST['id']);

$result = edit_perfume($perfumeName_value, $type_value, $brand_value, $image_value, $description_value, $topNote_value, $middleNote_value, $bottomNote_value, $id_value);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/perfumes');
} else {
    $error_message = 'Perfume was not updated: ' . mysqli_error($db_connection);
    redirect_to('/admin/perfumes?error=' . $error_message);
}