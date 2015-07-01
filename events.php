<?php
	require_once 'header.php';
	fORMDatabase::attach(new fDatabase('mysql', SQL_DATABASE, SQL_USER, SQL_PASSWD));

	class PhpcEvent extends fActiveRecord{


	}

	class PhpcOccurrence extends fActiveRecord{


	}

	//$allEventsArr = CustomDB::getRecords("SELECT phpc_events.* ,phpc_occurrences.*  FROM phpc_events RIGHT JOIN  phpc_occurrences ON phpc_events.eid = phpc_occurrences.eid");
	$allEventsArr = fRecordSet::buildFromSQL('PhpcEvent', "SELECT phpc_events.*  FROM phpc_events RIGHT JOIN  phpc_occurrences ON phpc_events.eid = phpc_occurrences.eid");
	
	?>
	<div id="content">
		<table style="width:100%; color:#fff; text-align:left;">
			<thead>
				<tr>
					<th>Име</th>
					<th>Начало</th>
					<th>Край</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
					foreach ($allEventsArr as $key => $event) {
						echo '<tr>';
						try {
							$occ = new PhpcOccurrence(array('eid' => $event->getEid()));
							echo '<td><a href="/alumni/calendar.php?action=display_event&oid=' . $occ->getOid() . '">' . $event->getSubject() . '</a></td>';
							echo '<td>' . $occ->getStartTs()->format('Y-m-d g:ia') . '</td>';
							echo '<td>' . $occ->getEndTs()->format('Y-m-d g:ia') . '</td>';
							echo '</tr>';
						} catch (Exception $e) {
							//echo $e->getMessage();
						}
						
					}

					/*for ($i=3; $i < 50; $i++) { 

						try {

							$event = new PhpcEvent();
							$event->setSubject('EVENT ' . $i);
							$event->setDescription(' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i . ' EVENT DESCRIPTION ' . $i);
							$event->setCid(1);
							$event->setOwner(1);
							$event->store();

						} catch (Exception $e) {
							echo $e->getMessage();
						}

						try {

							$occ = new PhpcOccurrence();
							$occ->setEid($event->getEid());
							
							$timestamp = new fTimestamp();
							$startTimestamp = $timestamp->adjust('+' . $i . ' day');
							$endTimestamp = $timestamp->adjust('+' . $i+1 . ' day');
							$occ->setStartTs($startTimestamp);
							$occ->setEndTs($endTimestamp);
							$occ->store();

						} catch (Exception $e) {
							echo $e->getMessage();
						}
					}*/
				?>
				<tr>
					<td></td>
				</tr>
			</tbody>


		</table>
	</div>
	<input type="hidden" id="nav_trigger_input" value="events"/>
<?php 

?>

<?php
	require_once 'footer.php';

?>