<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		public function __construct($name)
		{
			parent::__construct($name, "Planet");
		}

		public function addMoon($bodyname)
		{
			parent::addOrbitingBody(new ParentClass($bodyname, "Moon"));
		}

		public function makeDwarfPlanet()
		{
			parent::setType("Dwarf Planet");
		}

		public function makeRegularPlanet()
		{
			parent::setType("Planet");
		}

		public function __toString()
		{
			$bodyString = parent::getOrbitingBodyString();
			if (parent::getNumOrbitingBodies() === 0)
				return parent::getName() . " is a " . parent::getType() . " with 0 moons";
			else if (parent::getNumOrbitingBodies() === 1) 
				return parent::getName() . " is a " . parent::getType() . " with 1 moon as follows: " . $bodyString;
			else
				return parent::getName() . " is a " . parent::getType() . " with " . parent::getNumOrbitingBodies() . " moons as follows: " . $bodyString;
		}
	}
?>
