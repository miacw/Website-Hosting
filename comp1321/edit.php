<?php
include("admin/inc/db.php");
include("inc/functions.php");
include("header.php");










if(isset($_GET['addrecipe'])){
     // CREATE AUTHORS ARRAY
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
    include("addform-html.php");
    exit();
}


if(isset($_GET['add'])){
    include ("admin/inc/db.php");
        
        // $authorIDtest = $_POST['author'];
        // $recipeTexttest = $_POST['recipeText'];

        try{
            $sql = "INSERT INTO recipes SET
            recipe_name = :recipeText,
            author_id = :author_id";
            
            
          
     
            $s = $pdo->prepare($sql);
            $s->bindValue(':recipeText', $_POST['recipeText']);
            $s->bindValue(':author_id', $_POST['author']);
             //sets user input value to the POST name
            $s->execute();

         }catch (Exception $e){
             echo $e;
             $error = "Cannot add recipe";
             include("admin/inc/error.php");
             exit();
     
         }
         
    
    

}



if(isset($_GET['deleterecipe'])){
    include("admin/inc/db.php");
}try
{
    $sql = 'DELETE FROM recipes WHERE
    recipeID = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST["id"]);
    $s->execute();
}catch(PDOException $e){
    $error = "Could not delete recipe";
    include("admin/inc/error.php");
    echo $e;
    exit();
}



try{
    $result = $pdo->query('SELECT category, recipe_name, recipes.recipeID, name, email FROM recipes INNER JOIN authors, category, recipecategory WHERE recipes.recipeID = recipecategory.recipeid AND category.categoryID = recipecategory.categoryid AND recipes.author_id = authors.authorID');
}catch (Exception $e){
    $error = "Unable to retrieve results";
    echo $e;
    include("admin/inc/error.php");
    exit;
}
 foreach($result as $row){
     $recipes[] = array(
         'id'=> $row['recipeID'],
         'recipe-name'=> $row['recipe_name'], //'recipe-name' is key which holds the value from the database
         'category'=>$row['category'],
         'name'=>$row['name'],
         'email'=>$row['email']
     );
 }







?>




<?php include 'recipeform-html.php' ?>

