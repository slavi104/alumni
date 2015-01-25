<?php
    require_once 'header.php';
?>
<div id="content">

	<form action="/alumni/libs/php-calendar-2.0.8/index.php" id="addEventForm" method="POST">
		<div>
			<input type="hidden" name="phpc_token" value="4y3Ep_mQCCaYIJDng1M7kvnXgivWI0FhoqtK8KRRnX0" id="phpc_token">
			<input type="hidden" name="action" value="event_form" id="action">
			<input type="hidden" name="submit_form" value="submit_form" id="submit_form">
		</div>
		<table class="form-part form-group form">
		<tbody>
		<tr class="form-part form-question form-atomic-question form-free-question">
			<th>
				<label class="white_label">Тема</label>
			</th>
			<td>
				<input name="subject" id="subject" type="text" maxlength="50" size="50">
			</td>
		</tr>
		<tr class="form-part form-question form-atomic-question form-long-free-question">
			<th>
				<label class="white_label">Описание</label>
			</th>
			<td>
				<div class="form-textarea">
					<textarea rows="8" name="description" cols="80"></textarea>
				</div>
			</td>
		</tr>
		<tr class=" phpc-when">
			<th>
				<label class="white_label">Кога</label>
			</th>
			<td>
				<table>
				<tbody>
				<tr class="form-part form-question form-atomic-question form-date-time-question">
					<th>
						<label class="white_label">От</label>
					</th>
					<td>
						<label class="white_label margin-left-label">Date (DD-MM-YYYY): </label><input type="text" class="form-date hasDatepicker" name="start-date" id="start-date" value="9-8-2014">
						
						 <label class="white_label">Време: </label><input type="text" class="form-time hasTimepicker" name="start-time" id="start-time" value="17:00">
						
					</td>
				</tr>
				<tr class="form-part form-question form-atomic-question form-date-time-question">
					<th>
						<label class="white_label">До</label>
					</th>
					<td>
						<label class="white_label margin-left-label">Date (DD-MM-YYYY): </label><input type="text" class="form-date" name="end-date" id="end-date" value="9-8-2014">
						
						 <label class="white_label">Време: </label><input type="text" class="form-time" name="end-time" id="end-time" value="18:00">
						
					</td>
				</tr>
				<tr class="form-part form-question form-dropdown-question">
					<th>
						<label class="white_label">Времеви тип</label>
					</th>
					<td>
						<select id="time-type" name="time-type" class="form-select">
							<option value="normal">Нормален</option>
							<option value="full">Цял Ден</option>
							<option value="tba">Да бъде обявено</option>
						</select>
					</td>
				</tr>
				<tr class="form-part form-question form-dropdown-question">
					<th>
						<label class="white_label">Повторения</label>
					</th>
					<td>
						<p class="form-question-description">
							<select id="repeats" name="repeats" class="form-select">
								<option value="never">Никога</option>
								<option value="daily">Дневно</option>
								<option value="weekly">Седмично</option>
								<option value="monthly">Месечно</option>
								<option value="yearly">Годишно</option>
							</select>
						</p>
						<table id="repeats-daily" style="display: none;">
						<tbody>
						<tr class="form-part form-question form-dropdown-question">
							<th>
								<label class="white_label">Всеки</label>
							</th>
							<td>
								<p class="form-question-description">
									<label class="white_label">Колко дни да се повтори?</label>
								</p>
								<select id="every-day" name="every-day" class="form-select">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
								</select>
							</td>
						</tr>
						<tr class="form-part form-question form-atomic-question form-date-question">
							<th>
								<label class="white_label">Докато</label>
							</th>
							<td>
								<div class="form-part form-question form-atomic-question form-date-question">
									<input type="text" class="form-date hasDatepicker" name="daily-until-date" id="daily-until-date" value="9-8-2014">
									<script type="text/javascript">$('#daily-until-date').datepicker({dateFormat: "dd-mm-yy", firstDay: 1 });</script>
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table id="repeats-weekly" style="display: none;">
						<tbody>
						<tr class="form-part form-question form-dropdown-question">
							<th>
								<label class="white_label">Всеки</label>
							</th>
							<td>
								<p class="form-question-description">
									<label class="white_label">Колко седмици да се повтори?</label>
								</p>
								<select id="every-week" name="every-week" class="form-select">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
								</select>
							</td>
						</tr>
						<tr class="form-part form-question form-atomic-question form-date-question">
							<th>
								<label class="white_label">Докато</label>
							</th>
							<td>
								<div class="form-part form-question form-atomic-question form-date-question">
									<input type="text" class="form-date hasDatepicker" name="weekly-until-date" id="weekly-until-date" value="9-8-2014">
									<script type="text/javascript">$('#weekly-until-date').datepicker({dateFormat: "dd-mm-yy", firstDay: 1 });</script>
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table id="repeats-monthly" style="display: none;">
						<tbody>
						<tr class="form-part form-question form-dropdown-question">
							<th>
								<label class="white_label">Всеки</label>
							</th>
							<td>
								<p class="form-question-description">
									<label class="white_label">Колко месеци да се повтори?</label>
								</p>
								<select id="every-month" name="every-month" class="form-select">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
								</select>
							</td>
						</tr>
						<tr class="form-part form-question form-atomic-question form-date-question">
							<th>
								<label class="white_label">Докато</label>
							</th>
							<td>
								<div class="form-part form-question form-atomic-question form-date-question">
									<input type="text" class="form-date hasDatepicker" name="monthly-until-date" id="monthly-until-date" value="9-8-2014">
									<script type="text/javascript">$('#monthly-until-date').datepicker({dateFormat: "dd-mm-yy", firstDay: 1 });</script>
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table id="repeats-yearly" style="display: none;">
						<tbody>
						<tr class="form-part form-question form-dropdown-question">
							<th>
								<label class="white_label">Всеки</label>
							</th>
							<td>
								<p class="form-question-description">
									<label class="white_label">Колко години да се повтори?</label>
								</p>
								<select id="every-year" name="every-year" class="form-select">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
								</select>
							</td>
						</tr>
						<tr class="form-part form-question form-atomic-question form-date-question">
							<th>
								<label class="white_label">Докато</label>
							</th>
							<td>
								<div class="form-part form-question form-atomic-question form-date-question">
									<input type="text" class="form-date hasDatepicker" name="yearly-until-date" id="yearly-until-date" value="9-8-2014">
									<script type="text/javascript">$('#yearly-until-date').datepicker({dateFormat: "dd-mm-yy", firstDay: 1 });</script>
								</div>
							</td>
						</tr>
						</tbody>
						</table>
					</td>
				</tr>
				</tbody>
				</table>
			</td>
		</tr>
		<tr class="form-part form-question form-atomic-question form-checkbox-question">
			<td colspan="2">
				<div>
					<input type="checkbox" name="readonly" id="readonly" value="1" class="form-checkbox">
					<label for="readonly" class="form-question-description"><label class="white_label">Само за четене</label></label>
				</div>
			</td>
		</tr>
		<tr class="form-part form-question form-atomic-question form-submit">
			<td colspan="2">
				<div class="form-part form-question form-atomic-question form-submit">
					<input type="submit" id="submit_event" value="Добави събитие">
				</div>
			</td>
		</tr>
		</tbody>
		</table>
	</form>
</div>
<script type="text/javascript">
$(document).ready(function() {

	$('#submit_event').on('click', function(e){
		e.preventDefault();
		$('body').off('click');
		$('body').css('cursor', 'progress');
		$.ajax({
		    type: 'POST',
		    url: "/alumni/libs/php-calendar-2.0.8/index.php",
		    data: $('#addEventForm').serialize(),
		    dataType: 'html'
		  }).done(function(data){
		
		  	$('body').css('cursor', 'auto');
		  	window.location.replace('events.php');

		  });

	});
});

  

</script>

<?php
    require_once 'footer.php';
?>