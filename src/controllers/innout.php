<?php
session_start();
requireValidSession();


$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('y-m-d'));

try{
    $currentTime = strftime('%H:%M:%S' , time());

    if($_POST['forcedTime']){
        $currentTime = $_POST['forcedTime'];
    }
    $records->innout($currentTime);
    addSuccessMessage('Ponto inserido com sucesso!');
    
}catch(AppException $e){
    addErrorMessage($e->getMessage());
}
header('Location: day_records.php');
