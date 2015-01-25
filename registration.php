<?php
require_once 'header.php';
?>

<div id="content">
<script>
$( document ).ready(function() {
    checkFormInputs()
});

</script>
<div id="registrationForm">
    <h2 class="span12 row-fluid">Регистрация:</h2>
    <form method="POST" class="row-fluid span12" id="registrationForm">

        <div class="row-fluid span12">
            <div class="span5 form-input-container">

                <label>Име:* <span class="is-teacher pull-right"><input type="checkbox" id="teacher" name="teacher">Преподавател</span></label>
                <input type="text" id="name" name="username">
                <span class="errorloc"></span>
            </div>
            <div class="span5 form-input-container">
                <label>Имейл:*</label>
                <input type="text" id="email" name="email">
                <span class="errorloc"></span>
            </div>
        </div>
        <div class="row-fluid span12 no-left-margin">
            <div class="span5 form-input-container">
                <label>Парола:*</label>
                <input type="password" id="pass1" name="pass1">
                <span class="errorloc"></span>
            </div>
            <div class="span5 form-input-container">
                <label>Повтори паролата:*</label>
                <input type="password" id="pass2" name="pass2">
                <span class="errorloc"></span>
            </div>
        </div>
        <div class="row-fluid span12 no-left-margin"> 
            <div class="span5 form-input-container">
                <label>Пол:</label>
                <input type="radio" class="pull-left" name="sex" value="мъж"><label class="radio-label">Мъж</label><br>
                <input type="radio" class="pull-left" name="sex" value="жена"><label class="radio-label">Жена</label>
            </div>
            <div class="span5 form-input-container students-fields">
                <label>Висше:</label>
                <input type="radio" class="pull-left" name="type" value="Бакалавър"><label class="radio-label">Бакалавър</label><br>
                <input type="radio" class="pull-left" name="type" value="Магистър"><label class="radio-label">Магистър</label><br>
                <input type="radio" class="pull-left" name="type" value="Докторант"><label class="radio-label">Докторант</label><br>
            </div>
        </div>
        <div class="row-fluid span12 no-left-margin">
            <div class="span5 form-input-container students-fields">
                <label>Курс:</label>
                <input type="radio" class="pull-left" name="grade" value="1"><label style="margin-left:0px;" class="radio-label">1</label>
                <input type="radio" class="pull-left inline-radio" name="grade" value="2"><label class="radio-label"> 2</label>
                <input type="radio" class="pull-left inline-radio" name="grade" value="3"><label class="radio-label"> 3</label>
                <input type="radio" class="pull-left inline-radio" name="grade" value="4"><label class="radio-label"> 4</label>
                <input type="radio" class="pull-left inline-radio" name="grade" value="5"><label class="radio-label"> 5</label>
            </div>
            <div class="span5 form-input-container students-fields">
                <label>Година на започване:</label>
                <select style="color:black;" name="start_year">
                    <?php for ($i=2014; $i > 1950; $i--) { 
                        echo '<option value="' . $i . '">' . $i . 'г.</option>';
                    }?>
                </select>
                <span class="errorloc"></span>
            </div>
        </div>
        <div class="row-fluid span12 no-left-margin">
            <div class="span5 form-input-container">
                <label id="spaciality">Специалност:</label>
                <input type="text" name="speciality">
                <span class="errorloc"></span>
            </div>
            <div class="span5 form-input-container students-fields">
                <label>Година на завършване:</label>
                <select style="color:black;" name="еnd_year">
                    <?php for ($i=2019; $i > 1955; $i--) { 
                        echo '<option value="' . $i . '">' . $i . 'г.</option>';
                    }?>
                </select>
                <span class="errorloc"></span>
            </div>
        </div>
        <div class="row-fluid span12 no-left-margin">
            <input type="submit" id="registerButton" value="Запиши" class="btn nav-buttons pull-right">
        </div>
       
    </form>
</div>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#teacher').on('change', function(){
            if ($(this).prop('checked')) {
                $('.students-fields').fadeOut();
            } else {
                $('.students-fields').fadeIn();
            };
            
        });
    });

</script>
</div>
<?php
$ok = 1;
	if ($_POST){
                if(isset($_POST['pass2']))
                {
                    $name = trim($_POST['username']);
                    $pass1 = trim($_POST['pass1']);
                    $pass2 = trim($_POST['pass2']);
                    $email = trim($_POST['email']);
                    $sex = trim($_POST['sex']);
                    fUTF8::clean($name);
                    fUTF8::clean($pass1);
                    fUTF8::clean($pass2);
                    fUTF8::clean($email);
                    //var_dump($_POST);
                    if($pass1==$pass2 && $pass1!=''){

                            $active_users = fRecordSet::buildFromSQL('User','SELECT users.* FROM users');

                            foreach ($active_users as $user) {
                                    $email_from_db = $user->getEmail();
                                    if ($email_from_db == $email) {
                                            echo "Имейлът вече се използва";
                                            die;
                                    }
                                }
                            foreach ($active_users as $user) {
                                    $name_from_db = $user->getUserName();
                                    if ($name_from_db == $name) {
                                            echo "Потребителското име вече е заето";
                                            die;
                                    }
                                }
                            

                            if (strlen($pass1)<5) {
                                    echo "Паролата трябва да съдържа поне 5 символа!";
                            }
                            $hashedPass = fCryptography::hashPassword($pass1);
                            //set information for new user in database
                            try {
                                $user = new User();
                                $user->setUserName($name);
                                $user->setPassword($hashedPass);
                                $user->setEmail($email);
                                if ($sex == 'мъж') {
                                    $user->setAvatar('images/profile_pictures/defaultMale.png');
                                    $user->setSex('мъж');
                                }
                                else
                                {
                                    $user->setAvatar('images/profile_pictures/defaultFemale.png');
                                    $user->setSex('жена');
                                }

                                $user->setGrade($_POST['grade']);
                                $user->setGradeType($_POST['type']);
                                $user->setStartYear($_POST['start_year']);
                                $user->setEndYear($_POST['еnd_year']);
                                $user->setSpeciality($_POST['speciality']);
                                if ($_POST['teacher'] == 'on') {
                                    $user->setIsTeacher(1);
                                } else {
                                    $user->setIsTeacher(0);
                                }
                                $user->setCreated(new fTimestamp());
                                $user->store();
                            } catch (fExpectedException $e) {
                                //echo $e->printMessage();
                                echo " Потребител с този имейл вече е регистриран!";
                                $ok = 0;
                            }
                    }
                    else
                    {
                            echo "Паролите не съвпадат!!!";
                            $ok = 0;
                    }
                }

        if ($ok) {
           echo '<script type="text/javascript"> alert("Регистрацията беше успешна!"); window.location.replace("index.php");</script>';
        }
	}
?>
<?php
    require_once 'footer.php';
?>
