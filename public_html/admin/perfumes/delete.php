<?php
include_once __DIR__ . '/../../app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}

$result = delete_perfume_by_id($id);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/perfumes');
} else {
    $error_message = 'Could Not Delete Perfume: ' . mysqli_error($db_connection);
    redirect_to('/admin/perfumes?error=' . $error_message);
}