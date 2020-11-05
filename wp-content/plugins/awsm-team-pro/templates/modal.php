<div id="<?php echo $this->add_id(array('awsm-team',$id));?>" class="awsm-grid-wrapper">
	<div class="awsm-modal">
	<?php if ($team->have_posts()): ?>
		<div class="awsm-grid-modal awsm-grid <?php echo $this->item_style($options);?>">
		<?php while ($team->have_posts()): $team->the_post();
    		$teamdata = $this->get_options('awsm_team_member', $team->post->ID);?>
                <div id="<?php echo $this->add_id(array('awsm-member',$id,$team->post->ID));?>" class="awsm-grid-card">
                    <a href="#" id="tigger-style-<?php echo $id.'-'.$team->post->ID; ?>" class="awsm-modal-trigger" data-trigger="#modal-style-<?php echo $id.'-'.$team->post->ID; ?>">
                        <figure>
                            <!-- <span class="awsm-grid-holder"> -->
                                <img src="<?php echo $this->team_thumbnail($team->post->ID);?>" alt="<?php the_title();?>">
                                <figcaption style="top:0%;left:0%;right:0%;bottom:0%;">
                                    <div class="awsm-personal-info">
                                        <span style="text-transform:uppercase; padding:10px 40px; display:inline-block; border:1px solid #fff;">View Bio</span>
                                    </div>
                                    <!-- .awsm-personal-info -->
                                </figcaption>
                            <!-- </span> -->
                            <!-- .awsm-grid-holder -->
                            <div class="awsm-personal-info" style="text-align:center; position:absolute; bottom:-4%; padding: .7rem 0rem 1rem; background:rgba(35,35,35,.8);">
                                <h3 style="color:#fff;"><?php the_title(); ?></h3>
                               	<?php $this->checkprint('<span>%s</span>', $teamdata['awsm-team-designation']);?>
                            </div>
                        </figure>
                    </a>
                </div>
			<?php endwhile; wp_reset_postdata();?>
		</div><!-- .grid -->
		<div class="awsm-modal-items <?php echo $this->item_style($options);?>">
		    <a href="#" class="awsm-modal-close"></a>
		    <div class="awsm-modal-items-main">
		    	<a href="#" class="awsm-nav-item awsm-nav-left"></a>
		    		<?php 
		    		while ($team->have_posts()): $team->the_post(); 
		    			$teamdata = $this->get_options('awsm_team_member', $team->post->ID);
		    			include( $this->settings['plugin_path'].'templates/partials/popup.php' );
		    		endwhile;
		    		?>	
		    	<a href="#" class="awsm-nav-item awsm-nav-right"></a>
		   	</div><!-- .awsm-modal-items-main -->
		</div><!-- .awsm-modal-items -->
	<?php endif;?>	
	</div>
</div>