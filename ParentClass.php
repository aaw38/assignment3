<?php
	// This is the file for the parent class

	class ParentClass {
		private $name;
		private $type;
		private $orbitingBodies;
		private $numOrbitingBodies;

		public function __construct($name, $type)
		{
			$this->name = $name;
			$this->type = $type;
			$this->numOrbitingBodies = 0;
			$this->orbitingBodies = array();
		}

		public function addOrbitingBody($body)
		{
			$this->orbitingBodies[$this->numOrbitingBodies++] = $body;
		}

		protected function setType($type)
		{
			$this->type = $type;
		}

		protected function getName()
		{
			return $this->name;
		}

		protected function getType()
		{
			return $this->type;
		}

		protected function getNumOrbitingBodies()
		{
			return $this->numOrbitingBodies;
		}

		protected function getOrbitingBodyString()
		{
			$bodyString = "";
			$first = true;
			foreach ($this->orbitingBodies as $val):
				if ($first)
				{
					$bodyString = " " . $val->name;
					$first = false;
				}
				else
					$bodyString = $bodyString . ", " . $val->name;
			endforeach;
			return $bodyString;

		}

		public function __toString()
		{
			$bodyString = $this->getOrbitingBodyString();
			if ($this->numOrbitingBodies === 0)
				return $this->name . " is a " . $this->type . " with 0 orbiting bodies";
			else if ($this->numOrbitingBodies === 1)
				return $this->name . " is a " . $this->type . " with 1 orbiting body as follows: " . $bodyString;
			else
				return $this->name . " is a " . $this->type . " with " . $this->numOrbitingBodies . " orbiting bodies as follows: " . $bodyString;
		}


	}


?>
