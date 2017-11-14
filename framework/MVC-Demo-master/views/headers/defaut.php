<DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="views/css/bootstrap.min.css">
  </head>
  <body style='text-align:center'>
    <header>
    <h1><?php echo $project_name ?></h1>
        <h6>Exemple d'architecture MVC </h6><br>
        <h4><a href="/<?php echo $project_name ?>/index.php">home</a> :
            <a href="/<?php echo $project_name ?>/index.php?get=">search</a> :
            <a href="/<?php echo $project_name ?>/index.php?set=">add</a>
        </h4><br>
    </header>
    