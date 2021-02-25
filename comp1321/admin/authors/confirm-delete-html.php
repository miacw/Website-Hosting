<?php include '../../inc/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8">
        <title>Confirm delete authors</title>
    </head>
    <body>
        <h1>Confirm Delete?</h1>
        <form action = "" method="post">
            <div>
                <p>Delete <?php html($name);?> and all of his jokes?</p><br>
                <input type = "hidden" name="id" value="<?php echo $id; ?>">
                <input type = "submit" name="action" value="Yes">
                <input type = "submit" name="action" value="No">


            </div>

        </form>
    </body>
</html>