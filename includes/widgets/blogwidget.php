<?php

 /*
Plugin Name: Blogwidget
Plugin URI: http://lycaweb.com
Description: Blog widget
Author: David VarelaL (Lycaweb Ltd.)
Version: 1.0
Author URL: http://lycaweb.com
*/
add_action('widgets_init', 'blogwidget_load_widgets');

function blogwidget_load_widgets()
{
	register_widget('blogwidget_widget');
}

class blogwidget_Widget extends WP_Widget {
	
	function blogwidget_widget()
	{
		$widget_ops = array('classname' => 'blogwidget', 'description' => 'Muestra los &uacute;ltimos posts, con imagen, también filtrados por categor&iacute;as  ');

		$control_ops = array('id_base' => 'blogwidget-widget');

		$this->WP_Widget('blogwidget-widget', 'Blogwidget', $widget_ops, $control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		
		$title = $instance['title'];
		$post_type = 'all';
		$categories = $instance['categories'];
		$posts = $instance['posts'];
		$images = true;
		$rating = true;
		$category_link = get_category_link( $categories );
		echo $before_widget;
		?>
		
		<?php
		$post_types = get_post_types();
		unset($post_types['page'], $post_types['attachment'], $post_types['revision'], $post_types['nav_menu_item']);
		
		if($post_type == 'all') {
			$post_type_array = $post_types;
		} else {
			$post_type_array = $post_type;
		}
		?>
		
		<div class="allheadwid">
			
			<h3><?php echo $title; ?></h3>
			
			<?php
			$recent_posts = new WP_Query(array(
				'showposts' => $posts,
				'post_type' => $post_type_array,
				'cat' => $categories,
			));
			?>
			<?php
			$big_count = round($posts / 99);
			if(!$big_count) { $big_count = 1; }
			?>
			<?php $counter = 1; while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
			<?php
			if(has_post_format('video') || has_post_format('audio') || has_post_format('gallery')) {
				$icon = '<span class="' . get_post_format() . '-icon"></span>';
			} else {
				$icon = '';
			}
			?>
			<?php if($counter <= $big_count): ?>
			<?php if($counter == $big_count) { $last = ''; } else { $last = ''; }?>
			<div class="columc3">
			
			<h1><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><?php the_title(); ?></a></h1>
				<?php the_time('F j, Y'); ?>, <?php comments_popup_link(); ?>
			
				<?php if($images && has_post_thumbnail()): ?>
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'imagen-grande'); ?>
				<div id="bigimgblogwidget"><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" /></a></div>
				<?php else: ?>
				
				<?php endif; ?> 
				
				
				
				<div id="mytext"><?php the_excerpt(); ?></div>
			</div>
			
			
			
			<?php else: ?>
				<div class="columc32">
			
			<div id="theblogwidgetitle"><h1><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><?php the_title(); ?></a></h1>
			<?php the_time('F j, Y'); ?>, <?php comments_popup_link(); ?></div>

				
			
				<?php if($images && has_post_thumbnail()): ?>
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'imagen-grande'); ?>
				<div id="imgblogwidget"><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" /></a></div>
				<?php else: ?>
				
				<?php endif; ?>
				
				
								<div id="mytext2"><?php the_excerpt(); ?></div>
			
			</div>
			
			
			
			
			
			<?php endif; ?>
			<?php $counter++; endwhile; ?>
		
		</div><div id="clearclear"></div><div id="separator"></div>
		
		<?php
		echo $after_widget;
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['post_type'] = 'all';
		$instance['categories'] = $new_instance['categories'];
		$instance['posts'] = $new_instance['posts'];
		$instance['show_images'] = true;
		$instance['show_rating'] = true;
		
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Recent Posts', 'post_type' => 'all', 'categories' => 'all', 'posts' => 6);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">T&iacute;tulo:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('categories'); ?>">Categor&iacute;a:</label> 
			<select id="<?php echo $this->get_field_id('categories'); ?>" name="<?php echo $this->get_field_name('categories'); ?>" class="widefat categories" style="width:100%;">
				<option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>>All categories</option>
				<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
				<?php foreach($categories as $category) { ?>
				<option value='<?php echo $category->term_id; ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo $category->cat_name; ?></option>
				<?php } ?>
			</select>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('posts'); ?>">Posts:</label>
			<input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('posts'); ?>" name="<?php echo $this->get_field_name('posts'); ?>" value="<?php echo $instance['posts']; ?>" />
		</p>
		
		
	<?php }
}
?>