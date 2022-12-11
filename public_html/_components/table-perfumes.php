<?php
if (!isset($perfumes)) {
    echo '$perfumes variable is not defined. Please check the code.';
}
?>

<section class="fragrance-library">
      <div class="wrap-admin">
        <form class="search" action="<?php echo   site_url(); ?>/admin/search" method="GET">
                  <input class="searchTerm" type="text" name="search" id="search" placeholder="Search by perfume">
                  <button class="searchButton" type="submit">
                    <img style="margin-bottom: .2rem;" src="/dist/images/search-blue.png" alt="">
                    </button>
        </form>
        <button type="button" class="search-button">
          <a class="search-button" href="<?php echo site_url() . '/admin/perfumes/create.php' ?>">
            +
          </a>
      </button>
      </div>

        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
          }

    ?>
    <div class="center">
        <div class="perfumes">
        <?php
            $site_url = site_url();
            while ($perfumes = mysqli_fetch_array($result)) {
                echo "
            <div class='perfume-card'>
                <div class='perfume-card-image'>
                    <img src='{$site_url}/{$perfumes['image']}' alt='' class='perfume-image'>
                </div>
                <div class='card-content'>
                    <div class='card-text-content'>
                        <h3 class='perfume-title'>{$perfumes['perfumeName']}</h3>
                        <h4 class='brand'>{$perfumes['brand']}</h4>
                        <p class='card-description'>{$perfumes['description']}</p>
                    </div>
                    <div class='notes-actions'>
                        <div class='card-notes'>
                        <img src='{$site_url}/{$perfumes['topNote']}' alt='' class='notee'>
                        <img src='{$site_url}/{$perfumes['middleNote']}' alt='' class='notee'>
                        <img src='{$site_url}/{$perfumes['bottomNote']}' alt='' class='notee'>
                        </div>
                        <div class='actions'>
                        <a href='{$site_url}/admin/perfumes/delete.php?id={$perfumes['id']}' class='edit'>
                            <svg viewbox='0 0 306 306'>
                                <style type='text/css'>
                                    .st0{fill:#10101B;
                                    width: 1rem;
                                    height: 1rem;}
                                </style>
                                <path class='st0' d='M76.5,242.2c0,14,11.5,25.5,25.5,25.5h102c14,0,25.5-11.5,25.5-25.5V114.8c0-14-11.5-25.5-25.5-25.5H102
                                c-14,0-25.5,11.5-25.5,25.5V242.2z M114.8,114.8h76.5c7,0,12.8,5.7,12.8,12.8v102c0,7-5.7,12.8-12.8,12.8h-76.5
                                c-7,0-12.8-5.7-12.8-12.8v-102C102,120.5,107.7,114.8,114.8,114.8z M197.6,51l-9.1-9.1c-2.3-2.3-5.6-3.7-8.9-3.7h-53.3
                                c-3.3,0-6.6,1.4-8.9,3.7l-9.1,9.1H76.5c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8h153c7,0,12.8-5.7,12.8-12.8S236.5,51,229.5,51
                                H197.6z'/>
                            </svg>
                        </a>
                        <a href='{$site_url}/admin/perfumes/edit.php?id={$perfumes['id']}' class='delete'>
                            <svg viewbox='0 0 306 306' style='enable-background:new 0 0 306 306;'>
                                <style type='text/css'>
                                .st0{fill:#10101B;}
                                </style>
                                <path class='st0' d='M63.8,242.2h17.8l110-110l-17.9-17.9l-110,110V242.2z M246.1,113.8l-54.2-53.6l17.9-17.8
                                    c4.9-4.9,10.9-7.3,18-7.3c7.1,0,13.1,2.4,18,7.3l17.8,17.8c4.9,4.9,7.4,10.8,7.7,17.7c0.2,6.9-2.1,12.8-7,17.7L246.1,113.8z
                                    M227.6,132.6L92.4,267.8H38.2v-54.2L173.4,78.4L227.6,132.6z M182.6,123.4l-8.9-8.9l17.9,17.9L182.6,123.4z'/>
                            </svg>
                        </a>
                        </div>
                    </div>
                </div>
            </div> 
            ";
        }
    ?>          
        </div>
      </div>
</section>  