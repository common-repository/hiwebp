<?php
/**
 * Options HiWebP
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function hiwebp_plugin_admin_menu() {

	$hi_webp_options_page = add_options_page(
		__('HiWebP Options', 'hi-webp'),
		__('HiWebP', 'hi-webp'),
		'manage_options',
		'hi-webp',
		'hiwebp_settings_page'
	);

}

add_action('admin_menu', 'hiwebp_plugin_admin_menu');

?>
<?php
function hiwebp_settings_page(){
	?>
<div class="hiwebp-body">
	<div class="hiwebp-welcome-head">
		<h1>
			<?php esc_html_e('Welcome to HiWebP', 'hi-webp' ); ?>
		</h1>
		<div class="version">
			<?php esc_html_e('version:', 'hi-webp' ); ?>
			<?php echo HIWEBP_VER ?>
		</div>
	</div>
	<div class="hiwebp-content">
		<h2>
			<?php esc_html_e('What does it do there?', 'hi-webp' ); ?>
		</h2>
		<p>
			<?php esc_html_e('We know that WordPress does not support image format WebP (.webp).', 'hi-webp' ); ?>
			<br>
				<?php esc_html_e('This format is provided by Google. Using this format will load your site images faster in browsers and optimize the website.', 'hi-webp' ); ?>
			</br>
		</p>
		<h2>
			<?php esc_html_e('What are the features of this plugin?', 'hi-webp' ); ?>
		</h2>
		<div class="hiwebp-features">
			<ul>
				<li>
					<?php esc_html_e('Safe Webp to Upload in Media Library Wordpress', 'hi-webp' ); ?>
				</li>
				<li>
					<?php esc_html_e('Show Thumbnail webp images in Media Library Wordpress', 'hi-webp' ); ?>
				</li>
				<li>
					<?php esc_html_e('Add a Label Webp in Media Library', 'hi-webp' ); ?>
				</li>
				<li>
					<?php esc_html_e('Lightweight and fast with no extra code', 'hi-webp' ); ?>
				</li>
				<li>
					<?php esc_html_e('No crop images and no increase in uploads folder (wp-content/uploads/) size', 'hi-webp' ); ?>
				</li>
				<li>
					<?php esc_html_e('No conflict with any other plugins', 'hi-webp' ); ?>
				</li>
				<li>
					<?php esc_html_e('PHP 7.x Support', 'hi-webp' ); ?>
				</li>
			</ul>
		</div>
		<div class="notice">
			<?php esc_html_e('If you have already uploaded the .webp images and the thumbnails are not displayed, we recommend that you install the', 'hi-webp' ); ?>
			<a href="https://wordpress.org/plugins/force-regenerate-thumbnails/" target="_blank">
				<?php esc_html_e('Force Regenerate Thumbnails', 'hi-webp' ); ?>
			</a>
			<?php esc_html_e('Plugin and run it once.', 'hi-webp' ); ?>
		</div>
		<h3>
			<?php esc_html_e('New features coming soon!', 'hi-webp' ); ?>
		</h3>
		<p>
			<?php esc_html_e('I will soon provide professional settings with new features of this plugin. I am waiting for your comments.', 'hi-webp' ); ?>
			<br>
				<?php esc_html_e('Author: Masoud darvishi', 'hi-webp' ); ?>
			</br>
		</p>
	</div>
</div>
<?php
}