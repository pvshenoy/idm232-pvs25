
<?php
include_once __DIR__ . '../../app.php';
$page_title = 'Search by Perfume';
include_once __DIR__ . '../../_components/header.php';
$perfumes = get_perfumes();

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
$result = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($result->num_rows > 0) {
  $perfumes_result = true;
} else {
  $perfumes_result = false;
}

?>

<section class="fragrance-library">
<div class="wrap">
        <form class="search" action="<?php echo   site_url(); ?>/search" method="GET">
                  <input class="searchTerm" type="text" name="search" id="search" placeholder="Search by perfume">
                  <button class="searchButton" type="submit">
                    <img style="margin-bottom: .2rem;" src="/dist/images/search-blue.png" alt="">
                    </button>
        </form>
    <div style="flex-wrap: wrap;"class="fragrance-row">
            <?php
            $site_url = site_url();
            while ($perfumes = mysqli_fetch_array($result)) {
                echo "
                    <div class='fragrance'>
                        <a class='listing-link' href='{$site_url}/perfume-detail.php?id={$perfumes['id']}'>
                            <div class='row-image'>
                                <img src='{$site_url}/{$perfumes['image']}' alt='' class='fragrance-image'>
                            </div>
                            <h4 class='fragrance-title'>{$perfumes['perfumeName']}</h4>
                            <p class='fragrance-brand'>{$perfumes['brand']}</p>
                        </a>
                    </div>
                ";
            }
        ?>
    </div>
</section>