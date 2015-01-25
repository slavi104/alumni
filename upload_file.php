<?php
	require_once "controller.php";
	
	if ($_POST) 
	{
		if (isset($_FILES["file"])) 
		{
			$code = fCryptography::randomString(32, 'hexadecimal');
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);

			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 2000000)
			&& in_array($extension, $allowedExts)) 
			{
				if ($_FILES["file"]["error"] > 0) 
				{

				} 
				else 
				{
				    if (file_exists(trim("images/profile_pictures/").$code.$_FILES["file"]["name"])) 
				    {
				    } else 
				    {
				      move_uploaded_file($_FILES["file"]["tmp_name"],
				      trim('images/profile_pictures/').$code.$_FILES["file"]["name"]);
				    }
		  		}
		  	$execute = 1;
			} 
			else 
			{
				$execute = 0;
			}
		}

		if ($_POST['is_avatar'] == 1) {
			
			$username = rtrim($_POST['username']);
			$name = trim($_POST['username']);
            $pass1 = trim($_POST['pass1']);
            $pass2 = trim($_POST['pass2']);
            $email = trim($_POST['email']);
            $sex = trim($_POST['sex']);
            fUTF8::clean($name);
            fUTF8::clean($pass1);
            fUTF8::clean($pass2);
            fUTF8::clean($email);
            /*var_dump($pass1);
            var_dump($pass2);*/
            $hashedPass = fCryptography::hashPassword($pass1);
		    $id = fSession::get('current_user_id');
		    fSession::set('current_user_name' , $username);
			try {
				$user = new User($id);
				$user->setUserName($username);
				if ($pass1 == $pass2 && $pass1 !='') {
					$user->setPassword($hashedPass);
				} elseif($pass1 != $pass2) {
					echo '<script type="text/javascript"> alert("Паролите не съвпадат!!!"); </script>';
				}
                $user->setEmail($email);
                if ($sex == 'мъж') {
                    $user->setSex('мъж');
                }
                else
                {
                    $user->setSex('жена');
                }

                $user->setGrade($_POST['grade']);
                $user->setGradeType($_POST['type']);
                $user->setStartYear($_POST['start_year']);
                $user->setEndYear($_POST['еnd_year']);
                $user->setSpeciality($_POST['speciality']);
				if ($_FILES["file"]["name"] != "") 
				{
					echo ($_FILES["file"]["name"]);
					$user->setAvatar('images/profile_pictures/'.$code.$_FILES["file"]["name"]);
				}
				$user->store();

			} catch (Exception $e) 
			{
				echo $e->getMessage();
			}

			header('Location: profile.php');

		} elseif($_POST['is_avatar'] != 1){
			
			$article_title = trim($_POST['article_title']);
			$article_content = trim($_POST['article_content']);

			try {
				$article = new Article();
				$article->setTitle($article_title);
				$article->setText($article_content);
				$article->setImage('images/profile_pictures/'.$code.$_FILES["file"]["name"]);
				$article->store();
			} catch (Exception $e) 
			{

				echo $e->getMessage();
			}

			header('Location: news.php');
		} else {
			header('Location: profile.php');
		}
	}
?>

