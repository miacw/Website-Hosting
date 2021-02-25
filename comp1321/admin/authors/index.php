<?php 

if(isset($_GET['add'])){

    $pageTitle = "New Author";
    $action = "addform";
    $name = "";
    $email = "";
    $id = "";
    $button = "Add Author";

    include 'form-html.php';
    exit();

}

if(isset($_GET['addform'])){
    include '../inc/db.php';
    try{
        $sql = "INSERT INTO authors SET name = :name, email = :email";
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':email', $_POST['email']);
        $s->execute();
    }catch(PDOException $e){
        $error = "Error adding new author.";
        include '../inc/error.php';
        exit();
    }
    header('Location: .');
    exit();
}





//  EDIT AUTHOR CODE

if(isset($_POST['action']) and ($_POST['action'] == 'Edit')){
    include '../inc/db.php';

    try{
        $sql = "SELECT authorID, name, email FROM authors WHERE authorID = :author_id";
        $s = $pdo->prepare($sql);
        $s-> bindValue(':author_id', $_POST['id']);
        $s-> execute();
    }
    catch(PDOException $e){
        $error = "Error fetching author details.";
        include '../inc/error.php';
        exit();
    }


    // POPULATE FORM 
    $row = $s->fetch(); //fetches one row from database

        $pageTitle = "Edit Author";
        $action ="editform";
        $name = $row['name'];
        $email = $row['email'];
        $id = $row['authorID']; //column names from database row
        $button = "Update author";

        include 'form-html.php';
        exit();
}


if(isset($_GET['editform'])){
    include '../inc/db.php';
    try{
        $sql = 'UPDATE authors SET
        name = :name,
        email =:email
        WHERE authorID = :id';

        $s = $pdo->prepare($sql);
        $s->bindValue(':id',$_POST['id']); //bind the name and value pairs to $s variable (found in the html form section)
        $s->bindValue(':name',$_POST['name']); //$_POST['name'] is the "name" part of the pair
        $s->bindValue(':email',$_POST['email']); // ':email' is the placeholder text in the form's text field
        $s->execute();
    }catch(PDOException $e){
        $error = "Error updating submitted author.";
        include '../inc/error.php';
        exit();
    }
    header('Location: .');
    exit();
}









    include '../inc/db.php'; //includs database


//delete author code block

if(isset($_POST['action']) and $_POST['action'] == 'Delete'){
    include '../inc/db.php';

    try{
        $sql = 'SELECT authorID, name FROM authors WHERE authorID = :author_id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':author_id', $_POST['id']);
        $s->execute();
    }
    catch(PDOException $e){
        $error = "Error fetching author from database";
        include '../error.php';
        exit();
    }
    
    $row = $s->fetch();

        $name = $row['name'];
        $id = $row['authorID'];
        include 'confirm-delete-html.php';
        exit();

    }


    // CONFIRMATION DELETE
    
    if(isset($_POST['action']) and $_POST['action']=='Yes'){
        include '../inc/db.php';

        try{
            $sql = 'DELETE FROM authors WHERE authorID = :author_id';
            $s = $pdo->prepare($sql);
            $s->bindValue(':author_id',$_POST['id']);
            $s->execute();
        }
        catch(PDOException $e){
            $error = 'Error deleting author.';
            include '../inc/error.php';
            exit();
        }
        
        header('Location: .');
        exit();


    }








    try{
        $result = $pdo->query('SELECT authorID, name FROM authors');

    }catch(PDOException $e){
        $error = "There has been an error fetching the authors from the database";
        include '../inc/error.php';
        exit();
    }

    foreach ($result as $row){ //puts results from query into array with variable values
        $authors[] = array(
            'author_id'=>$row['authorID'],
            'name'=>$row['name']
        );
    }
    include 'authors-html.php';

?>