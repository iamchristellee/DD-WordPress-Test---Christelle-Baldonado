<?php
get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>
    <div class="deer-test">
        <h1><?php the_title(); ?></h1>
        <p><strong>Start Date:</strong> <?php the_field('start_date'); ?></p>
        <p><strong>End Date:</strong> <?php the_field('end_date'); ?></p>
        <p><strong>Description:</strong> <?php the_field('description'); ?></p>

        <div>
            <strong>Cover Image:</strong>
            <?php 
            $cover_image = get_field('cover_image'); // Get the field value
            if ($cover_image) {
                // Check if it's an ID or an array
                if (is_array($cover_image)) {
                    echo '<img src="' . esc_url($cover_image['url']) . '" alt="' . esc_attr($cover_image['alt']) . '">';
                } else {
                    echo wp_get_attachment_image($cover_image, 'full');
                }
            } else {
                echo 'No cover image available.';
            }
            ?>
        </div>

        <p><strong>Application Link:</strong> 
            <a href="<?php the_field('application_link'); ?>" target="_blank">
                <?php the_field('application_link'); ?>
            </a>
        </p>
    </div>
<?php
endwhile; endif;

get_footer();
