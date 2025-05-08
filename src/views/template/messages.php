<?php

if ($exception){
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()

    ];
}
?>

<?php if($message) : ?>
<div role="alert" 
    class="my-3 alert alert-<?php $message['type'] === 'error' ? 'danger' : 'success'?>" >
    <?= $message['message'] ?>
</div>
<?php endif ?>