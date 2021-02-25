
<?php 
$pageTitle = "Cooking Recipes";
include("inc/functions.php");

include("header.php"); 
include("inc/slideshow.php");
include("inc/filter.php");


$catalog_array = full_catalog_array();

?>

    
    <br>
    


    <div class ="wrapper">
        <ul class="items">
        <?php 
        $random = array_rand($catalog_array,4);
        foreach ($random as $id){
        echo get_item_html($id,$catalog_array[$id]);
        }
        ?>
        </ul>
    </div>


   
    

<?php include("footer-html.php"); ?>

</body>
<script type="text/javascript" src="js/script.js"></script>

</html>
