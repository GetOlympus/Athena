<ul>
    <?php foreach($items as $snip) : ?>
        <li><a href="<?php echo get_permalink($snip['ID']) ?>"><?php echo $snip['post_title'] ?></a></li>
    <?php endforeach ?>
</ul>
