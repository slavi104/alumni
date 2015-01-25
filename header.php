<!DOCTYPE html>
<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    //$root = "/newhungry/";
    $root = "/alumni/";
    require_once "controller.php";
    require_once "resources/includes/head_include.php";
    
     if ($_POST) 
     {
         if(isset($_POST['emaillog']))
         {
	           $pass = trim($_POST['pass']);
	           $email = trim($_POST['emaillog']);
	           fUTF8::clean($pass);
	           fUTF8::clean($email);		
            try 
            {
              	$user = new User(array('email'=>$email));
                $user->setIsActive(1);
                $user->store();
              	$passHash = $user -> getPassword();
	         } catch (fExpectedException $e) 
           {
            echo $e->printMessage();
	         }
        	if (fCryptography::checkPasswordHash($pass,$passHash)) {
        		fSession::open();
        		fSession::set('current_user_id', $user->getId());
            fSession::set('current_user_name', $user->getUserName());
            if($user->getId() == 1 || $user->getId() == 17 || $user->getId() == 9)
            {
              fSession::set('is_admin', true);
            }
            else
            {
              fSession::set('is_admin', false);
            }
            $_SESSION['isLogged'] = true;
        		} else {
        			echo 'Error in email or password';
        		}
                 }
        	}
  $lang = "BG";
   if($lang == "EN")
   {
       $home = "Home";
       $articles = "Events";
       $users = "Users";
       $contacts = "Contacts";
       if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
       {
           $profile = fSession::get('current_user_name');
       }
       $register = "Register";
       $login = "Login";
       $logout = "Logout";
       $addArticle = "Add Event";
   }
   else
   {
      $home = "Начало";
       $articles = "Новини";
       $users = "Потребители";
       $contacts = "Контакти";
       if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
       {
           $profile = fSession::get('current_user_name');
       }
       $register = "Регистрация";
       $login = "Вход";
       $logout = "Изход";
       $addArticle = "Добави новина";
   }
?>
<html>
    <head>
        <title>Alumni</title>
        <link type="text/css" rel="stylesheet" href=<?php echo $root."style/style.css"?>>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href=<?php echo $root."style/articles-style.css"?>>
        <link rel="stylesheet" type="text/css" href=<?php echo $root."style/contacts-style.css"?>>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-editable.css">
        <meta charset="utf-8"/>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/jquery-1.10.2.js"?>></script>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/jquery-ui.js"?>></script>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/jquery-ui1.js"?>></script>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/bootstrap.js"?>></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/bootstrap-editable.js"?>></script>
        <script src=<?php echo $root."js/GlobalFunctions.js"?>></script>
        <script src=<?php echo $root."js/ValidationForms.js"?>></script>
        <?php if (function_exists("add_to_head")) { echo add_to_head(); } ?>
    </head>
    <body class="middle">
        <div class="row-fluid span12 big-container">
          <div class="row-fluid span12" id="headerWrapper">
            <div class="span3">
               <img class="span12 row-fluid" style="margin-top: 10px;" src="images/unwe-logo.png"> 
            </div>
            <div class="span6" id="logo">
              <img class="span12 row-fluid" style="height:118px" src="images/logo5.png">
            </div>
            <div class="span3">
              <img class="span12 row-fluid" id="right-logo" style="margin-top: 10px;" src="images/unwe-logo.png"> 
              <div id="login-aside" style='display:none'>
                  <!-- <span> TODO fb</span>
                  <span> TODO google+</span> -->
                  <?php
                      if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
                      {
                          
                      }
                      else
                      {
                          echo '<div class="span12 row-fluid" id="login" style="color:black;">
                                    <form method="POST" class="span12 row-fluid" style="margin-top: 12% !important; width: 272px; text-align: right; ">
                                      <span class="span9">
                                        <div>
                                          <label>Имейл:</label><input type="text" id="emaillog" name="emaillog">
                                        </div>
                                        <div>
                                          <label>Парола:</label><input type="password" id="pass" name="pass">
                                        </div>
                                      </span>
                                      <span class="span3">
                                        <input type="submit" value="Вход">
                                      </span>
                                    </form>
                                </div>';
                      }
                  ?>
                
              </div>
            </div>
          </div>
            <nav class="row-fluid span12" id="menu">
              <ul>
                  <li class="pull-left nav-buttons btn">
                    <div id="search-form">
                      <div id='search_container'>
                        <input type="search" value="" id="search-input" placeholder="Търси..." name='search_text'>
                      </div>
                    </div>
                    <script type="text/javascript">
                    $( document ).ready(function() {

                      function searchFunction() {

                        $('body').css('cursor', 'auto');
                        $('#search-input').prop('disabled', false);

                        //$('#search-input').on('keydown', function(){
                          
                          if ($('#search-input').val().length < 1) {
                            return;
                          };

                          $('#search-input').off();
                          $('body').css('cursor', 'wait');
                          $('#search-input').prop('disabled', true);
                          //console.log($('#search-input').val());

                          $.ajax({
                            type: 'post',
                            url: "search.php",
                            data: {
                                text_search: $('#search-input').val()
                            },
                            dataType: 'html'
                          }).done(function(data){
                            //console.log(data);
                                  if(data != false)
                                  {
                                      $("#wrapper1").empty();
                                      $("#wrapper1").append(data);
                                  }

                                  $('body').css('cursor', 'auto');
                                  $('#search-input').prop('disabled', false);

                                  $(document).off();
                                  $(document).keypress(function(e) {
                                    if(e.which == 13) {
                                        searchFunction();
                                    }
                                  }); 
                                  //$("#pages").addClass("hidden");
                            //searchFunction();
                          });
                          
                          
                        //});
                      }

                      $(document).keypress(function(e) {
                          if(e.which == 13) {
                              searchFunction();
                          }
                      });
                      

                    });
                    </script>
                  </li>
                  <?php 
                      if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
                      {   
                          echo '<li class="nav-buttons btn pull-right"><a href="'.$root.'logout.php">'.$logout.'</a></li>';
                          echo '<li class="nav-buttons btn pull-right"><a href="'.$root.'profile.php"> Профил </a></li>';
                          
                         /* echo '<li class="nav-buttons btn pull-right"><a href="'.$root.'changeProfile.php">Промяна на профила</a></li>';*/
                          
                          
                          
                      }
                      else
                      {
                          echo '<li class="nav-buttons btn pull-right"><a href="'.$root.'registration.php">'.$register.'</a></li>';
                      }
                  ?>
                  <?php if(!isset($_SESSION['isLogged']) || !$_SESSION['isLogged'] == true){ ?>
                  <li class="nav-buttons btn pull-right"><a href='#' data-open='0' id='login-trigger'><?php echo 'Вход'?></a></li>
                  <?php }?>
                   <?php 
                        if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
                        {
                            if (fSession::get('is_admin')) {
                                echo '<li class="nav-buttons btn pull-right"><a href="'.$root.'addEvent.php"> Добави събитие </a></li>';
                                echo '<li class="nav-buttons btn pull-right"><a href="'.$root.'addArticle.php">'.$addArticle.'</a></li>';
                            }
                        }
                    ?>
                  </li>
                  
                  
              </ul>
                
            </nav>
          <script>

          $( document ).ready(function() {
            $( ".nav-buttons" ).mouseover(function() {
              if ($(this).children().last().attr('class') == "subMenu") {
                  $(this).children().last().show();
              };
              
            });
            $( ".nav-buttons" ).mouseout(function() {
              if ($(this).children().last().attr('class') == "subMenu") {
                $(this).children().last().hide();
              }
            });

            $('#login-trigger').on('click', function(e){

              e.preventDefault();

              if ($(this).attr('data-open') == 0) {
                $('#login-aside').show();
                $('#right-logo').hide();
                $(this).css('color', 'black');
                $(this).attr('data-open', 1);
              } else {
                $('#login-aside').hide();
                $('#right-logo').show();
                $(this).css('color', 'white');
                $(this).attr('data-open', 0);
              };
              

            });
          });
          </script>
        </div>
        <!-- Content Sections -->
          <div class="row-fluid span12 big-container">
            <!-- Left Side Vertical Bar -->
            <div class="span4 pull-left left-menu" style="background-color: rgba(126, 14, 38,0.9); margin-bottom:25px;">
              <ul class="nav nav-list">
                <li class="nav-buttons btn"><a data-id="index" id="nav_index" href="index.php">Начало</a></li>
                <li class="nav-buttons btn"><a data-id="news"  id="nav_news" href="news.php">Новини</a></li>
                <?php if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){ ?>                
                  <li class="nav-buttons btn"><a data-id="students" id="nav_students" href="users.php">Студенти</a></li>
                  <li class="nav-buttons btn"><a data-id="teachers" id="nav_teachers" href="teachers.php">Преподаватели</a></li>
                  <li class="nav-buttons btn"><a data-id="events" id="nav_events" href="events.php">Събития</a></li>
                  <li class="nav-buttons btn"><a data-id="calendar" id="nav_calendar" href="calendar.php">Календар</a></li>
                <?php }?>
                <li class="nav-buttons btn"><a data-id="contacts" id="nav_contacts" href="contacts.php">Контакти</a></li>
                <li class="nav-buttons btn"><a data-id="unwe" id="nav_unwe" href="http://www.unwe.bg/bg/">Официален сайт на УНСС</a></li>
                <li class="nav-buttons btn"><a data-id="forum" id="nav_forum" href="http://forum.unwe.bg/">Форум на УНСС</a></li>
              </ul>
            </div>
            <div class="span8 pull-right" id="wrapper1">
        

        
        


        
