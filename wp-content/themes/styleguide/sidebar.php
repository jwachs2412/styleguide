<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div class="col-md-3 scrollspy" id="myScrollspy">
		<aside id="secondary" class="sidebar widget-area" role="complementary" data-spy="affix">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- .sidebar .widget-area -->
	</div>
<?php endif; ?>
