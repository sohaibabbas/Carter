<?php get_header(); ?>
<div class="ts narrow container" style="padding-top: 20px;"><div class="ts stackable grid">
    
<?php if ( have_posts() ) : ?>
<div class="twelve wide column"><div class="ts two stackable waterfall cards">
<?php while ( have_posts() ) : the_post(); ?>
<div class="ts card">
			<a class="image" href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) { ?>  
					<?php the_post_thumbnail(); ?>
				<?php } else {?>  
					<script src="//gnehs.github.io/RandomPic/randompicture.js"></script>  
				<?php } ?> 
			</a>
			<div class="content">
        		<div class="header"><?php the_title(); ?></div>
       			<div class="meta">
            		<div><?php the_time('Y/n/j') ?> </div>
					<div><?php comments_number(__( 'No one commented', 'Carter' ),__( '1 Comment', 'Carter' ),__( '% Comments', 'Carter' )); ?></div>
					<div>@<?php the_author() ;?></div>
        		</div>
				<div class="description">
					<?php the_excerpt(); ?>
				</div>
			</div>
			<div class="ts fluid bottom attached buttons post operation">
				<a class="ts labeled icon button click load" href="<?php the_permalink(); ?>"><i class="unhide icon"></i><?php esc_html_e( 'Read More', 'Carter' ); ?></a>
				<?php edit_post_link( '<i class="write icon"></i>' . __( 'Edit', 'Carter' ), '', '', '','ts labeled icon button click load' ); ?> 
			</div>
		</div>
<?php endwhile; ?>
</div></div>
<?php else : ?>
<div class="twelve wide column"><br>
	<div class="ts large heading slate">
		<span class="header"><?php esc_html_e( 'Search Results', 'Carter' ); ?></span>
		<span class="description"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Carter' ); ?></span>
		<div class="action">
			<a class="ts primary button" title="<?php bloginfo('name'); ?>"  href="<?php echo home_url(); ?>/"><?php esc_html_e( 'Home', 'Carter' ); ?></a>
		</div>
	</div>
</div>
<?php endif; ?>
    <div class="four wide column">
		<?php get_sidebar(); ?>
	</div>
</div></div>

<?php get_footer(); ?>