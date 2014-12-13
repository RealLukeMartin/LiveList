<?php
  class SimpleClass {
  	// property declaration
  	public $var = 'a default value';

  	// method declaration
  	public function displayVar() {
  		echo ' Super ' . $this->var;
  	}
  }

  $a = new SimpleClass();
  echo $a->var;
  $a->displayVar();
?>
<?php include_once 'includes/header.php' ?>



  </div> <!-- /container -->
</body>
</html>