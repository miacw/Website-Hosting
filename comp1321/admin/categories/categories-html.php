<?php 
    //include '../../edit.php';
    include '../../inc/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Manage Categories</title>
    </head>
    <body>
        <h1>Manage Categories</h1>
        <p><a href="?add">Add new category</a></p>

        <table>
            <?php foreach ($categories as $category):?>
            <form action="" method="post">
                <tr>
                    <td> <?php html($category['name']);?> </td>
                    <input type="hidden" name="id" value="<?php echo $category['category_id'];?>">
                    <td> <input type="submit" name="action" value="Edit"></td>
                    <td> <input type="submit" name="action" value="Delete"></td>

                </tr>

            </form>
            <?php endforeach; ?>
        </table>
        <p><a href="..">Return to CMS home</a></p>
    </body>
    </html>