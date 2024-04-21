<?php

/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

get_header();
?>
<main class="menu-section">
    <?php the_content(); ?>

    <div class="container">
        <h3>
            Appetizers
        </h3>
        <div class="grid-container">
            <?php
            $args = array(
                'post_type' => 'menu-items',
                'posts_per_page' => -1,
                'meta_query' => array(
                    array('key' => 'menu_item_type', 'value' => 'Appetizers', 'compare' => 'LIKE'),
                ),
            );

            $appetizers = new WP_Query($args);

            // Display the appetizers
            if ($appetizers->have_posts()) {
                while ($appetizers->have_posts()) {
                    $appetizers->the_post();
                    $menu_item_description = get_field('menu_item_description');
                    $menu_item_price = get_field('menu_item_price');
                    echo '<section class="menu-item">';
                    echo '<div class="flex">';
                    echo '<h4>' . get_field('menu_item_name') . '</h4>';
                    echo '<strong>$' . $menu_item_price . '</strong>';
                    echo '</div>';


                    echo '<p>' . ($menu_item_description ? $menu_item_description : '') . '</p>';
                    echo '</section>';
                }
                wp_reset_postdata();
            } else {
                echo '<p>Sorry, no appetizers available.</p>';
            }
            ?>
        </div>
    </div>
</main>

<?php
get_footer(); ?>