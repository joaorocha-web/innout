<?php
$errors = [];

if(isset($_SESSION['messages'])){
    $message = $_SESSION['messages'];
    unset($_SESSION['messages']);
}elseif ($exception){
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()

    ];

    if(get_class($exception) === 'ValidationException'){
        $errors = $exception->getErrors();
    }
}


$alertype = '';
if($message['type'] === 'error'){
    $alertype = 'danger';
}else{
    $alertype = 'success';
}
?>

<?php if($message) : ?>
<div role="alert" 
    class="my-3 alert alert-<?= $alertype?>" >
    <?= $message['message'] ?>
</div>
<?php endif ?>