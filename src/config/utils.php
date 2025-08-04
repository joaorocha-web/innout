<?php

function addErrorMsg($msg){
     $_SESSION['message'] = [
        'type' => 'error',
        'message' => $msg
     ];
}

function addSuccessMsg($msg){
     $_SESSION['message'] = [
        'type' => 'success',
        'message' => $msg
     ];
}