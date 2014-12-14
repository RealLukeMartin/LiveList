<?php 

    require 'config/database.php';
    if ( !empty($_POST)) {
         // keep track validation errors
        $usernameError = null;
        $passwordError = null;
         
        // keep track post values
        $username = $_POST['username'];
        $password = $_POST['password'];
         
        // validate input
        $valid = true;
        if (empty($username)) {
            $nameError = 'Please enter User Name';
            $valid = false;
        }
         
        if (empty($password)) {
            $emailError = 'Please enter Password';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (username,password) values(?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($username,$password));
            Database::disconnect();
            header("Location: index.php");
        }
    }

?>

<?php $page_title = 'Register' ?>
<?php include_once 'includes/header.php' ?>
    <div class="span10 offset1">
        <div class="row">
            <h3>Register</h3>
        </div>

        <form class="form-horizontal" action="register.php" method="post">
        	<input name="username" type="text"  
        		   placeholder="User Name" 
        		   value="<?php echo !empty($username)?$username:'';?>"
            />
            <?php if (!empty($usernameError)): ?>
                <span class="help-inline"><?php echo $usernameError;?></span>
            <?php endif; ?>
        	<input name="password" type="password"  
        		   placeholder="Password" 
        		   value="<?php echo !empty($password)?$password:'';?>"
            />
            <?php if (!empty($passwordError)): ?>
                <span class="help-inline"><?php echo $passwordError;?></span>
            <?php endif;?>          
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Join</button>
	          <a class="btn btn-primary" href="index.php">Back</a>
	        </div>
        </form>
    </div>



<?php include_once 'includes/footer.php' ?>