<?php
	require_once 'header.php';
?>
	<div id="content">
		<input type="hidden" id="nav_trigger_input" value="contacts"/>
        <form id='contacts_form' method='post' action='SendEmail.php' accept-charset='UTF-8'>
			<div id='errorloc'>
			</div>
			<div>
				
				<div class="contacts_inputs">
					<label name='first_name' for='first_name' id="firstName">Име:</label>
					<input type='text' name='name' id="name" class="input_styles" size='20'/>
				</div>
				<div class="contacts_inputs">
					<label name='last_name' for='last_name' id="lastName">Фамилия:</label>
					<input type='text' name='last_name' class="input_styles" size='20'/>
				</div>
				<div>
					<label style="float:left; margin-left:10px;">Въпрос/Препоръка:</label>
				</div>
				<div id='Multiline_container'>
					<textarea name='text' id='text'></textarea>
				</div>
				<div id='conatcts_image' style="float: left; width: 205px; display: inline-block;">
					<label>Въведете кода,<br/> показан отдясно:</label>
					<input id="input_captcha" type="text" name="captcha_code" size="10" maxlength="6" />               
					<img id="refresh" src="images/refresh-button-img.png" width="30px" height="30px" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false;"/>
				</div>
				<div id='contacts_image_input' style="width:484px;">
					<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
					<span style="width: 50px; float: right; margin-top: 48px;"><input type="submit" class="nav-buttons btn" name="submit" value="Изпрати" onclick="return ErrorChecker();"/></span>
				</div>
				<div class="clear"></div>
				
			</div>
      </form>
	  </div>
      <script type='text/javascript' src="js/Contacts_Error_handler.js" charset="UTF-8"></script>
<?php
	require_once 'footer.php';
?>
