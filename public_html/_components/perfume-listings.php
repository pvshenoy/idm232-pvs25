
<section class="fragrance-library">
      <form class="search" action="<?php echo site_url(); ?>/admin/search" method="GET">
        <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search">
        <button type="submit">Search</button>
      </form>
    <div class="fragrance-row">
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