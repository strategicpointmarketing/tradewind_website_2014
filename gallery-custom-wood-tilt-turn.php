<!-- Global Head -->
<?php include('views/partials/globalHead.php'); ?>
<!-- End Global Head -->

<body>
	
	<header>
		
		<!-- Main Navigation -->
		<?php include('views/partials/mainNavigation.php'); ?>
		<!-- End Main Navigation -->

	</header>

	<main class="nav-compensation" role="main">

		<div class="wrapper inner-content">

			<h1 class="canon-text mvxs">Tilt & Turn Windows <span class="paragon-text">(Custom Wood)</span></h1>

			 <?php

                // Include the UberGallery class
                include('gallery/_resources/UberGallery.php');

                // Initialize the UberGallery object
                $gallery = new UberGallery();

                // Initialize the gallery array
                $galleryArray = $gallery->readImageDirectory('gallery/custom-wood--tilt-turn');

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
		<?php include('views/partials/footer.php'); ?>
		<!-- End Footer -->

	</footer>

	<!-- Loading Scripts -->
	<?php include('views/partials/scripts.gallery.inc.php'); ?>
	<!-- End Loading Scripts -->

</body>
</html>