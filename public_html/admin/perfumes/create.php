<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Create Perfume';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get perfume data from database
$query = 'SELECT * FROM perfumes';
$result = mysqli_query($db_connection, $query);

?>
            <h1 class="perfumes-title">Create Perfume</h1>
            <form class="create"
              action="<?php echo site_url(); ?>/_includes/process-create-perfume.php"
              method="POST">
            <div class="form-content">

              <div class="row">
                <div class="form-text">
                  <div class="item">
                    <label for="">Fragrance Name</label>
                      <input class="text-input" type="text" name="perfumeName" placeholder="Dior Addict, Coco Chanel...">
                  </div>

                  <div class="item">
                      <label for="">Type</label>
                      <input class="text-input" type="text" name="type">
                  </div>
                  <div class="item">
                      <label for="">Brand</label>
                      <input class="text-input" type="text" name="brand">
                  </div>
                  <div class="item">
                      <label for="">Image</label>
                      <input class="text-input" type="text" name="image">
                  </div>
                </div>
                <div class="description-box">
                  <div class="item">
                        <label for="">Description</label>
                        <input class="text-input description-input" type="text" name="description">
                  </div>
                </div>
              </div>
              <div class="notes-input">
                <div class="item">
                    <label for="">Top Note</label>
                    <input class="text-input note-input" type="text" name="topNote">
                  </div>
                  <div class="item">
                    <label for="">Middle Note</label>
                    <input class="text-input note-input" type="text" name="middleNote">
                  </div>
                  <div class="item">
                    <label for="">Bottom Note</label>
                    <input class="text-input note-input" type="text" name="bottomNote">
                  </div>
                </div>
                <div class="submit_button">
                  <input class="submit" type="submit" value="SUBMIT">
              </div>
                </div>
            </form>

<?php include_once __DIR__ . '/../../_components/footer.php';
