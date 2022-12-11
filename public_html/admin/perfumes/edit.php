<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Edit perfumes';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get perfumes data from database
$query = "SELECT * FROM perfumes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $perfumes variable;
    $perfumes = mysqli_fetch_assoc($result);
} else {
    $error_message = 'perfumes does not exist';
    // redirect_to('/admin/perfumes?error=' . $error_message);
}

?>

<h1 class="perfumes-title">Edit Perfume</h1>
            <form class="create"
              action="<?php echo site_url(); ?>/_includes/process-edit-perfumes.php" method="POST">
            <div class="form-content">
              <div class="row">
                <div class="form-text">
                  <div class="item">
                    <label for="">Fragrance Name</label>
                      <input class="text-input" type="text" name="perfumeName" value="<?php echo $perfumes['perfumeName']?>">
                  </div>

                  <div class="item">
                      <label for="">Type</label>
                      <input class="text-input" type="text" name="type" value="<?php echo $perfumes['type']?>">
                  </div>
                  <div class="item">
                      <label for="">Brand</label>
                      <input class="text-input" type="text" name="brand" value="<?php echo $perfumes['brand']?>">
                  </div>
                  <div class="item">
                      <label for="">Image</label>
                      <input class="text-input" type="text" name="image" value="<?php echo $perfumes['image']?>">
                  </div>
                </div>
                <div class="description-box">
                  <div class="item">
                        <label for="">Description</label>
                        <input class="text-input description-input" type="text" name="description" value="<?php echo $perfumes['description']?>">
                  </div>
                </div>
              </div>
              <div class="notes-input">
                <div class="item">
                    <label for="">Top Note</label>
                    <input class="text-input note-input" type="text" name="topNote" value="<?php echo $perfumes['topNote']?>">
                  </div>
                  <div class="item">
                    <label for="">Middle Note</label>
                    <input class="text-input note-input" type="text" name="middleNote" value="<?php echo $perfumes['middleNote']?>">
                  </div>
                  <div class="item">
                    <label for="">Bottom Note</label>
                    <input class="text-input note-input" type="text" name="bottomNote" value="<?php echo $perfumes['bottomNote']?>">
                  </div>
                </div>
                <div class="submit_button">
                  <input class="submit" type="submit" value="SUBMIT">
              <input type="hidden" name="id" value="<?php echo $perfumes['id']; ?>">
              </div>
                </div>




<?php include_once __DIR__ . '/../../_components/footer.php';