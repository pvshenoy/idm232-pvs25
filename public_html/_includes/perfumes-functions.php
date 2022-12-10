<?php
/**
 * get all users from the database
 * @return object - mysqli_result
 */
function get_perfumes()
{
    global $db_connection;
    $query = 'SELECT * FROM perfumes order by perfumeName asc';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function add_perfume($perfumeName, $type, $brand, $image, $description, $topNote, $middleNote, $bottomNote)
{
    global $db_connection;
    $query = 'INSERT INTO perfumes';
    $query .= ' (perfumeName, type, brand, image, description, topNote, middleNote, bottomNote)';
    $query .= " VALUES ('{$perfumeName}', '{$type}', '{$brand}', '{$image}', '{$description}', '{$topNote}', '{$middleNote}', '{$bottomNote}')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}


function delete_perfume_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM perfumes WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}


function edit_perfume($perfumeName_value, $type_value, $brand_value, $image_value, $description_value, $topNote_value, $middleNote_value, $bottomNote_value, $id_value)
{
    global $db_connection;
    $query = 'UPDATE perfumes';
    $query .= " SET perfumeName = '{$perfumeName_value}', type = '{$type_value}', brand= '{$brand_value}', image= '{$image_value}', description = '{$description_value}', topNote = '{$topNote_value}', middleNote = '{$middleNote_value}', bottomNote = '{$bottomNote_value}'";
    $query .= " WHERE id = {$id_value}";
    $result = mysqli_query($db_connection, $query);
    return   $result;
}
