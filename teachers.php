<?php
    require_once 'header.php';

?>

<div id="content">
<input type="hidden" id="nav_trigger_input" value="teachers"/>
<table id="users">
    <thead>
        <tr>
            <th style="width:10%"> Снимка:</th>
            <th> Потребителско име:</th>
            <th> Специалност:</th>
        </tr>
    </thead>
    <tbody id="tb">
    </tbody>
</table>

<?php

$users = fRecordSet::buildFromSQL('User', 'SELECT users.* FROM users WHERE is_teacher = 1');
$lastPage = ceil((count($users)-1)/5);
$div='<span class="hidden">'.$lastPage.'</span>';
echo $div;
?>
<script>
    makePaging("getTeachers.php", 5, '#tb');
</script>
<div id="pages">

</div>
</div>
<?php
    require_once 'footer.php';
?>