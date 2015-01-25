<?php
    require_once 'header.php';

?>

<div id="content">
<input type="hidden" id="nav_trigger_input" value="students"/>
<table id="users">
    <thead>
        <tr>
            <th style="width:10%"> Снимка:</th>
            <th> Име:</th>
            <th> Имейл:</th>
            <th> Образование:</th>
            <th> Специалност:</th>
        </tr>
    </thead>
    <tbody id="tb">
    </tbody>
</table>

<?php

$users = fRecordSet::buildFromSQL('User', 'SELECT users.* FROM users');
$lastPage = ceil((count($users)-1)/5);
$div='<span class="hidden">'.$lastPage.'</span>';
echo $div;
?>
<script>
    makePaging("getUsers.php", 5, '#tb');
</script>
<div id="pages">

</div>
</div>
<?php
    require_once 'footer.php';
?>
