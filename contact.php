<!-- Global Head -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/globalHead.php'; ?>
<!-- End Global Head -->

<body>
	
	<header>
		
		<!-- Main Navigation -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/mainNavigation.php'; ?>
		<!-- End Main Navigation -->

	</header>

	<main class="nav-compensation" role="main">

		
		<section class="contact-tradewind">
			<div class="wrapper inner-content">
				<h1 class="canon-text mtn">Contact Tradewind</h1>
				<form method="post" action="contactengine.php">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" />
				
				<label for="City">City:</label>
				<input type="text" name="City" id="City" />
	
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />
				
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
			</div>
		</section>


	</main>

	<footer>

		<!-- Footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/footer.php'; ?>
		<!-- End Footer -->

	</footer>

	<!-- Loading Scripts -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/partials/scripts.inc.php'; ?>
	<!-- End Loading Scripts -->

</body>
</html>