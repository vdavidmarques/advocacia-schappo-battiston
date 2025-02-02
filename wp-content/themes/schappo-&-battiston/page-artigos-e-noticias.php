<?php 
    get_header(); 
    echo '<section class="news">';
    include 'sections/news/featured-news-list.php';
    include 'sections/news/news-list.php';
    echo '</section>';
    get_footer();
?>
