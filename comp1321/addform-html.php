<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
</head>
<body>
    <form action="?add" method="post"> <?php // "?" tells the form to get sent back to the place that calls is (ie: edit.php)?>
        
            <div>
                <label for="author">By author:</label>
               
                <select name="author" id="author" >
                    <option value="">Any author</option>
                    
                    <?php foreach ($authors as $author): ?>
                        <option value ="<?php html($author['author_id']);?>"> <?php html($author['author_name']);?> 
                        </option>
                        
                        
                   
                        
                        
                        <?php endforeach; ?>
                    
                </select>

                
                
               
               
            </div>
            
          
            <div>
                <label for="category">By category:</label>
                <select name="category" id="category">
                    <option value="">Any category</option>
                    <?php foreach ($categories as $category):?>
                        <option value = <?php html($category['category_id']);?>> <?php html($category['category_name']);?></option>
                    <?php endforeach; ?>
                 </select>
            </div>
           
            <div>
                <label for="recipe">Type the name of the recipe here:</label><br>
                <input type = "text" name = "recipeText" id="recipeText" value="">
                
            </div>

            <input type = "submit" value="Add">

        
        
        <!-- <div>
            <label for="recipes">Type the recipe name here:</label><br>
            <textarea class="text-area" name="recipe_name" rows="3" cols="60"></textarea><br>
            <label for="authors">Type the author name here:</label><br>
            <textarea class="text-area" name="author" rows="2" cols="50"></textarea>
        </div>
        <div>
            <input type="submit" value="Add">
        </div> -->

    </form>
    
</body>
</html>