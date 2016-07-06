<?php
/**
 * Template Name: UX Guidelines
 */

get_header(); ?>


<div class="page-header">
	<div class="site-main">
		<h1>UX Guidelines</h1>
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
		
		
					<!--begin Performance-->
					<section id="screen-resolutions">
						  <h1>Screen Resolutions</h1>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </section>
					  
					  <section id="saving-digital-assets">
						  <h1>Saving Digital Assets</h1>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </section>
					  
					  
					  
					  
					  
					  <!--/Brand & Style-->
					  
					  
					  <section id="page-elements">
					    <section id="tap-area-sizing">
						    <h1>Tap area sizing</h1>
						    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
					    </section>
					    <section id="accessibility">
						    <h1>Accessibility</h1>
						    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
					    </section>
					    
					   
					
					  </section>
					  
					
					</div>
		

		
					<div class="col-md-4 scrollspy" id="myScrollspy">
						  <ul id="nav" class="nav hidden-xs hidden-sm affix" data-spy="affix" data-offset-top="200">
						    <li>
						    	<h2>Performance</h2>
								<ul class="nav">
						        <li>
						          <a href="#screen-resolutions">
						            Screen resolutions
						          </a>
						        </li>
						        <li>
						          <a href="#saving-digital-assets">
						           Saving digital assets
						          </a>
						        </li>
						        
						
						      </ul><!--end of sub navigation-->
						    </li>
						    <li>
						      <h2>Usability</h2>
						      <ul class="nav">
						        <li>
						          <a href="#tap-area-sizing">
						            Tap area sizing 
						          </a>
						          
						          	
						        </li>
						        <li>
						          <a href="#accessibility">
						            Accessibility
						          </a>
						        </li>
						
						      </ul><!--end of sub navigation-->
						    </li>    
						
						  </ul><!-- end of main navigation -->
					</div>
					
					
					
							

	</main><!-- .site-main -->


</div><!-- .content-area -->

<?php get_footer(); ?>
