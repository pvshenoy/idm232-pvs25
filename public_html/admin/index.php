<?php
include __DIR__ . '/../app.php';
// If someone lands on /admin, redirect them to /admin/perfumes as the default page
redirect_to('/admin/users.php');