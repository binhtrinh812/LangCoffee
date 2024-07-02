<?php
session_start();
ob_start();
include_once './helper/helper.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once './Public/head.php';
    ?>
</head>

<body>
    <!-- header -->
    <?php
    include_once './Public/header.php';
    ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'home':
            include_once './Controllers/HomeController.php';
            $home = new HomeController();
            break;
        case 'menu':
            include_once './Controllers/MenuController.php';
            $menu = new MenuController();
            break;
        case 'person':
            include_once './Controllers/PersonController.php';
            $person = new PersonController();
            break;
        case 'story':
            include_once './Controllers/StoryController.php';
            $story = new StoryController();
            break;
        case 'blog':
            include_once './Controllers/BlogController.php';
            $blog = new BlogController();
            break;


        default:
            include_once './Views/404page.php';
            break;
    }
    ?>
    <?php
    include_once './Public/footer.php';
    ?>

    <?php
    include_once './Public/script.php';
    ?>
</body>

</html>