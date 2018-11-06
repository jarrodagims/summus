<?php
	if(have_posts()) {
    	?>
    	<?php
		while(have_posts()) {
			the_post();

			$permalink = get_permalink();

			if(current_user_can('edit_pages')) {
				$edit_url = get_edit_post_link();
				$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">" . __('Edit Post','sherpa') . "</a></small>";
			} else {
				$edit_link = "";
			}

			if(is_home()):
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'blog_featured_image', true);
                $thumb_url = $thumb_url_array[0];

                if(empty($thumb_url) || $thumb_url == SITEURL . '/wp-includes/images/media/default.png')  {
                    $thumb_url = get_stylesheet_directory_uri() . '/img/placeholder.png';
                }

			endif;

			echo "<article class='col'>";
			echo "<div class=\"sidebar-content\">";
			if(!empty($thumb_url)):
			?>
			<a href="<?=$permalink?>">
			<img src="<?=$thumb_url?>" alt="<?=get_the_title()?>" class="blog-pic" />
			</a>

			<?php
			endif;
			echo '<h3><a href="' . $permalink . '">';
            echo short_title('...', 5);
            echo '</a>' . $edit_link . '</h3>';
            sherpa_excerpt();
            echo "</div>";
			echo "</article>";
		}
		?>

        	<div class="col-sm-6 text-sm-left text-xs-center">
            	<?php previous_posts_link( 'Newer posts' ); ?>
        	</div>
        	<div class="col-sm-6 text-sm-right text-xs-center">
            	<?php next_posts_link( 'Older posts' ); ?>
        	</div>
		<?php
	}