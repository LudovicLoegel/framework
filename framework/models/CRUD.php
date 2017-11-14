<?php


function create($bdd, $table){

    $keys = array_keys($_POST);
    $last_key = end($keys);
    $insert="( ";
    $values="( ";
    foreach($_POST as $key => $value){
        if(isset($value)){
            if($key == $last_key){
                $insert .= $key;
                $values .= "'".$value."'";

            }
            else{
                $insert .= $key.", ";
                $values .= "'".$value."', ";

            }
        }
        else{
            $_SESSION['flash']= 'Variable: '.$key.' is NOT set<br/>';
            messageFlash();
            header("Refresh:0");

        }
    }
    $insert .= " )";
    $values .= " )";

    $query = "INSERT INTO ".$table." ".$insert." VALUES ".$values;
    $bdd->query($query);
}

function read($bdd, $table) {

    $result = $bdd->query("SELECT * FROM ".$table);
    $array=array();
    while($add = $result->fetch_assoc()){
        $array2=array();
        foreach ($add as $key => $value) {
            array_push($array2,$value);
        }
        array_push($array,$array2);
    }
    return $array;
}

function update ($bdd, $table){

    $bdd->query("UPDATE ".$table." SET type='".$_POST['usertype']."' WHERE id =".$_POST['id']);
}

function delete ($bdd, $table) {
    $bdd->query("DELETE FROM ".$table." WHERE id=".$_POST['id']);
}