<?php
/**
 * Template Name: Style Guide
 */

get_header(); ?>


<div class="page-header">
	<div class="site-main">
		<h1>Digital Style Guide</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
	</div>
</div>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<div class="col-md-8 content-sections">

						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
				
							// Include the page content template.
							get_template_part( 'template-parts/content', 'page' );
				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
				
							// End of the loop.
						endwhile;
						?>
		
		
					<!--begin Brand & Style-->
					<section id="color">
						  <h1>Color</h1>
						  	<div class="row">
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes primary_sco-brick-red">
								  	<div class="palette-info light">
										<span class="sass-var">$scoBrickRed</span>
										<span class="hex">#991909</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-fire-red">
								  	<div class="palette-info light">
										<span class="sass-var">$scoFireRed</span>
										<span class="hex">#9e191c</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes primary_sco-dark-red">
								  	<div class="palette-info light">
										<span class="sass-var">$scoDarkRed</span>
										<span class="hex">#c1301d</span>
								  	</div>								  	
							  	</div>
						  	</div>
						  	
						  	<div class="row">
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-med-dark-red">
								  	<div class="palette-info light">
										<span class="sass-var">$scoMedDarkRed</span>
										<span class="hex">#c23335</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes primary_sco-red">
								  	<div class="palette-info light">
										<span class="sass-var">$scoRed</span>
										<span class="hex">#df533f</span>
								  	</div>
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-light-red">
								  	<div class="palette-info light">
										<span class="sass-var">$scoLightRed</span>
										<span class="hex">#dc585b</span>
								  	</div>								  	
							  	</div>
						  	</div>
						  	
						  	<div class="row">
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes primary_sco-salmon">
								  	<div class="palette-info light">
										<span class="sass-var">$scoSalmon</span>
										<span class="hex">#fa7867</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes primary_sco-pink">
								  	<div class="palette-info">
										<span class="sass-var">$scoPink</span>
										<span class="hex">#ffa093</span>
								  	</div>
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-dark-orange">
								  	<div class="palette-info light">
										<span class="sass-var">$scoDarkOrange</span>
										<span class="hex">#ef6704</span>
								  	</div>
							  	</div>
						  	</div>
						  	
						  	<div class="row">
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-orange">
								  	<div class="palette-info light">
										<span class="sass-var">$scoOrange</span>
										<span class="hex">#f41b8b</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-light-orange">
								  	<div class="palette-info light">
										<span class="sass-var">$scoLightOrange</span>
										<span class="hex">#ffa265</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes secondary_sco-dark-gray">
								  	<div class="palette-info light">
										<span class="sass-var">$scoDarkGray</span>
										<span class="hex">#424145</span>
								  	</div>								  	
							  	</div>						  	
						  	</div>
						  	
						  	<div class="row">	
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes secondary_sco-med-gray">
								  	<div class="palette-info light">
										<span class="sass-var">$scoMedGray</span>
										<span class="hex">#605f63</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes secondary_sco-med-light-gray">
								  	<div class="palette-info light">
										<span class="sass-var">$scoMedLightGray</span>
										<span class="hex">#7d7c80</span>
								  	</div>
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes secondary_sco-light-gray">
								  	<div class="palette-info">
										<span class="sass-var">$scoLightGray</span>
										<span class="hex">#efefef</span>
								  	</div>								  	
							  	</div>
						  	</div>					  	
						  							  	
						  	<div class="row">
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-green">
								  	<div class="palette-info light">
										<span class="sass-var">$scoGreen</span>
										<span class="hex">#327069</span>
								  	</div>
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-med-green">
								  	<div class="palette-info light">
										<span class="sass-var">$scoMedGreen</span>
										<span class="hex">#518782</span>
								  	</div>								  	
							  	</div>
							  	<div class="col-md-4 col-sm-4 col-xs-4 palettes tertiary_sco-light-green">
								  	<div class="palette-info light">
										<span class="sass-var">$scoLightGreen</span>
										<span class="hex">#76a09c</span>
								  	</div>								  	
							  	</div>
						  	</div>
					  </section>
					  
					  <section id="typography">
						  <h1>Typography</h1>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </section>
					  
					  <section id="logos">
						  <h1>Logos</h1>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </section>
					  
					  
					  
					  <!--/Brand & Style-->
					  
					  
					  <section id="page-elements" class="parent">
					    <section id="ctas-buttons">
						    <h1>CTAs/buttons</h1>
						    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
					    </section>
					    <section id="form-fields">
						    <h1>Form fields</h1>
						    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
					    </section>
					    
					    <section id="icons">
						    <h1>Icons</h1>
						    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
					    </section>
					
					  </section>
					  
					  <section id="responsive-grid">
						    <h1>Responsive grid</h1>
						    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
					    </section>
					</div>
		

		
					<div class="col-md-4 scrollspy" id="myScrollspy">
						  <ul id="nav" class="nav hidden-xs hidden-sm affix" data-spy="affix" data-offset-top="200">
						    <li>
						    	<h2>Brand & Style</h2>
								<ul class="nav">
						        <li>
						          <a href="#color">
						            Color
						          </a>
						        </li>
						        <li>
						          <a href="#typography">
						           Typography
						          </a>
						        </li>
						        <li>
						          <a href="#logos">
						           Logo
						          </a>
						        </li>
						
						      </ul><!--end of sub navigation-->
						    </li>
						    <li>
						      <h2>Components</h2>
						      <ul class="nav">
						        <li>
						          <a href="#page-elements">
						            Page elements <span class="fa fa-angle-double-right"></span>
						          </a>
						          
						          	<ul class="nav">
								        <li>
								          <a href="#ctas-buttons">
								            CTAs/buttons
								          </a>
								        </li>
								        <li>
								          <a href="#form-fields">
								            Form fields
								          </a>
								        </li>
								         <li>
								          <a href="#icons">
								            Icons
								          </a>
								        </li>
								
								     </ul><!--end of page elements sub-sub navigation-->
						        </li>
						        <li>
						          <a href="#responsive-grid">
						            Responsive grid
						          </a>
						        </li>
						
						      </ul><!--end of sub navigation-->
						    </li>    
						
						  </ul><!-- end of main navigation -->
					</div>
					
					
					
							

	</main><!-- .site-main -->


</div><!-- .content-area -->

<?php get_footer(); ?>
