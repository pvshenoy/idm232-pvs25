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



        <h1 class="perfumes-title" style="font-family: multi-display,sans-serif; font-weight: 500;
    margin: 2rem;" >Explore All Perfumes</h1>

        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
          }

?>
            <?php include __DIR__ . '/_components/perfume-listings.php'; ?>


<?php include_once __DIR__ . '/_components/footer.php';
?>
