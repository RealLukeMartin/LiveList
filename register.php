<?php require 'config/database.php';

?>

<?php $page_title = 'Register' ?>
<?php include_once 'includes/header.php' ?>
    <div class="span10 offset1">
        <div class="row">
            <h3>Register</h3>
        </div>

        <form class="form-horizontal" action="register.php" method="post">
        	<input name="username" type="text"  placeholder="User Name" value="<?php echo !empty($username)?$username:'';?>">
        </form>
    </div>



<?php include_once 'includes/footer.php' ?>