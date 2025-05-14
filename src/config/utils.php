<?php

function addSuccessMessage($msg){
    $_SESSION['messages'] = [
        'type' => 'success',
        'message' => $msg
    ];
}

function addErrorMessage($msg){
    $_SESSION['messages'] = [
        'type' => 'error',
        'message' => $msg
    ];
}
