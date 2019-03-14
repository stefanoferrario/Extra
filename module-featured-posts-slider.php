<?php
	if ( $module_posts->have_posts() ) :
	$max_title_characters = isset( $max_title_characters ) && '' !== $max_title_characters ? intval( $max_title_characters ) : 50;
?>
<?php $id_attr = '' !== $module_id ? sprintf( ' id="%1$s"', esc_attr( $module_id ) ) : ''; ?>
<div <?php echo $id_attr ?> class="module featured-posts-slider-module et_pb_extra_module <?php echo esc_attr( $module_class ); ?>" data-breadcrumbs="enabled"<?php if ( $enable_autoplay ) { echo ' data-autoplay="' . esc_attr( $autoplay_speed ) . '"'; } ?>>
	<div class="posts-slider-module-items carousel-items et_pb_slides">
	<?php while ( $module_posts->have_posts() ) : $module_posts->the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post carousel-item et_pb_slide' ); ?> <?php et_thumb_as_style_background(); ?>>
			<div class="post-content-box">
				<div class="post-content">
				<?php if(get_field('field_58b95080e9b9c')){ ?>
						<div style="padding:2px 8px 2px 8px; font-size: 11px; color:white; text-transform:uppercase; font-weight:bold; float:left; background-color:#8B0000;"> <p> <?php printf(get_field('field_58b95080e9b9c'))?></p></div>
						<br />
					<?php } ?>
					<h3 style="padding:5px 0px 0px 0px;" class="entry-title"><a href="<?php the_permalink(); ?>"><?php truncate_title( $max_title_characters ); ?></a></h3>
					<div class="post-meta vcard">
						<?php
						$meta_args = array(
							'author_link'    => $show_author,
							'author_link_by' => et_get_safe_localization( __( 'Posted by %s', 'extra' ) ),
							'post_date'      => $show_date,
							'date_format'    => $date_format,
							'categories'     => $show_categories,
							'comment_count'  => $show_comments,
							'rating_stars'   => $show_rating,
						);
						?>
						<p><?php echo et_extra_display_post_meta( $meta_args ); ?>
					</div>
					<div style="padding:0px 0px 5px 0px;">
						<?php the_excerpt(); ?>
					</div>
					<div style="overflow: auto;">
						<?php 
							//LINK ARTICOLI
							if(get_field('field_5a5cba79b13ec')) {
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cb9bbb13e7').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cba79b13ec').'</a>');
								?></div><?php
							}
							if(get_field('field_5a5cbab7b13ed')) {
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cba11b13e8').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cbab7b13ed').'</a>');
								?></div><?php
							}
							if(get_field('field_5a5cbacbb13ee')) {
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cba26b13ea').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cbacbb13ee').'</a>');
								?></div><?php
							}
							if(get_field('field_5a5cbad9b13ef')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cba51b13eb').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cbad9b13ef').'</a>');
								?></div><?php
							}
							if(get_field('field_5a9979e387596')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae78759c').' style="color:white; font-weight: bold;"> '.get_field('field_5a9979e387596').'</a>');
								?></div><?php
							}	
							if(get_field('field_5a9979e287595')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae78759b').' style="color:white; font-weight: bold;"> '.get_field('field_5a9979e287595').'</a>');
								?></div><?php
							}	
							if(get_field('field_5a9979e187594')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae68759a').' style="color:white; font-weight: bold;"> '.get_field('field_5a9979e187594').'</a>');
								?></div><?php
							}
							if(get_field('field_5a9979e187593')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae687599').' style="color:white; font-weight: bold;"> '.get_field('field_5a9979e187593').'</a>');
								?></div><?php
							}	
							if(get_field('field_5a9979e087592')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae587598').' style="color:white; font-weight: bold;"> '.get_field('field_5a9979e087592').'</a>');
								?></div><?php
							}	
							if(get_field('field_5a9979e087591')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae387597').' style="color:white; font-weight: bold;"> '.get_field('field_5a9979e087591').'</a>');
								?></div><?php
							}			
							//ALLEGATI ARTICOLI
							if(get_field('field_5a5cce4b7d0e6')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5ccde87d0e5').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cce4b7d0e6').'</a>');
								?></div><?php
							}
							if(get_field('field_5a5cd02f3afd3')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5cd0513afd6').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cd02f3afd3').'</a>');
								?></div><?php
							}
							if(get_field('field_5a5cd0383afd4')) {
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5cd0603afd7').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cd0383afd4').'</a>');
								?></div><?php
							}
							if(get_field('field_5a5cd0423afd5')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5cd0693afd8').' style="color:white; font-weight: bold;"> '.get_field('field_5a5cd0423afd5').'</a>');
								?></div><?php
							}
							if(get_field('field_5a9973c5928a4')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a9973de928a5').' style="color:white; font-weight: bold;"> '.get_field('field_5a9973c5928a4').'</a>');
								?></div><?php
							}
							if(get_field('field_5a997909cbfe6')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997967cbfeb').' style="color:white; font-weight: bold;"> '.get_field('field_5a997909cbfe6').'</a>');
								?></div><?php
							}
							if(get_field('field_5a997909cbfe5')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997966cbfea').' style="color:white; font-weight: bold;"> '.get_field('field_5a997909cbfe5').'</a>');
								?></div><?php
							}
							if(get_field('field_5a997909cbfe4')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997966cbfe9').' style="color:white; font-weight: bold;"> '.get_field('field_5a997909cbfe4').'</a>');
								?></div><?php
							}
							if(get_field('field_5a997909cbfe3')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997966cbfe8').' style="color:white; font-weight: bold;"> '.get_field('field_5a997909cbfe3').'</a>');
								?></div><?php
							}
							if(get_field('field_5a997909cbfe2')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997965cbfe7').' style="color:white; font-weight: bold;"> '.get_field('field_5a997909cbfe2').'</a>');
								?></div><?php
							}
							// LINKS INTERNI
							if(get_field('field_5b8e34c2a9bc4')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e34c2a9bc4').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e34c2a9bc4'))). '</a>');
								?></div><?php
							}
							if(get_field('field_5b8e3c481599d')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c481599d').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c481599d'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c471599c')) {
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c471599c').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c471599c'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c461599b')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c461599b').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c461599b'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c461599a')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c461599a').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c461599a'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c4515999')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4515999').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4515999'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c4415998')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4415998').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4415998'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c4315997')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4315997').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4315997'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c4215996')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4215996').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4215996'))). '</a>');										
								?></div><?php
							}
							if(get_field('field_5b8e3c4115995')) { 
								?><div style="margin: 0 2% 0 0; float:left;"><?php
								printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4115995').' style="color:white; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4115995'))). '</a>');										
								?></div><?php
							}
						?>	
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	</div>
</div>
<?php endif;
