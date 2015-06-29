<div class="menu-category clearfix">
    <ul class="menu">
    <?php $i = 1;?>
    <?php foreach ($data as $item) { ?>
        <li class="menu-item">
            <a href="<?php echo get_category_link($item->term_id); ?>"><?php echo $item->name; ?></a>
        </li>
    <?php
    if ($i%7==0){
        echo "</ul><ul class='menu'>";
    }
    $i++;
    ?>
    <?php } ?>
    </ul>
</div>