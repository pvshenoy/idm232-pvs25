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
<section class="fragrance-library">
<div class="details">
<?php
            $site_url = site_url();
            while ($perfumes = mysqli_fetch_array($result)) {
                echo "
                <img class='detail-image' src='{$site_url}/{$perfumes['image']}' alt=''>
                <div class='inner-details'>
                    <div class='text-content'>
                        <h1 class='perfume-title'>{$perfumes['perfumeName']}</h1>
                        <p class='perfume-type-brand'><span style='font-weight: 500;'>{$perfumes['type']} </span> , <i>{$perfumes['brand']}</i></p>
                        <p class='description'>{$perfumes['description']}</p>
                    </div>
                    <h2 style='margin-bottom: 0rem;'>NOTES</h2>
                    <div class='notes'>
                        <div class='note note-one'>
                            <img src='{$site_url}/{$perfumes['topNote']}' alt='' class='note-img top-note'>
                            <p>TOP NOTES</p>
                        </div>
                        <div class='vl'></div>
                        <div class='note note-two'>
                            <img src='{$site_url}/{$perfumes['middleNote']}' alt='' class='note-img middle-note'>
                            <p>MIDDLE NOTES</p>
                        </div>
                        <div class='vl'></div>
                        <div class='note note-three'>
                            <img src='{$site_url}/{$perfumes['bottomNote']}' alt='' class='note-img bottom-note'>
                            <p>BOTTOM NOTES</p>
                        </div>
                        <div class='vl-ghost'></div>
                    </div>
                </div>
            </div>
                ";
            }
        ?>
    </div>
    </section>

    <section class="white">
        
    </section>

<?php include_once __DIR__ . '/_components/footer.php';