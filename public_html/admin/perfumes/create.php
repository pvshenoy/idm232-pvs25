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

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Create Perfume</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form
              action="<?php echo site_url(); ?>/_includes/process-create-perfume.php"
              method="POST">

              <div class="block">
                <label for="">Name</label>
                <input class="border-black border-2" type="text" name="perfumeName">
              </div>

              <div class="block">
                <label for="">Type</label>
                <input class="border-black border-2" type="text" name="type">
              </div>
              <div class="block">
                <label for="">Brand</label>
                <input class="border-black border-2" type="text" name="brand">
              </div>
              <div class="block">
                <label for="">Image</label>
                <input class="border-black border-2" type="text" name="image">
              </div>
              <div class="block">
                <label for="">Description</label>
                <input class="border-black border-2" type="text" name="description">
              </div>

              <div class="block">
                <label for="">Top Note</label>
                <input class="border-black border-2" type="text" name="topNote">
              </div>
              <div class="block">
                <label for="">Middle Note</label>
                <input class="border-black border-2" type="text" name="middleNote">
              </div>
              <div class="block">
                <label for="">Bottom Note</label>
                <input class="border-black border-2" type="text" name="bottomNote">
              </div>
              <input
                class="nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php';
