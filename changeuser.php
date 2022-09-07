	<?php 
session_start();
	require 'pdoconn.php';
		if(isset($_POST['change']))
		{
		$user=$_POST['new_user'];
		$email=$_POST['new_email'];
		$avatar=$_POST['useravatar'];
 		$n=$_SESSION['login_user'];
$_SESSION['avatar']=$_POST['useravatar'];
		$chg_pwd=$pdo->prepare("select * from users WHERE user_name='$n'");

		$chg_pwd->execute();
		foreach($chg_pwd as $res){
    
        $data_pwd=$res['user_name'];
					$update_pwd=$pdo->query("update users set user_name='$user',user_email='$email',avatar='$avatar' WHERE user_name='$n'");
					$_SESSION['login_user']=$user;
					$_SESSION['avatar']=$avatar;
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
			
			
		}
		
		
		
		}
    
		
	?>