	<?php get_header() ?>
	
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>January 1st, 2013</h5>
          <p>2013 sees the redesign of our website. <a href="#">Read more</a></p>
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="#">First Link</a></li>
            <li><a href="#">Another Link</a></li>
            <li><a href="#">And Another</a></li>
            <li><a href="#">Last One</a></li>
          </ul>
        </div>
        <div class="sidebar">
          <h3>More Useful Links</h3>
          <ul>
            <li><a href="#">First Link</a></li>
            <li><a href="#">Another Link</a></li>
            <li><a href="#">And Another</a></li>
            <li><a href="#">Last One</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        <?php
        
        	if(have_posts()):
        		while(have_posts()):
        		the_post();
        		?>
        		<div>
        			
        		<a href="<?php the_permalink(); ?>" alt='<?php the_title(); ?>'><?php the_title(); ?></a>
        		<?php
        		the_content();
        		
        			
        			
        			?>
        			
        		</div>  
        		
        		<?php
        		endwhile;
        		endif; ?>      
>
      </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <?php get_footer()?>
