<?php 

include("inc/functions.php");
$catalog_array = full_catalog_array();


if(isset($_GET["id"])){
    $id = $_GET["id"];
    if(isset($catalog_array[$id])){//checks if the $_GET id is in the catalog
        $item =$catalog_array[$id];

    }

}
if(!isset($item)){
    header("location:catalog.php");//redirects page if item does not exist
    exit;
}
$pageTitle = $item["recipe_name"];
$section = null;



include("header.php");
?>

<div class = "section page">
    <div class ="wrapper">
        <div class ="media-picture">
        <span>
        <img src="<?php echo $item["img"];?> " alt="<?php echo $item["recipe_name"];?>"> 
        </span>
        </div>
    </div>

    <div class= "media-details">
        <h1><?php echo $item["recipe_name"];?></h1>
        <table>
            <tr>
                <th>Category</th>
                <td><?php echo $item["category"];?></td>
            </tr>
            <tr>
                <th>Author</th>
                <td><?php echo $item["author"];?></td>
            </tr>
            <tr>
                <th>Ingredients</th>
                <td><?php echo $item["ingredients"];?></td>
            </tr>
    </div>
</div>
    
