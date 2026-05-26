<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<div>
    <p>The total published posts in this sites are: <?php echo wp_count_posts()->publish; ?></p>
    <p>The total comments are: <?php echo wp_count_comments() -> approved; ?></p>

    <h3>Recent Posts:</h3>

<?php 

    $posts = wp_get_recent_posts(['numberposts=> 5', 'post_status' => "publish"]);
    foreach ($posts as $post) {
            echo '<p>-' . esc_html($posts['post_title']) . '</p>';
    }
?>
</div>

