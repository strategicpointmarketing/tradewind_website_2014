<!DOCTYPE html>
<html>
<head>

<!-- Global Meta -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/globalMeta.php'; ?>
<!-- End Global Meta -->


<!-- Meta Tags -->
<title>Tradewind Distribution</title>
<meta name="description" content="">
<meta name="keywords" content="">
<!-- End Meta Tags -->


<!-- Global Head -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/globalHead.php'; ?>
<!-- End Global Head -->

</head>

<body>
    
    <header>
        
        <!-- Main Navigation -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/mainNavigation.php'; ?>
        <!-- End Main Navigation -->

    </header>

    <main class="nav-compensation" role="main">

        <div class="wrapper inner-content">

            <h1 class="canon-text mvxs">Curtain Wall <span class="paragon-text">(Elite Aluminum)</span></h1>

             <?php

                // Include the UberGallery class
                include('_resources/UberGallery.php');

                // Initialize the UberGallery object
                $gallery = new UberGallery();

                // Initialize the gallery array
                $galleryArray = $gallery->readImageDirectory('images/aluminum--curtain-wall');

                // Define theme path
                if (!defined('THEMEPATH')) {
                    define('THEMEPATH', $gallery->getThemePath());
                }

                // Set path to theme index
                $themeIndex = $gallery->getThemePath(true) . '/index.php';

                // Initialize the theme
                if (file_exists($themeIndex)) {
                    include($themeIndex);
                } else {
                    die('ERROR: Failed to initialize theme');
                }

                ?>
        </div>
            
        </section>
        



    </main>

    <footer>

        <!-- Footer -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/footer.php'; ?>
        <!-- End Footer -->

    </footer>

    <!-- Loading Scripts -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/scripts.gallery.inc.php'; ?>
    <!-- End Loading Scripts -->

</body>
</html>