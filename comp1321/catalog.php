
<?php 

include("inc/functions.php");
$pageTitle = "Full Catalog";
$catalog_array = full_catalog_array();

$section = null;

if(isset($_GET["cat"])){
    if($_GET["cat"]=="donuts"){
        $pageTitle = "Donuts";
        $section = "donuts";

    }else if($_GET["cat"]=="chocolate"){
        $pageTitle = "Chocolate";
        $section = "chocolate";
    }
    else if($_GET["cat"]=="cakes"){
        $pageTitle = "Cakes";
        $section= "cakes";
    }
    
}
?>

<?php 
include("header.php");
?>

<div class="section catalog page">
    <div class = "wrapper">
    <h1 id = "title" ><?php echo $pageTitle?></h1>

    <ul class="items">
        <?php 
         $categories = array_category($catalog_array, $section);
         foreach ($categories as $id){
             echo get_item_html($id,$catalog_array[$id]);
         }
         ?>
        
    </ul>

    <button input="submit"><a href="edit.php">Edit Recipes</a></button>
    </div>

    
</div>
