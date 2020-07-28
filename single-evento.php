
<?php get_header(); ?>
<?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>
<main class="main-background" style="background-image:url(<?php echo $thumb_url ?>); border: 10px solid red">
        <!-- artigo widget -->
		<div class="artigo-widget">  
			<?php 
			$query = new WP_Query( array( 'post_type'       => 'artigo',
					  'posts_per_page'  => -1,
					  'orderby'         => 'date',
					  'order'           => 'DESC' ) );

			?>

			<ul  class="gallery" >

				<?php while( $query->have_posts() ) : $query->the_post(); ?>

				<?php 

				$url = get_field( 'url' );
				$url = strpos($url, 'http') !== true ? 'http://' . $url : $url;

				?>


				<li data-iframe="true" data-src="<?php echo $url; ?>" class="iframe" >
					<span></span>
					<a href="#"  title="<?php the_title(); ?>"> 
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>" alt="<?php the_title(); ?>"  class="transition" />
					</a>		

				</li>

				<?php endwhile; wp_reset_postdata(); ?>	

			</ul>  		

		</div>
		<!-- /portfolio widget -->
    </main>
<?php get_footer(); ?>