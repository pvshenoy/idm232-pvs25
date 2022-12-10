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

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Edit Perfume</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-perfumes.php" method="POST">
              <div class="block">
                <label for="">Perfume Name</label>
                <input class="border-black border-2" type="text" name="perfumeName"
                  value="<?php echo $perfumes['perfumeName']?>">
              </div>

              <div class="block">
                <label for="">Type</label>
                <input class="border-black border-2" type="text" name="type"
                  value="<?php echo $perfumes['type']?>">
              </div>
              <div class="block">
                <label for="">Brand</label>
                <input class="border-black border-2" type="text" name="brand"
                  value="<?php echo $perfumes['brand']?>">
              <div class="block">
                <label for="">Image</label>
                <input class="border-black border-2" type="text" name="image"
                  value="<?php echo $perfumes['image']?>">
              </div>
              <div class=" block">
                <label for="">Description</label>
                <input class="border-black border-2" type="text" name="description" value="<?php echo $perfumes['description']?>">
              </div>
              <div class=" block">
                <label for="">Top Note</label>
                <input class="border-black border-2" type="text" name="topNote" value="<?php echo $perfumes['topNote']?>">
              </div>
              <div class=" block">
                <label for="">Middle Note</label>
                <input class="border-black border-2" type="text" name="middleNote" value="<?php echo $perfumes['middleNote']?>">
              </div>
              <div class=" block">
                <label for="">Bottom Note</label>
                <input class="border-black border-2" type="text" name="bottomNote" value="<?php echo $perfumes['bottomNote']?>">
              </div>
              <input class=" nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4
                  py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2
                  focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto" type="submit" value="Submit">
              <input type="hidden" name="id" value="<?php echo $perfumes['id']; ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';