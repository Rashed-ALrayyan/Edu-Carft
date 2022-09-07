	<?php 
session_start();
		require 'pdoconn.php';
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$n=$_SESSION['login_user'];
		$chg_pwd=$pdo->prepare("select * from users WHERE user_name='$n'");

		$chg_pwd->execute();
		    foreach($chg_pwd as $res){
    
      $data_pwd=$res['user_pass'];
		if($data_pwd==$old_pass)
		{
		if($new_pass==$re_pass)
		{			$update_pwd=$pdo->query("update users set user_pass='$new_pass' WHERE user_name='$n'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";}
		else
		{echo "<script>alert('Your new and Retype Password is not match');window.location='profile.php' </script>";}
		}
		else
		{echo "<script>alert('Your Old Password is not correct');window.location='profile.php' </script>";
		
		}}
    }
		
	?>