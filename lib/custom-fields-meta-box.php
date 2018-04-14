<?php

add_action('add_meta_boxes', function () {
    add_meta_box('bft-custom-fields', 'Custom Fields Reference', function () {
        ?>

        <ul>
            <li>header-text</li>
            <li>show-header-text</li>
        </ul>

        <?php
    });
});

?>
