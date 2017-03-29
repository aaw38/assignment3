<?php 
	function __autoload($class) {
		require_once $class . '.php';
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<header>
		<h1>Our Solar System</h1>
	</header>
	<main>
		<h1>Learn about the Solar System!</h1>
		<?php
			$jupiterMoons = array("Metis", "Adrastea", "Amalthea", "Thebe", "Io", "Europa", "Ganymede", "Callisto", "Leda", "Himalia", "Lysithea", "Elara", "Ananke", "Carme", "Pasiphae", "Sinope");
			$saturnMoons = array("Titan", "Rhea", "Iapetus", "Dione", "Tethys", "Enceladus", "Mimas", "Hyperion", "Prometheus", "Pandora", "Phoebe", "Janus", "Epimetheus", "Helene", "Telesto", "Calypso", "Atlas", "Pan", "Ymir", "Paaliaq", "Siarnaq", "Tarvos", "Kiviuq", "Ijiraq", "Thrymr", "Skathi", "Mundilfari", "Erriapo", "Albiorox", "Suttung");
			$uranusMoons = array("Cordelia", "Ophelia","Bianca", "Cressida", "Desdemona", "Juliet", "Portia", "Rosalind", "Belinda", "Puck", "Miranda", "Ariel", "Umbriel", "Titania", "Oberon", "Caliban", "Sycorax", "Prospero", "Setebos", "Stephano", "Trinculo");
			$neptuneMoons = array("Triton", "Nereid", "Naiad", "Thalassa", "Despina", "Larissa", "Proteus", "Galatea");
			$plutoMoons = array("Charon", "Nix", "Hydra");

			$mercury = new ChildClass("Mercury");

			$venus = new ChildClass("Venus");

			$earth = new ChildClass("Earth");
			$earth->addMoon("Moon");

			$mars = new ChildClass("Mars");
			$mars->addMoon("Deimos");
			$mars->addMoon("Phobos");

			$jupiter = new ChildClass("Jupiter");
			foreach($jupiterMoons as $key):
				$jupiter->addMoon($key);
			endforeach;

			$saturn = new ChildClass("Saturn");
			foreach($saturnMoons as $key):
				$saturn->addMoon($key);
			endforeach;

			$uranus = new ChildClass("Uranus");
			foreach($uranusMoons as $key):
				$uranus->addMoon($key);
			endforeach;

			$neptune = new ChildClass("Neptune");
			foreach($neptuneMoons as $key):
				$neptune->addMoon($key);
			endforeach;

			$pluto = new ChildClass("Pluto");
			foreach($plutoMoons as $key):
				$pluto->addMoon($key);
			endforeach;

			$sun = new ParentClass("Sun", "Star");
			$sun->addOrbitingBody($mercury);
			$sun->addOrbitingBody($venus);
			$sun->addOrbitingBody($earth);
			$sun->addOrbitingBody($mars);
			$sun->addOrbitingBody($jupiter);
			$sun->addOrbitingBody($saturn);
			$sun->addOrbitingBody($uranus);
			$sun->addOrbitingBody($neptune);
			$sun->addOrbitingBody($pluto);

			echo '<p>', $sun, '</p>';
			echo '<p>', $mercury,'</p>';
			echo '<p>', $venus,'</p>';
			echo '<p>', $earth,'</p>';
			echo '<p>', $mars,'</p>';
			echo '<p>', $jupiter,'</p>';
			echo '<p>', $saturn,'</p>';
			echo '<p>', $uranus,'</p>';
			echo '<p>', $neptune,'</p>';
			echo '<p>', $pluto,'</p>';
			$pluto->makeDwarfPlanet();
			echo '<p>Oh no! Pluto is not a planet anymore: ', $pluto, '</p>';
			$pluto->makeRegularPlanet();
			echo '<p>Yay! Pluto is a planet again: ', $pluto, '</p>';
		?>
	</main>
	<footer>
		<p>Written by Abigail Wezelis on March 28, 2017</p>
	</footer>
</body>
</html>