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

    <div class="articlesFull" style="cursor:auto;">
                                    
        <div class="img_articles" style="float:left">
            <img style="width:300px;" src="<?php echo $user->getAvatar(); ?>"/>
        </div>
        
        <div>
            <div class="article-title" style="height: 230px;">
               <h2 class="h2-contact"><?php echo $user->getUserName();?></h2>
               <h2 class="h2-contact">Имейл: <?php echo $user->getEmail();?></h2>
               <h2 class="h2-contact">Пол: <?php echo $user->getSex();?></h2>
               <?php if ($user->getIsTeacher() == '0') {?>
                  <h2 class="h2-contact">Образование: <?php echo $user->getGradeType();?></h2>
                  <h2 class="h2-contact">Курс: <?php echo $user->getGrade();?></h2>
               <?php }?>
               
               <h2 class="h2-contact">Специалност: <?php echo $user->getSpeciality();?></h2>
               <?php if ($user->getIsTeacher() == '0') {?>
                 <h2 class="h2-contact">Година на започване: <?php echo $user->getStartYear();?></h2>
                 <h2 class="h2-contact">Година на завършване: <?php echo $user->getEndYear();?></h2>
               <?php }?>
               <br>
                <?php
                    if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true && $id == fSession::get('current_user_id'))
                     {
                         echo '<a id="changeProfile" href="changeProfile.php">Редакция</a>';
                     }
                ?>
                
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php';
?>