<?php
/**
 * Template for displaying Finish button in single course.
 *
 * @author  ThimPress
 * @package  CourseBuilder/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$course = LP_Global::course();
$user   = LP_Global::user();
?>

<form class="lp-form form-button form-button-finish-course" method="post">

    <button id="learn-press-finish-course" class="lp-button button"><?php _e( 'Finish course', 'course-builder' ); ?></button>
    <input type="hidden" name="course-id" value="<?php echo $course->get_id(); ?>"/>
    <input type="hidden" name="finish-course-nonce"
           value="<?php echo esc_attr( wp_create_nonce( sprintf( 'finish-course-%d-%d', $course->get_id(), $user->get_id() ) ) ); ?>"/>
    <input type="hidden" name="lp-ajax" value="finish-course"/>
    <input type="hidden" name="noajax" value="yes"/>

</form>
