<?php
    var_dump($_POST);

    if(!isset($_POST)){
        die(header("Location: form.html"));
    }

    $required = array("name","number","size",);

    foreach($required as $req){
        if (!isset($_POST[$req]) || empty($_POST[$req])){
            die(header("Location: form.html?error=true"));
        }
    }
?>