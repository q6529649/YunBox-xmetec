<div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full'); ?>>
	<!--<ul class="blog-date-left">
		<li class="kadima_post_date">
		<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
		<span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
		<?php else : ?>
		<span class="date"><?php echo get_the_date(); ?></span>
		<?php endif; ?>
		</li>
		<li class="kadima_post_author"><?php echo get_avatar(get_the_author_meta( 'ID' ),96); ?></li>
		<li class="kadima_blog_comment"><i class="fa fa-comments-o"></i><h6><?php comments_popup_link( '0', '1', '%', '', '-'); ?></h6></li>
	</ul>-->
	<div class="post-content-wrap">
		<?php if(has_post_thumbnail()): 
		$img = array('class' => 'kadima_img_responsive'); ?>
		<div>						
			<div class="kadima_blog-img">
			<?php the_post_thumbnail(); ?>						
			</div>
			<?php if (is_home()) : ?>
			<div class="kadima_blog_thumb_wrapper_showcase_overlay">
			<div class="kadima_blog_thumb_wrapper_showcase_overlay_inner ">
				<div class="kadima_blog_thumb_wrapper_showcase_icons">
					<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="kadima_fuul_blog_detail_padding">
		<h1><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h1>
		
		<?php the_content( __( 'Read More' , 'kadima' ) ); 
		$defaults = array(
              'before'           => '<div class="kadima_blog_pagination"><div class="kadima_blog_pagi">' . __( 'Pages:','kadima'  ),
              'after'            => '</div></div>',
	          'link_before'      => '',
	          'link_after'       => '',
	          'next_or_number'   => 'number',
	          'separator'        => ' ',
	          'nextpagelink'     => __( 'Next page'  ,'kadima' ),
	          'previouspagelink' => __( 'Previous page' ,'kadima'),
	          'pagelink'         => '%',
	          'echo'             => 1
	          );
	          wp_link_pages( $defaults ); ?>
		</div>
		<div class="row">
		<!--<div class="col-md-6 col-sm-3">
		<?php if(get_the_tag_list() != '') { ?>
		<p class="kadima_tags"><?php the_tags( __('Tags : ','kadima'), '', '<br />'); ?></p>
		<?php } ?>
		</div>-->
		<div class="col-md-12 col-sm-3">
		<?php if(get_the_category_list() != '') { ?>
		<p class="kadima_cats p1"><?php echo __("Category : ",'kadima');
		the_category(' , '); ?></p>
		<?php } ?>
		</div>
		</div>
	</div>
</div>