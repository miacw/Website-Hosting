<?php 

include '../inc/db.php';?>

<link rel="stylesheet" href="../../css/stylesheet.css" type="text/css">

 <?php
//build search query

if(isset($_GET['action']) and $_GET['action'] == 'search'){
    include '../inc/db.php';

    $select = 'SELECT recipes.recipeID, recipe_name';
    $from = ' FROM recipes';
    $where = ' WHERE TRUE';
    $placeholders = array();


    if ($_GET['author'] != ""){ //if the select value for author is set in searchform-html.php
        $where .= " AND author_id = :author_id";
        $placeholders[':author_id'] = $_GET['author']; //gets the value from <select> and assigns to placeholder index
    }
    
    if ($_GET['category'] != ""){
        $from .= " INNER JOIN recipecategory on recipes.recipeID = recipecategory.recipeid"; // 'recipeid' is from recipecategory table and 'rcipeID is from recipe table'
        $where .= " AND categoryID = :category_id";
        $placeholders[':category_id'] = $_GET['category'];
    
    }
    
    if($_GET['text'] != ""){
        $where .= " AND recipe_name LIKE :recipetext";
        $placeholders[':recipetext'] = "%" . $_GET['text'] . "%";
    }
    
    
    try{
        $sql = $select . $from . $where;
        $s = $pdo->prepare($sql);
        $s->execute($placeholders);
    }catch(PDOException $e){
        $error = "Error fetching recipes";
        echo $e;
        include '../inc/error.php';
        exit();
    }
    
    foreach ($s as $row){
        $recipes[] = array(
            'id'=> $row['recipeID'],
            'text'=> $row['recipe_name']
        );
    }
    
    include 'recipes-html.php';
    exit();
}





// select & build authors array
try{
    $result = $pdo->query('SELECT authorID, name FROM authors');
}catch(PDOException $e){
    $error = "Error retrieving authors from database";
    include '../inc/error.php';
    exit();
}

foreach($result as $row){
    $authors[]= array(
        'author_id'=> $row['authorID'], //assigns the column names to variables 'id' and 'name'
        'author_name'=> $row['name']
    );
}


//build categories array

try{
    $result = $pdo->query('SELECT categoryID, category FROM category');
}catch(PDOException $e){
    $error = "Error retrieving categories from database";
    include '../inc/error.php';
    exit();
}

foreach($result as $row){
    $categories[] = array(
        'category_id' => $row['categoryID'],
        'category_name'=> $row['category']

    );
}

include 'searchform-html.php';




















?>