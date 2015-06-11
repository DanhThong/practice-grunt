<div class="menu-category">
    <ul class="menu">
    <?php foreach ($data as $item) { ?>
        <li class="menu-item">
            <a href="<?php echo get_category_link($item->term_id); ?>"><?php echo $item->name; ?></a>
        </li>
    <?php } ?>
    </ul>
</div>