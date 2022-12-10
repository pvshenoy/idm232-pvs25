<?php
$main_navigation = [
    [
        'title' => 'PERFUMES',
        'url' => 'perfumes.php',
    ],
    [
        'title' => 'CONTACT',
        'url' => 'contact.php',
    ],
    [
        'title' => 'FORUMS',
        'url' => 'forums.php',
    ],

];

?>

<header class="px-2 py-4">
  <div class="max-w-7xl flex justify-between mx-auto">
    <a href="<?php echo site_url(); ?>">
        <img class="w-28 pt-3" src="<?php echo site_url(); ?>/dist/images/logo.png" alt="logo">
    </a>

    <nav class="text-black flex flex-row">
      <?php
      foreach ($main_navigation as $nav_item) {
          echo '<a href="' . $nav_item['url'] . '"class="p-4 inline-block">' . $nav_item['title'] . '</a>';
      }
?>

    </nav>
  </div>
</header>
