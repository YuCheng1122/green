<?php
/**
 * Displays footer site info
 *
 * @subpackage Martial Arts Training
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">

    <?php
        echo esc_html( get_theme_mod( 'fitness_insight_footer_text' ) );
        printf(
            /* translators: %s: Martial Arts WordPress Theme. */
            esc_html__( ' %s ','martial-arts-training' ),
            '<p class="mb-0">Martial Arts WordPress Theme</p>'
        );
    ?>

</div>