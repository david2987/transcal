<?php
// include "../includes/config.php";
include "./includes/header.php";
include "./includes/navbar.php";
?>

<main class="container mt-4">
    <?php
    $file = "./pages/{$page}.php";
    if (file_exists($file)) {
        include $file;
    } 
    ?>
</main>

<?php include "./includes/footer.php"; ?>
