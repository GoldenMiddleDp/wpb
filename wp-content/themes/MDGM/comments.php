<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'boot-starter-gm' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments(); ?>
	</ul>
	<?php next_comments_link( _e( 'Next comments', 'boot-starter-gm' ), 999 ) ?>
	<?php previous_comments_link()( _e( 'Previous', 'boot-starter-gm' ), 999 ) ) ?>


<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are unavailable', 'boot-starter-gm' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
