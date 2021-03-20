<?php

define('TITLE','Menu | Franklin`s Fine Dinig');

include_once('includes/header.php');

?>

<div id="menu-items" >

    <h1>Our Delicious Menu</h1>
    <p>like our team, out team is very small &mdash; but dang, does it ever pack punch!</p>
    <p><em>Click any menu item to learn more about it. </em></p>

    <hr>

    <ul>
        <?php foreach($menuItems as $dish => $item ) : ?>

        <li> <a href="dish.php?item=<?php echo $dish; ?>"> <?php echo $item['title']; ?> </a> <sup>$</sup><?php echo $item['price']; 
        
        ?>  </li>

        <?php endforeach; ?>

    </ul>

</div>


<?php include_once('includes/footer.php'); ?>
