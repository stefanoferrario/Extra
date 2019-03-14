<?php get_header(); ?>
<div id="main-content">
	<?php
		if ( et_builder_is_product_tour_enabled() ):

			while ( have_posts() ): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
					<?php
						the_content();
					?>
					</div> <!-- .entry-content -->

				</article> <!-- .et_pb_post -->

		<?php endwhile;
		else:
	?>
	<div class="container">
		<div id="content-area" class="clearfix">
			<div class="et_pb_extra_column_main">
				<?php
				do_action( 'et_before_post' );

				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>
						<?php
							$post_category_color = extra_get_post_category_color();
						?>
						<?php
							$pageredirect = get_post_meta( get_the_ID(), '301', true );
							if ($pageredirect){
								wp_redirect( $pageredirect, 301 ); exit;
							} 
							if (get_field('field_5baa49f828035')){
								wp_redirect(get_field('field_5baa49f828035'), 301);exit;
							}
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'module single-post-module' ); ?>>
							<?php if ( is_post_extra_title_meta_enabled() ) { ?>
							<div style="padding:6% 6% 3% 6%;" class="post-header">
								<?php if(get_field('field_58b95080e9b9c')){ ?>
									<div style="padding:2px 8px 2px 8px; font-size: 11px; color:white; text-transform:uppercase; font-weight:bold; float:left; background-color:#8B0000;"> <p> <?php printf(get_field('field_58b95080e9b9c'))?></p></div>
									<br />
								<?php } ?>
								<h1 style="padding:10px 0px 0px 0px;" align="left" class="entry-title" ><?php the_title(); ?></h1>
								<?php if(get_field('field_5a5d1c4eba328')) { ?>
									<div style="padding:10px 0px 0px 0px; font-size: 115%" align="left";> 
										<?php  //INTRODUZIONE
											if (get_field('field_5a5d1557a1bef')){
												printf(''.get_field('field_5a5d1557a1bef').'');
											}
											else { printf(''.the_excerpt().''); }
										?> 
									</div>
								<?php } /*?>
								<div class="post-meta vcard">
									<p><?php // echo extra_display_single_post_meta(); ?></p>
								</div>
								<?php */ ?>
								<?php if (get_field('field_5a5d1543a1bee')){ ?>
									<div align="left"> 
										<?php 
											if(get_field('field_5a997c56804ab')){
												printf('<br />'.get_field('field_5a997c56804ab').'');
											} else {
												printf('<br/>di');
											}
										?>
										<?php //AUTORE
												printf(' '.get_field('field_5a5d1543a1bee').'');
												if (get_field('field_5a997c33804aa')){ ?>
													<div style="font-size:85%; font-style:italic" align="left">
														<?php printf(''.get_field('field_5a997c33804aa').'');?>
													</div><?php
												}		
										?> 
									</div>
								<?php } ?>
							</div>
							<?php } ?>

							<?php if ( ( et_has_post_format() && et_has_format_content() ) || ( has_post_thumbnail() && is_post_extra_featured_image_enabled() ) ) { ?>
							
							<div style="width:100%;padding:0% 6% 0% 6%; float:center; text-align: center">
								<?php
								$score_bar = extra_get_the_post_score_bar();
								$thumb_args = array( 'size' => 'extra-image-single-post', 'link_wrapped' => false );
								require locate_template( 'post-top-content.php' );
								?>
							</div>
							
							<?php } ?>

							<?php $post_above_ad = extra_display_ad( 'post_above', false ); ?>
							<?php if ( !empty( $post_above_ad ) ) { ?>
							<div class="et_pb_extra_row etad post_above">
								<?php echo $post_above_ad; ?>
							</div>
							<?php } ?>

							<div style="padding:0% 6% 0% 6%;" class="post-wrap">
							<?php if ( !extra_is_builder_built() ) { ?>
								<div class="post-content entry-content">
								<?php if (get_field('field_5a5dc98a83142')||get_field('field_5a5cba79b13ec')||get_field('field_5a5cce4b7d0e6')||get_field('field_5a6238118b418')){ ?>
								<div style="width:40%;margin:0% 4% 2% 0%;float:left;">
								<?php if (get_field('field_5a5dc98a83142')){ ?>
									<div style="padding:0 0 3% 0;">
										<?php //IMMAGINE SOPRA LINK
											printf('<img src='.get_field('field_5a5dc98a83142').'>');
										?>
									</div>
								<?php } ?>
								<?php
									//LINK ARTICOLI
									if(get_field('field_5a5cba79b13ec')) {
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cb9bbb13e7').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cba79b13ec'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a5cbab7b13ed')) {
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cba11b13e8').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cbab7b13ed'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a5cbacbb13ee')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cba26b13ea').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cbacbb13ee'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a5cbad9b13ef')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a5cba51b13eb').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cbad9b13ef'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a9979e387596')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae78759c').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a9979e387596'). '</a>');
										printf('<br />');
									}	
									if(get_field('field_5a9979e287595')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae78759b').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a9979e287595'). '</a>');
										printf('<br />');
									}	
									if(get_field('field_5a9979e187594')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae68759a').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a9979e187594'). '</a>');
										printf('<br />');
									}	
									if(get_field('field_5a9979e187593')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae687599').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a9979e187593'). '</a>');
										printf('<br />');
									}	
									if(get_field('field_5a9979e087592')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae587598').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a9979e087592'). '</a>');
										printf('<br />');
									}	
									if(get_field('field_5a9979e087591')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-link" style="color:orange"></i>'.'<a href='.get_field('field_5a997ae387597').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a9979e087591'). '</a>');
										printf('<br />');
									}	
									//ALLEGATI ARTICOLI
									if(get_field('field_5a5cce4b7d0e6')) { 
										if (get_field('field_5a5cba79b13ec')){
											printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										}
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5ccde87d0e5').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cce4b7d0e6'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a5cd02f3afd3')) {
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5cd0513afd6').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cd02f3afd3'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a5cd0383afd4')) {
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5cd0603afd7').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cd0383afd4'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a5cd0423afd5')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a5cd0693afd8').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a5cd0423afd5'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a9973c5928a4')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a9973de928a5').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a9973c5928a4'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a997909cbfe6')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997967cbfeb').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a997909cbfe6'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a997909cbfe5')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997966cbfea').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a997909cbfe5'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a997909cbfe4')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997966cbfe9').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a997909cbfe4'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a997909cbfe3')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997966cbfe8').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a997909cbfe3'). '</a>');
										printf('<br />');
									}
									if(get_field('field_5a997909cbfe2')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-paperclip"" style="color:orange"></i>'.'<a href='.get_field('field_5a997965cbfe7').' style="color:#616D7E; font-weight: bold;"> '.get_field('field_5a997909cbfe2'). '</a>');
										printf('<br />');
									}
									// LINKS INTERNI
									if(get_field('field_5b8e34c2a9bc4')) { 
										if (get_field('field_5a5cba79b13ec')||get_field('field_5a5cce4b7d0e6')){
											printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										}
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e34c2a9bc4').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e34c2a9bc4'))). '</a>');
										printf('<br />');
									}
									if(get_field('field_5b8e3c481599d')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c481599d').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c481599d'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c471599c')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c471599c').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c471599c'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c461599b')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c461599b').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c461599b'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c461599a')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c461599a').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c461599a'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c4515999')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4515999').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4515999'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c4415998')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4415998').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4415998'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c4315997')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4315997').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4315997'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c4215996')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4215996').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4215996'))). '</a>');										
										printf('<br />');
									}
									if(get_field('field_5b8e3c4115995')) { 
										printf('<hr align="left" size="1" color="#DCDCDC" noshade>');
										printf('<i class="fa fa-edit"" style="color:orange"></i>'.'<a href='.get_field('field_5b8e3c4115995').' style="color:#616D7E; font-weight: bold;"> ' .get_the_title(url_to_postid( get_field('field_5b8e3c4115995'))). '</a>');										
										printf('<br />');
									}

									?>
									<?php
										if (get_field('field_5a6238118b418')){ //NOTA ?>
											<div style="padding:10% 0% 0% 0%; color:#616D7E; font-weight: bold; font-size: 16px">
											<?php printf(''.get_field('field_5a6238118b418').'');?>
											</div>
											<div style="padding:2% 0% 0% 0%; color:#616D7E;">
											<?php printf(''.get_field('field_5a62382e8b419').'');?>
											</div> <?php
										}
									?>
								</div>
								<?php } ?>
								<?php the_content() ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'extra' ),
										'after'  => '</div>',
									) );
								?>
								</div>
							<?php } else { ?>
								<?php et_builder_set_post_type(); ?>
								<?php the_content(); ?>
							<?php } ?>
							</div>

							<?php //AGGIUNTA DATA ARTICOLO?>
							<div style="width:100%; padding:0% 6% 4% 6%; font-weight: bold; color:#a5a5a5; font-size:80%; text-transform: uppercase; "> <?php printf('PUBBLICATO '.get_the_date('l j F Y').'')?> </div>
							
							<?php if ( $review = extra_post_review() ) { ?>
							<div class="post-wrap post-wrap-review">
								<div class="review">
									<div class="review-title">
										<h3><?php echo esc_html( $review['title'] ); ?></h3>
									</div>
									<div class="review-content">
										<div class="review-summary clearfix">
											<div class="review-summary-score-box" style="background-color:<?php echo esc_attr( $post_category_color ); ?>">
												<h4><?php printf( et_get_safe_localization( __( '%d%%', 'extra' ) ), absint( $review['score'] ) ); ?></h4>
											</div>
											<div class="review-summary-content">
												<?php if ( !empty( $review['summary'] ) ) { ?>
												<p>
													<?php if ( !empty( $review['summary_title'] ) ) { ?>
														<strong><?php echo esc_html( $review['summary_title'] ); ?></strong>
													<?php } ?>
													<?php echo $review['summary']; ?>
												</p>
												<?php } ?>
											</div>
										</div>
										<div class="review-breakdowns">
											<?php foreach ( $review['breakdowns'] as $breakdown ) { ?>
											<div class="review-breakdown">
												<h5 class="review-breakdown-title"><?php echo esc_html( $breakdown['title'] ); ?></h5>
												<div class="score-bar-bg">
													<span class="score-bar" style="background-color:<?php echo esc_attr( $post_category_color ); ?>; width:<?php printf( '%d%%', max( 4, absint( $breakdown['rating'] ) ) );  ?>">
														<span class="score-text"><?php printf( et_get_safe_localization( __( '%d%%', 'extra' ) ), absint( $breakdown['rating'] ) ); ?></span>
													</span>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="post-footer">
								<div class="social-icons ed-social-share-icons">
									<p class="share-title"><?php esc_html_e( 'Share:', 'extra' ); ?></p>
									<?php extra_post_share_links(); ?>
								</div>
								<?php if ( extra_is_post_rating_enabled() ) { ?>
								<div class="rating-stars">
									<?php extra_rating_stars_display(); ?>
								</div>
								<?php } ?>
								<style type="text/css" id="rating-stars">
									.post-footer .rating-stars #rated-stars img.star-on,
									.post-footer .rating-stars #rating-stars img.star-on {
										background-color: <?php echo esc_html( $post_category_color ); ?>;
									}
								</style>
							</div>

							<?php $post_below_ad = extra_display_ad( 'post_below', false ); ?>
							<?php if ( !empty( $post_below_ad ) ) { ?>
							<div class="et_pb_extra_row etad post_below">
								<?php echo $post_below_ad; ?>
							</div>
							<?php } ?>
						</article>

						<nav class="post-nav">
							<div class="nav-links clearfix">
								<div class="nav-link nav-link-prev">
									<?php previous_post_link( '%link', et_get_safe_localization( __( '<span class="button">Previous</span><span class="title">%title</span>', 'extra' ) ) ); ?>
								</div>
								<div class="nav-link nav-link-next">
									<?php next_post_link( '%link', et_get_safe_localization( __( '<span class="button">Next</span><span class="title">%title</span>', 'extra' ) ) ); ?>
								</div>
							</div>
						</nav>
						<?php
						if ( extra_is_post_author_box() ) { ?>
						<div class="et_extra_other_module author-box vcard">
							<div class="author-box-header">
								<h3><?php esc_html_e( 'About The Author', 'extra' ); ?></h3>
							</div>
							<div class="author-box-content clearfix">
								<div class="author-box-avatar">
									<?php echo get_avatar( get_the_author_meta( 'user_email' ), 170, 'mystery', esc_attr( get_the_author() ) ); ?>
								</div>
								<div class="author-box-description">
									<h4><a class="author-link url fn" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author" title="<?php printf( et_get_safe_localization( __( 'View all posts by %s', 'extra' ) ), get_the_author() ); ?>"><?php echo get_the_author(); ?></a></h4>
									<p class="note"><?php the_author_meta( 'description' ); ?></p>
									<ul class="social-icons">
										<?php foreach ( extra_get_author_contact_methods() as $method ) { ?>
											<li><a href="<?php echo esc_url( $method['url'] ); ?>" target="_blank"><span class="et-extra-icon et-extra-icon-<?php echo esc_attr( $method['slug'] ); ?> et-extra-icon-color-hover"></span></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>

						<?php
						$related_posts = extra_get_post_related_posts();

						if ( $related_posts && extra_is_post_related_posts() ) {  ?>
						<div class="et_extra_other_module related-posts">
							<div class="related-posts-header">
								<h3><?php esc_html_e( 'Ti potrebbero interessare anche', 'extra' ); ?></h3>
							</div>
							<div class="related-posts-content clearfix">
								<?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
								<div class="related-post">
									<div class="featured-image"><?php
									echo et_extra_get_post_thumb( array(
										'size'                       => 'extra-image-small',
										'a_class'                    => array('post-thumbnail'),
										'post_format_thumb_fallback' => true,
										'img_after'                  => '<span class="et_pb_extra_overlay"></span>',
									));
									?></div>
									<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<?php /* <p class="date"><?php extra_the_post_date();?></p> */?>
								</div>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							</div>
						</div>
						<?php } ?>
				<?php
					endwhile;
				else :
					?>
					<h2><?php esc_html_e( 'Post not found', 'extra' ); ?></h2>
					<?php
				endif;
				wp_reset_query();

				do_action( 'et_after_post' );
				?>

				<?php
				if ( ( comments_open() || get_comments_number() ) && 'on' == et_get_option( 'extra_show_postcomments', 'on' ) ) {
					comments_template( '', true );
				}
				?>
			</div><!-- /.et_pb_extra_column.et_pb_extra_column_main -->

			<?php get_sidebar(); ?>

		</div> <!-- #content-area -->
	</div> <!-- .container -->
	<?php endif; ?>
</div> <!-- #main-content -->

<?php get_footer();
