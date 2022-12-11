<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Perfumes';
include_once __DIR__ . '/../../_components/header.php';
$perfumes = get_perfumes();
?>


<?php
// get perfume data from database
$query = 'SELECT * FROM perfumes ORDER BY perfumeName ASC';
$result = mysqli_query($db_connection, $query);

?>


        <h1 style="color: #10101b; margin-left: 2rem;">Perfumes</h1>
        <p style="color: #10101b; margin-left: 2rem; width: 70%;">A list of all the perfumes in your on the site, including their name, type, description
          and notes. Click the '+' button to add a fragrance.</p>
            <?php include __DIR__ . '/../../_components/table-perfumes.php'; ?>




<?php include_once __DIR__ . '/../../_components/footer.php';