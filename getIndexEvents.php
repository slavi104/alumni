<?php
	require_once 'controller.php';
	fORMDatabase::attach(new fDatabase('mysql', 'calendar', 'slavi', 'qwerty'));

	class PhpcEvent extends fActiveRecord{


	}

	class PhpcOccurrence extends fActiveRecord{


	}

	//$allEventsArr = CustomDB::getRecords("SELECT phpc_events.* ,phpc_occurrences.*  FROM phpc_events RIGHT JOIN  phpc_occurrences ON phpc_events.eid = phpc_occurrences.eid");
/*	function getLastTwoEvents()
	{*/
	$allEventsArr = fRecordSet::buildFromSQL('PhpcEvent', "SELECT phpc_events.*  FROM phpc_events RIGHT JOIN  phpc_occurrences ON phpc_events.eid = phpc_occurrences.eid");
	$cnt = 0;
	$tmp = '';
	$now = new fTimestamp();
	foreach ($allEventsArr as $event) {
		

		if ($cnt < 3) {
			try {
				$occ = new PhpcOccurrence(array('eid' => $event->getEid()));

				if ($occ->getStartTs()->lt($now)) {
					continue;
				}
				$cnt++;

			    $tmp .= '<br>' . $occ->getStartTs()->format('Y-m-d g:ia') . ' - <a href="/alumni/calendar.php?action=display_event&oid=' . $occ->getOid() . '">'. $event->getSubject() .'</a><br>';
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			
		}
		
		# code...
	}


		echo $tmp;
/*	}*/
	
	
?>