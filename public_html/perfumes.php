<?php
include_once __DIR__ . '/app.php';
$page_title = 'All Perfumes';
include_once __DIR__ . '/_components/header.php';
$perfumes = get_perfumes();
?>

<?php
// get perfume data from database
$query = 'SELECT * FROM perfumes ORDER BY perfumeName ASC';
$result = mysqli_query($db_connection, $query);

?>


<div class="mx-auto my-16 max-w-7xl px-4">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Perfumes</h1>
        <p class="mt-2 text-sm text-gray-700">Use the search bar to find the perfect perfume for you!</p>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search">
          <button type="submit">Search</button>
        </form>

        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
          }

?>
      </div>
    </div>
    <br>
    <br>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <?php include __DIR__ . '/_components/perfume-listings.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once __DIR__ . '/_components/footer.php';
?>
