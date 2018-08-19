<?php get_header(); ?>
<body>
	<div class='main_background_img'>
		<img src="<?php the_field('background-image'); ?>" alt="">
	</div>
	<a href="/" class='close_btn'>
		<hr class='close_btn_line'>
		<hr class='close_btn_line reverse_cls_btn_line'>
	</a>

	<div class='contents_background'>
		<div class='contents_all'>
			<div class='contents_title'>
				<p class="title">
					<?php the_title(); ?>
				</p>

				<time datetime="<?php the_time('Y-m-d'); ?>">
					<?php the_time('Y.m.d'); ?>
				</time>
				<p>
					<?php $nowCategory = get_the_category(); ?>
					<?php $nowCategory = $nowCategory[0]; ?>
					<?php {echo $nowCategory->cat_name;} ?>
				</p>
			</div>

			<div class="contents_content">
				<p>
					<?php
						$this_content= wpautop($post->post_content);
						echo $this_content;
					?>	
				</p>
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>