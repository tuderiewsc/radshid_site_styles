<?php /* Template Name: Survey */ ?>

<?php get_header(); ?>

<?php if ( ! is_user_logged_in() ):?>
	<div class="container">
		<div class="row">
			<div class="alert alert-danger" role="alert" id="radshid_survey_alert">
				<?php echo 'برای مشاهده فرم نظرسنجی باید  وارد سایت شوید.'; ?> <a href="https://radshid.com/my-account/" class="alert-link" target="_blank"><?php echo 'ورود به رادشید'; ?></a>
			</div>
		</div>
	</div>
	<?php else:?>

		<?php
		$args = array( 
			'post_type' => "post", 
		);
		$loop = new WP_Query( $args );
		if ( have_posts() ) {
			wp_reset_query();
			setup_postdata($post); 
			echo esc_attr(htmlentities(the_content()));
		} else {
			echo "ربرایمشاهده فرم نظرسنجی باید  وارد سایت شوید..";
		};
		?>
	<?php endif?>



	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
