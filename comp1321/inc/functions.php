<?php

function full_catalog_array(){ //selects all recipes
    include("admin/inc/db.php");

    try {
        $results = $pdo->query("SELECT category, recipe_name, author, img, ingredients FROM recipes INNER JOIN category, recipecategory WHERE recipes.recipeID = recipecategory.recipeid AND category.categoryID = recipecategory.categoryid");
    }catch(Exception $e){
        echo "Unable to retrieve results";
    }
    
  
    $catalog_array = ($results->fetchAll(PDO::FETCH_ASSOC));
    return $catalog_array;
}


function get_item_html($id,$item){
    $output = "<li><a href='details.php?id=$id'><img src='"
            .$item["img"]."' alt='"
            .$item["recipe_name"]."' />" 
            ."<p>View Details</p>" 
            ."</a></li>";
    return $output;
}


function array_category($catalog, $category){
    if ($category==null){ //checks if category is null
        return array_keys($catalog); //return corresponding keys for item

    };
    $output = array();
    foreach($catalog as $id => $item){
        if(strtolower($category) == strtolower($item["category"])){
            $output[] = $id;

        }
    }
    return $output;
}



function html($text){
    echo $out = htmlspecialchars($text,ENT_QUOTES, 'UTF-8');
}