<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage shop2022
 * @since shop2022 1.0
 */
get_header();
?>
    <!-- BEGIN CONTENT-AREA -->
    <div class="content-area">
        <main>
            <section class="slider">Slider</section>
            <section class="popular-products">Popular-products</section>
            <section class="new-arrivals">New Arrivals</section>
            <section class="deal-of-the-week">Deal-of-the-week</section>
            <section class="lab-blog">News</section>
        </main>
    </div>
    <!-- END CONTENT AREA -->
</div>
<!-- END SITE -->
<?php
get_footer();