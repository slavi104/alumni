<?php
require_once 'header.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
	else {
     if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
     {
         $id = fSession::get('current_user_id');
     }
}
$user = new User($id);

?>
<div id="content">

    <div id="registrationForm">
  
        <form action="upload_file.php" method="POST" class="row-fluid span12" id="registrationForm" enctype="multipart/form-data">
        
            <input type='hidden' name='is_avatar' value='1' />

            <div class="articlesFull" style="cursor:auto;">
                                    
                <div class="row-fluid span12">
                    <div class="img_articles span5" style="text-align:center;">
                        <img style="max-width:300px; max-height:230px;" src="<?php echo $user->getAvatar(); ?>"/>
                    </div>
                    <div class="span3 form-input-container">
                        <label>Име:</label>
                        <input type="text" id="name" value="<?php echo $user->getUserName()?>" name="username">
                        <span class="errorloc"></span>
                    </div>
                    <div class="span3 form-input-container">
                        <label>Имейл:</label>
                        <input type="text" id="email" value="<?php echo $user->getEmail();?>" name="email">
                        <span class="errorloc"></span>
                    </div>
                    <div class="span3 form-input-container">
                        <label>Парола:</label>
                        <input type="password" id="pass1" name="pass1">
                        <span class="errorloc"></span>
                    </div>
                    <div class="span3 form-input-container">
                        <label>Повтори паролата:</label>
                        <input type="password" id="pass2" name="pass2">
                        <span class="errorloc"></span>
                    </div>
                    <div class="span3 form-input-container">
                        <label for="file">Avatar:</label>
                        <input type="file" name="file" id="file">
                        <!-- <input type="submit" name="submit" value="SAVE"> -->
                    </div>
                </div>
                <div class="row-fluid span12"> 
                    <div class="span5 form-input-container">
                        <label>Пол:</label>
                        <?php if($user->getSex() == 'мъж'){$checkedMale ='checked'; $checkedFemale ='';} else {$checkedMale =''; $checkedFemale ='checked';}?>
                        <input type="radio" class="pull-left" <?php echo $checkedMale; ?> name="sex" value="мъж"><label class="radio-label">Мъж</label><br>
                        <input type="radio" class="pull-left" <?php echo $checkedFemale; ?> name="sex" value="жена"><label class="radio-label">Жена</label>
                    </div>
                    <div class="span5 form-input-container students-fields">
                        <label>Висше:</label>
                        <?php if($user->getGradeType() == 'Бакалавър'){$checked1 ='checked'; $checked2 =''; $checked3 ='';} elseif($user->getGradeType() == 'Магистър') {$checked1 =''; $checked2 ='checked'; $checked3 ='';} else {$checked1 =''; $checked2 =''; $checked3 ='checked';}?>
                        <input type="radio" class="pull-left" <?php echo $checked1; ?> name="type" value="Бакалавър"><label class="radio-label">Бакалавър</label><br>
                        <input type="radio" class="pull-left" <?php echo $checked2; ?> name="type" value="Магистър"><label class="radio-label">Магистър</label><br>
                        <input type="radio" class="pull-left" <?php echo $checked3; ?> name="type" value="Докторант"><label class="radio-label">Докторант</label><br>
                    </div>
                </div>
                <div class="row-fluid span12 students-fields">
                    <div class="span5 form-input-container">
                        <label>Курс:</label>
                         <?php if($user->getGrade() == '1'){$checked1 ='checked'; $checked2 =''; $checked3 =''; $checked4 =''; $checked5 ='';} elseif($user->getGrade() == '2') {$checked1 =''; $checked2 ='checked'; $checked3 =''; $checked4 =''; $checked5 ='';} elseif($user->getGrade() == '3') {$checked1 =''; $checked2 =''; $checked3 ='checked'; $checked4 =''; $checked5 ='';} elseif($user->getGrade() == '4') {$checked1 =''; $checked2 =''; $checked3 =''; $checked4 ='checked'; $checked5 ='';} else {$checked1 =''; $checked2 =''; $checked3 =''; $checked4 =''; $checked5 ='checked';}?>
                        <input type="radio" <?php echo $checked1; ?> class="pull-left" name="grade" value="1"><label style="margin-left:0px;" class="radio-label">1</label>
                        <input type="radio" <?php echo $checked2; ?> class="pull-left inline-radio" name="grade" value="2"><label class="radio-label"> 2</label>
                        <input type="radio" <?php echo $checked3; ?> class="pull-left inline-radio" name="grade" value="3"><label class="radio-label"> 3</label>
                        <input type="radio" <?php echo $checked4; ?> class="pull-left inline-radio" name="grade" value="4"><label class="radio-label"> 4</label>
                        <input type="radio" <?php echo $checked5; ?> class="pull-left inline-radio" name="grade" value="5"><label class="radio-label"> 5</label>
                    </div>
                    <div class="span5 form-input-container">
                        <label>Година на започване:</label>
                        <select style="color:black;" value="<?php echo $user->getStartYear(); ?>" name="start_year">
                            <?php for ($i=1950; $i < 2015; $i++) { 

                                if ($user->getStartYear() == $i) {
                                    echo '<option selected value="' . $i . '">' . $i . 'г.</option>';
                                } else {
                                    echo '<option value="' . $i . '">' . $i . 'г.</option>';
                                }
                            }?>
                        </select>
                        <span class="errorloc"></span>
                    </div>
                </div>
                <div class="row-fluid span12">
                    <div class="span5 form-input-container">
                        <label>Специалност:</label>
                        <input type="text" value="<?php echo $user->getSpeciality(); ?>" name="speciality">
                        <span class="errorloc"></span>
                    </div>
                    <div class="span5 form-input-container students-fields">
                        <label>Година на завършване:</label>
                        <select style="color:black;" name="еnd_year">
                            <?php for ($i=1955; $i < 2020; $i++) { 
                                if ($user->getEndYear() == $i) {
                                    echo '<option selected value="' . $i . '">' . $i . 'г.</option>';
                                } else {
                                    echo '<option value="' . $i . '">' . $i . 'г.</option>';
                                }
                            }?>
                        </select>
                        <span class="errorloc"></span>
                    </div>
                </div>
                <div class="row-fluid span12 no-left-margin">
                    <input type="submit" id="registerButton" value="Запиши" class="btn nav-buttons pull-right edit-profile">
                </div>
                <!-- <div>
                    <div class="article-title" style="height: 230px;">
                       <h2 class="h2-contact">User Name: <input id="userName-input" value="<?php echo $user->getUserName()?>" name='username'/></h2>
                       <h2 class="h2-contact">Email: <?php echo $user->getEmail();?></h2>
                        <label for="file">Avatar:</label>
                        <input type="file" name="file" id="file">
                        <input type="submit" name="submit" value="SAVE">
                    </div>
                </div> -->
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
$( document ).ready(function() {
    if (<?php echo $user->getIsTeacher(); ?>) {
        $('.students-fields').fadeOut('fast');
    };
});
</script>


<?php
    require_once 'footer.php';
?>