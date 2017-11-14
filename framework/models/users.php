<?php

function getAllUsers ($bdd){
    $result = $bdd->query("SELECT firstname,lastname FROM users");

    return $result->fetch_assoc();
}
function create($bdd, $table){
    foreach($_POST as $key => $value){

        if(isset($value)){
            echo 'Variable: '.$key.' is set to '.$value.'<br/>';
        }else{
            echo 'Variable: '.$key.' is NOT set<br/>';
        }

    }
}
