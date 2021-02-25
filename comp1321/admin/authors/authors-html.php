<?php 
    //include '../../edit.php';
    include '../../inc/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Manage Authors</title>
    </head>
    <body>
        <h1>Manage Authors</h1>
        <p><a href="?add">Add new author</a></p>

        <table>
            <?php foreach ($authors as $author):?>
            <form action="" method="post">
                <tr>
                    <td> <?php html($author['name']);?> </td>
                    <input type="hidden" name="id" value="<?php echo $author['author_id'];?>">
                    <td> <input type="submit" name="action" value="Edit"></td>
                    <td> <input type="submit" name="action" value="Delete"></td>

                </tr>

            </form>
            <?php endforeach; ?>
        </table>
        <p><a href="..">Return to CMS home</a></p>
    </body>
    </html>