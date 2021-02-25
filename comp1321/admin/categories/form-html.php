<?php include '../../inc/functions.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="utf-8">
        <title><?php html($pageTitle);?></title>
    </head>
    <body>
        <h1><?php html($pageTitle);?></h1>
        <form action ="?<?php html($action);?>" method="post">
        <label for="name">Name: <input type="text" name="name" id="name" value="<?php html($name);?>"></label><br>
        <input type="hidden" name="id" value="<?php html($id);?>">
        <input type="submit" value="<?php html($button);?>">
    </form>
    </body>
    </html>