<form action="login_form.php" method="POST">
	<h4>password*</h4>
        <input class="form-control input-lg "  id="inputlg" type="text" name="password" placeholder="password" required><br>
        <button type="button submit" class="btn btn-danger center-block ">Register</button><br>	
</form>

<?php

$options = [
    'cost' => 11,
];
$passwd=$_POST[password];
$hash=password_hash($passwd, PASSWORD_BCRYPT, $options);
echo $hash;

?>