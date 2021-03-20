<ul>
    <?php
        foreach($navItems as $Item){
            echo "<li> <a href='$Item[slug]'> $Item[title]  </a> </li>";
        }

    ?>
</ul>