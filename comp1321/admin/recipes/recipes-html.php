<?php include_once '../../inc/functions.php'; ?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <title>Manage Recipes: Search Results</title>
    </head>
    <body>
        <h1>Search results</h1>
        <?php if(isset($recipes));?>
        <table>
            <tr><th>Recipe Name</th><th>Options</th></tr>
            <?php foreach ($recipes as $recipe):?>
                <tr>
                    <td><?php html($recipe['text'])?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php //endif; ?>
        <p><a href="..">Return to CMS</a></p>
    </body>
</html>