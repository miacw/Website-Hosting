<?php 

if(isset($_GET['add'])){
    $pageTitle = "New Category";
    $action = "addform";
    $name = "";
    $id = "";
    $button = "Add Category";

    include 'form-html.php';
    exit();
}

if(isset($_GET['addform'])){
    include '../inc/db.php';
    try{
        $sql = "INSERT INTO category SET category = :name";
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->execute();
    }catch(PDOException $e){
        $error = "Error adding new category.";
        include '../inc/error.php';
        exit();
    }
    header('Location: .');
    exit();
}


// EDIT CATEGORY CODE

if(isset($_POST['action']) and ($_POST['action'] == 'Edit')){
    include '../inc/db.php';

    try{
        $sql = "SELECT categoryID, category FROM category WHERE categoryID = :category_id";
        $s = $pdo->prepare($sql);
        $s-> bindValue(':category_id', $_POST['id']);
        $s-> execute();
    }catch(PDOException $e){
        $error = "Cannot edit this category";
        include '../inc/error.php';
        exit();
    }

    $row = $s->fetch(); //fetches one row from database

    $pageTitle = "Edit Category";
    $action ="editform";
    $name = $row['category'];
    $id = $row['categoryID']; //column names from database row
    $button = "Update category";

    include 'form-html.php';
    exit();

}


if(isset($_GET['editform'])){
    include '../inc/db.php';
    try{
        $sql = 'UPDATE category SET
        category = :name
        WHERE categoryID = :id';

        $s = $pdo->prepare($sql);
        $s->bindValue(':id',$_POST['id']); //bind the name and value pairs to $s variable (found in the html form section)
        $s->bindValue(':name',$_POST['name']); //$_POST['name'] is the "name" part of the pair && :name denotes the value of the pair
        $s->execute();
    }catch(PDOException $e){
        $error = "Error updating submitted category.";
        echo $e;
        include '../inc/error.php';
        exit();
    }
    header('Location: .');
    exit();
}



// DELETE CATEGORY CODE

if(isset($_POST['action']) and $_POST['action'] == 'Delete'){
    include '../inc/db.php';

    try{
        $sql = 'DELETE FROM category WHERE categoryID = :category_id';        // :category_id is found in the categories-html file as a hidden form input
        $s = $pdo->prepare($sql);
        $s->bindValue(':category_id', $_POST['id']);
        $s->execute();
    }
    catch(PDOException $e){
        $error = "Error fetching category from database";
        echo $e;
        include '../inc/error.php';
        exit();
    }
    
   /*  $row = $s->fetch();

        $name = $row['cate'];
        $id = $row['authorID'];
        include 'confirm-delete-html.php';
        exit();
        */

    }









include '../inc/db.php';

try{
    $result = $pdo->query('SELECT categoryID, category FROM category');

}catch(PDOException $e){
    $error = "There has been an error fetching the categories from the database";
    include '../inc/error.php';
    exit();
}

foreach ($result as $row){ //puts results from query into array with variable values
    $categories[] = array(
        'category_id'=>$row['categoryID'],
        'name'=>$row['category']
    );
}
include 'categories-html.php';