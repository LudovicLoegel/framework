<form action="index.php?users=create" method="POST">
    Nom:<br> <input type="text" name="nom" placeholder="Votre nom"><br>
    Prenom:<br> <input type="text" name="prenom" placeholder="Votre prenom"><br>
    Email:<br> <input type="text" name="email" placeholder="Votre adresse mail"><br>
    Login:<br> <input type="text" name="login" placeholder="Votre login"><br>
    Password:<br> <input type="text" name="password" placeholder="Votre mot de passe"><br>
    Date de Naissance:<br> <input type="text" name="Date_naissance" placeholder="Votre date de naissance"><br>
    <?php
    $read = read($bdd, 'user_type');
        echo "<select multiple name='type'>";
        foreach($read as $rs){
            echo "<option value='".$rs[0]. "+".$rs[1]."'>".$rs[1];
        }
        echo "</select>";
    ?>
    <button type="submit">Submit</button>
</form>
<a href="index.php?users=menu">Retour</a>
