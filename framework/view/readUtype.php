<?php
$read = read($bdd, 'user_type');
echo
"<form method='post' id='typeform'>";
echo
"<select name='type'>";

foreach($read as $rs){
   echo
   "<option value='".$rs[0]. "+".$rs[1]."'>".$rs[1];

}
echo
"</select>
<input type='submit' name='action' onclick=\"submitForm('index.php?utype=update')\" value='Update'/>
<input type='submit' name='action' onclick=\"submitForm('index.php?utype=delete')\" value='Delete'/>
</form>";

?>
<form method="post" action="index.php?utype=create">
    <button type="submit">Ajouter</button>
</form>
