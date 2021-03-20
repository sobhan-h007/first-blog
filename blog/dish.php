<?php

define('TITLE','MENU Item | Franklin`s Fine Dining');

include_once('includes/header.php');

// clean bad charectors

function strip_bad_chars($input){
    $output = preg_replace('/[^a-zA-Z0-9_-]/','',$input);
    return $output;
}


if(isset($_GET['item'])){
    $menuItem = strip_bad_chars($_GET['item']);

    $dish = $menuItems[$menuItem];
}


// calcutator a Suggest Tip
function Suggested_Tip($price, $tip){

    $totalPrice = $price * $tip;
    echo number_format($totalPrice,2);

}
?>

<hr>

<div id="dish">

<h1> <?php echo $dish['title'] ?> <span class="price"><sup>$</sup><?php echo $dish['price']; ?> </span>  </h1>
<p><?php echo $dish['info']; ?></p>

<br>

<p><strong>Suggested beverage: <?php echo $dish['drink'];  ?></strong></p>

<p><em>Suggested Tip: <sup>$</sup><?php Suggested_Tip($dish['price'],0.20)  ?></em></p>



</div>

<hr>

<a href="menu.php" class=" button previous"> &laquo; Back to Menu </a>




<?php 

include_once('includes/footer.php'); 

?>