<?php 
    include '../../inc/functions.php';
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset ="utf-8">
        <title>Manage Recipes</title>
    </head>
    <body>
        <h1>Manage Recipes</h1>

        <div class="manage-wrapper">
        <p class="add-link"><a href="?add">Add new recipe</a></p>


        <form action ="" method ="get">
            <p>View recipes satisfying the following criteria:</p>
            <div class = "select">
                <label for="author">By author:</label>
                <select name="author" id="author">
                    <option value="">Any author</option>
                    <?php foreach ($authors as $author): ?>
                        <option value ="<?php html($author['author_id']);?>"> <?php html($author['author_name']);?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
             <div class="select">
                <label for="category">By category:</label>
                <select name="category" id="category">
                    <option value="">Any category</option>
                    <?php foreach ($categories as $category):?>
                        <option value = <?php html($category['category_id']);?>> <?php html($category['category_name']);?></option>
                    <?php endforeach; ?>
                 </select>
            </div>

            <div class="select">
                <label for="text">Containing text:</label>
                <input type="text" name="text" id="text">
            </div>
            <div>
                <input type="submit" name="action" value="search">
            </div>
        </form>
                    </div>


        <p><a href="..">Return to CMS</a></p>
    </body>
</html>