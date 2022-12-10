<?php
include_once __DIR__ . '/app.php';
$page_title = 'View perfume';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get perfume data from database
$query = "SELECT * FROM perfumes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?>


<?php
if (!isset($result)) {
    echo '$perfumes variable is not defined. Please check the code.';
}
?>

<?php
$site_url = site_url();
while ($perfumes = mysqli_fetch_array($result)) {
    echo "
        <div class=''>
            <div class=''>
                <div class=''>
                    <div>
                        <h2 class=''>{$perfumes['perfumeName']}</h2>
                        <div> 
                            <p class=''>{$perfumes['type']}, <i>{$perfumes['brand']}</i> </p>
                            <p class=''>{$perfumes['description']}</p>
                        </div>
                    </div>
                    <h2>Notes</h2>
                    <img class='' width='500px' height='500px' src='{$site_url}/{$perfumes['topNote']}' alt=''>
                    <img class='' width='500px' height='500px' src='{$site_url}/{$perfumes['middleNote']}' alt=''>
                    <img class='' width='500px' height='500px' src='{$site_url}/{$perfumes['bottomNote']}' alt=''>
                    <hr class='hr_30'>
                    <div class=''>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        ";
}
?>
<!-- </div>
          </div> -->

<?php include_once __DIR__ . '/_components/footer.php';