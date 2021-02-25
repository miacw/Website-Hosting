<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Recipes</title>
    <body>
    <div class="container">
<table class = "edit-table">
    <th>Recipe Name</th>
    <th>Author</th>
    <th>Category</th>
    <?php foreach ($recipes as $recipe):?>
        <form action ="?deleterecipe" method="post">
    <tr>
        <td><?php html($recipe['recipe-name']); ?></td>
        <td>
            <a href="mailto:<?php html($recipe['email']);?>">
            <?php echo htmlspecialchars($recipe['name'],ENT_QUOTES,'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($recipe['category'],ENT_QUOTES,'UTF-8'); ?></td>        
        <td>
        <input type="hidden" name="id" value="<?php echo $recipe["id"];?>">
        <input type="submit" value="Delete">
        </td>

    </tr>
    </form>
    <?php endforeach; ?>

</table>
    </div>
    <div>
        <button><a href="?addrecipe">Add Recipe</a> </button>
    </div>
    </body>
</head>
</html>