<?php
/**
 * Template for displaying content of learning course.
 *
 * @author      ThimPress
 * @package     CourseBuilder/Templates
 * @version     3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();


$course = LP_Global::course();
$page_title = thim_page_title();

/**
 * Extract $page_title to parameters
 *
 * @var $main_css
 * @var $overlay_css
 */

extract( $page_title );
?>


<div class="header-course">
    <div class="header-course-bg" <?php echo ent2ncr( $main_css ); ?>>
    <span class="overlay-top-header" <?php echo ent2ncr( $overlay_css ); ?>></span>
    </div>
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
					<?php learn_press_get_template( 'single-course/thumbnail.php' ); ?>
                </div>
                <div class="col-md-6">
                    <div class="header-info">
                        <h1 class="course-title"><?php the_title(); ?></h1>
						<?php if ( get_the_excerpt() ) { ?>
                            <p class="description">
								<?php echo wp_trim_words( get_the_excerpt(), 35 ); ?>
                            </p>
						<?php } ?>
                    </div>

					<?php learn_press_get_template( 'single-course/progress.php' );
					// get course bbpress forum
					$forum_id = get_post_meta( $course->get_id(), '_lp_course_forum', true );
					if ( $forum_id && class_exists( 'LP_Addon_bbPress' ) && class_exists( 'bbPress' ) ) { ?>
                        <div class="forum-section">
                            <span class="label"><?php esc_html_e( 'Visit Forum: ', 'course-builder' ); ?></span>
							<?php LP_Addon_bbPress::instance()->forum_link(); ?>
                        </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="course-learning-summary">
	<?php do_action( 'learn-press/content-learning-summary' ); ?>
</div>
