	<!-- Quote -->
	<div class="quote">
		<div class="container text-centered">
			<h1>fight against the ugliness.</h1>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="units-row">
			    <div class="unit-50">
					<?php
						$lang = 'fr';
						if(isset($_GET['lang'])) {
							$lang = $_GET['lang'];
						}
						if($lang == 'fr') {
							echo '<p>Créé par Julien FREMAUX</p>';
						}
						if($lang == 'en') {
							echo '<p>Created by Julien FREMAUX</p>';
						}
					?>
			    </div>
			</div>
		</div>
	</footer>
</body>
</html>