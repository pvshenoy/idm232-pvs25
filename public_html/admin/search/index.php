
<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Search by Perfume';
include_once __DIR__ . '/../../_components/header.php';
$services = get_services();

// Check if search exist in query
if (isset($_GET['search'])) {
  $search = $_GET['search'];
} else {
  $search = '';
}

$query = 'SELECT *';
$query .= ' FROM perfumes';
$query .= " WHERE perfumeName LIKE '%{$search}%'";
$query .= " OR type LIKE '%{$search}%'";
$query .= " OR brand LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
  $perfumes_results = true;
} else {
  $perfumes_results = false;
}

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <?php include __DIR__ . '/../../_components/navigation-admin.php'; ?>
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Search Results</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search" value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$perfumes_results) {
          echo '<p>No results found</p>';
        }
        ?>
        <?php
        // If error query param exist, show error message
        if (isset($_GET['error'])) {
          echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
        } ?>
      </div>

    </div>

    <?php
    $site_url = site_url();
    if ($perfumes_results) {
      while ($perfumes_results = mysqli_fetch_assoc($results)) {
        // echo '<div class="flex flex-row justify-center items-center">';
        echo " <div class='flex flex-row justify-center items-center'>
        <a href='{$site_url}/perfume-detail.php?id={$perfumes_results['id']}' class='' >
            <div class=''>
            <img class='' width='100px' height='100px' src='{$site_url}/{$perfumes_results['image']}' alt=''>
                <div class=''>
                    <p class=''>{$perfumes_results['perfumeName']}</p>
                    <p class=''>{$perfumes_results['type']}</p>
                    <p class=''>{$perfumes_results['brand']}</p>
                    <p class=''>{$perfumes_results['description']}</p>
                </div> 
            </div>
        </a></div>
    ";
        // echo '</div>';
      }
    }
    ?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>