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

        <header>
            <nav>
                <ul class="r-menu-nav nowrap">
                    <li><a href="#appetizers">Appetizers</a></li>
                    <li><a href="#tandoori-appetizers">Tandoori Appetizers</a></li>
                    <li><a href="#garden-specialties">Garden Specialties</a></li>
                    <li><a href="#chicken-specialties">Chicken Specialties</a></li>
                    <li><a href="#lamb-beef-goat-specialties">Lamb, Beef & Goat Specialties</a></li>
                    <li><a href="#seafood-specialties">Seafood Specialties</a></li>
                    <li><a href="#rice-specialties">Rice Specialties</a></li>
                    <li><a href="#tandoori-breads">Tandoori Breads</a></li>
                    <li><a href="#sides">Sides</a></li>
                    <li><a href="#desserts">Desserts</a></li>
                    <li><a href="#indo-chinese">Indo Chinese</a></li>
                </ul>
            </nav>

        </header>
        <!-- APPETIZERS  -->
        <section class="mb-20" id="appetizers">
            <h2>
                Appetizers
            </h2>
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
        </section>


        <!-- TANDOORI APPETIZERS  -->
        <section class="mb-20" id="tandoori-appetizers">
            <h2>
                Tandoori Appetizers
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Tandoori Appetizers', 'compare' => 'LIKE'),
                    ),
                );

                $tappetizers = new WP_Query($args);

                // Display the appetizers
                if ($tappetizers->have_posts()) {
                    while ($tappetizers->have_posts()) {
                        $tappetizers->the_post();
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
        </section>


        <!-- GARDEN SPECIALTIES  -->
        <section class="mb-20" id="garden-specialties">
            <h2>
                Garden Specialties
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Garden Specialties', 'compare' => 'LIKE'),
                    ),
                );

                $garden = new WP_Query($args);

                /*
                 * Display the appetizers
                 */
                if ($garden->have_posts()) {
                    while ($garden->have_posts()) {
                        $garden->the_post();
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
        </section>

        <!-- CHICKEN SPECIALTIES -->
        <section class="mb-20" id="chicken-specialties">
            <h2>
                Chicken Specialties
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Chicken Specialties', 'compare' => 'LIKE'),
                    ),
                );

                $chicken_specialties = new WP_Query($args);

                // Display the appetizers
                if ($chicken_specialties->have_posts()) {
                    while ($chicken_specialties->have_posts()) {
                        $chicken_specialties->the_post();
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
        </section>

        <!-- LAMB, BEEF & GOAT SPECIALTIES -->
        <section class="mb-20" id="lamb-beef-goat-specialties">
            <h2>
                Lamb, Beef & Goat Specialties
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Lamb, Beef & Goat Specialties', 'compare' => 'LIKE'),
                    ),
                );

                $lamb = new WP_Query($args);

                // Display the appetizers
                if ($lamb->have_posts()) {
                    while ($lamb->have_posts()) {
                        $lamb->the_post();
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
        </section>

        <!-- SEAFOOD SPECIALTIES -->
        <section class="mb-20" id="seafood-specialti">
            <h2>
                Seafood Specialties
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Seafood Specialties', 'compare' => 'LIKE'),
                    ),
                );

                $seafood = new WP_Query($args);

                // Display the appetizers
                if ($seafood->have_posts()) {
                    while ($seafood->have_posts()) {
                        $seafood->the_post();
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
        </section>

        <!-- RICE SPECIALTIES  -->
        <section class="mb-20" id="rice-specialties">
            <h2>
                Rice Specialties
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Rice Specialties', 'compare' => 'LIKE'),
                    ),
                );

                $rice = new WP_Query($args);

                // Display the appetizers
                if ($rice->have_posts()) {
                    while ($rice->have_posts()) {
                        $rice->the_post();
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
        </section>

        <!-- TANDOORI BREADS -->
        <section class="mb-20" id="tandoori-breads">
            <h2>
                Tandoori Breads
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Tandoori Breads', 'compare' => 'LIKE'),
                    ),
                );

                $tandoori_breads = new WP_Query($args);

                // Display the appetizers
                if ($tandoori_breads->have_posts()) {
                    while ($tandoori_breads->have_posts()) {
                        $tandoori_breads->the_post();
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
        </section>

        <!-- SIDES -->
        <section class="mb-20" id="sides">
            <h2>
                Sides
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Sides', 'compare' => 'LIKE'),
                    ),
                );

                $sides = new WP_Query($args);

                // Display the appetizers
                if ($sides->have_posts()) {
                    while ($sides->have_posts()) {
                        $sides->the_post();
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
        </section>

        <!-- DESSERTS -->
        <section class="mb-20" id="desserts">
            <h2>
                Desserts
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Desserts', 'compare' => 'LIKE'),
                    ),
                );

                $desserts = new WP_Query($args);

                // Display the appetizers
                if ($desserts->have_posts()) {
                    while ($desserts->have_posts()) {
                        $desserts->the_post();
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
        </section>

        <!-- INDO CHINESE -->
        <section class="mb-20" id="indo-chinese">
            <h2>
                Indo Chinese
            </h2>
            <div class="grid-container">
                <?php
                $args = array(
                    'post_type' => 'menu-items',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array('key' => 'menu_item_type', 'value' => 'Indo Chinese', 'compare' => 'LIKE'),
                    ),
                );

                $indo = new WP_Query($args);

                // Display the appetizers
                if ($indo->have_posts()) {
                    while ($indo->have_posts()) {
                        $indo->the_post();
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
        </section>
    </div>
</main>

<?php
get_footer(); ?>