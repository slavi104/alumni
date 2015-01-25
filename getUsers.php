
<?php 
if(isset($_POST['number']) && !empty($_POST['number'])) {
    $number = $_POST['number'];
    $numberTrsOnPage = $_POST['numberTrsOnPage'];
    $countTrs = 0;
    $count = 1;
    require_once "controller.php";
   	try {
   		 $users = Functions::getUsers();
                
            foreach($users as $user) {

                /*if($countTrs >= $numberTrsOnPage){
                    break;
                }*/

                //if($count >= $number){
                    //$user = new User(array("id" => $key+1));
                    echo '<tr>';
                    echo '<td><img style="width:50px;" src="' . $user->getAvatar() . '"></td>';
                    echo '<td><a href="profile.php?id='.$user->getId().'">'.$user->getUserName().'</a></td>';
                    echo '<td>'.$user->getEmail().'</td>';
                    echo '<td>'.$user->getGradeType().'</td>';
                    echo '<td>'.$user->getSpeciality().'</td>';
                    echo '</tr>';
                    //$countTrs++;
                //}
                //$count++;
            }
   	} catch (Exception $e) {
   		echo $e->getMessage();
   	}
}
   
?>