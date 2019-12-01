<div class="<?php if(is_sticky()){echo 'col s12 left sticky-post';}else{echo 'masonry-gallery-item';} ?>" id="<?php the_ID(); ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="card hoverable">
			<div class="card-image waves-effect waves-block waves-light">
				<div class="activator">
					<?php echo materialize_template_card_image() ?>
				</div>
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4"><?php the_title('', ''); ?><i class="material-icons right">more_vert</i></span>
					<?php the_tags ('<ul><li class="chip">', '</li><li class="chip">', '</li></ul>'); ?>
				<p><a href="<?php the_permalink(); ?>"><?php _e("IR A LA RECETA", "blog-recetas") ?></a></p>
			</div>
			<div class="card-reveal">
				<span class="card-title grey-text text-darken-4"><?php the_title('', ''); ?><i class="material-icons right">close</i></span>
				<?php the_excerpt(); ?>
				<?php the_category(' '); ?>
				</br>
				</br>
				<a href="<?php the_permalink(); ?>"><?php _e("IR A LA RECETA", "blog-recetas") ?></a>
				<br/>
				<br/>
			</div>
		</div>
	</article>
</div>
