<?php get_header(); ?>
  <body>
    <div id="top_wrapper">
      <div id="menu_bar" class="items_pages animation_first">
        <a class='hover--showMenu'>
          <hr class="top_line menu_line">
          <hr class="center_line menu_line">
          <hr class="bottom_line menu_line">
          <h4>MENU</h4>
        </a>
      </div>
      <div id="menu">
        <a class='show_top' href="http://gogoipe3.com/">top</a>
        <hr>
        <a class='show_about' href="http://gogoipe3.com/about.html" title="about">about</a>
        <hr>
        <a href="http://gogoipe3.com/blog/">blog</a>
        <hr>
        <a class="show_shashin" href="http://gogoipe3.com/photograph.html" title="photograph">photograph</a>
        <hr>
        <!-- <a href="">illustration</a> -->
        <!-- <hr> -->
        <a href="mailto:taiki.kishiyama0913@gmail.com">contact</a>
        <hr>
        <div id='sns_router'>
          <a href="https://www.instagram.com/tai_kis_913/">
            <img src="http://gogoipe3.com/images/sns_icon/instagram_icon.png">
          </a>
          <a href="https://www.pinterest.jp/taikikishiyama/">
            <img src="http://gogoipe3.com/images/sns_icon/pinterest_icon.png">
          </a>
        </div>
      </div>
    
      <div class="items_title animation_second">
        <h1>blog.</h1>
      </div>
      <div class="scroll_down animation_first">
        <a>
          <h5>scroll down</h5>
          <div class='animation_bounce'>
            <hr class="scroller_left">
            <hr class="scroller_right">
          </div>
        </a>
      </div>
    </div>

    <div id='mainContents'>
      <ul>
        <?php if (have_posts()) : ?>
          <?php $count = 1; ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php if ($count % 5 == 0) : ?>
              <li class="hiding_posts_5gt hiding_posts_5lt blog_contents most_right_content">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php else : ?>
              <li class="hiding_posts_5gt hiding_posts_5lt blog_contents">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php endif; ?>
          <?php endwhile; ?>
          <?php $count = 1; ?>

          <?php while (have_posts()) : the_post(); ?>
            <?php if ($count % 4 == 0) : ?>
              <li class="hiding_posts_4gt hiding_posts_4lt blog_contents most_right_content">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php else : ?>
              <li class="hiding_posts_4gt hiding_posts_4lt blog_contents">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php endif; ?>
          <?php endwhile; ?>
          <?php $count = 1; ?>

          <?php while (have_posts()) : the_post(); ?>
            <?php if ($count % 3 == 0) : ?>
              <li class="hiding_posts_3gt hiding_posts_3lt blog_contents most_right_content">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php else : ?>
              <li class="hiding_posts_3gt hiding_posts_3lt blog_contents">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php endif; ?>
          <?php endwhile; ?>
          <?php $count = 1; ?>

          <?php while (have_posts()) : the_post(); ?>
            <?php if ($count % 2 == 0) : ?>
              <li class="hiding_posts_2gt hiding_posts_2lt blog_contents most_right_content">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php else : ?>
              <li class="hiding_posts_2gt hiding_posts_2lt blog_contents">
                <a href="<?php the_permalink() ?>">
                  <img src="<?php the_field('thumbnail-image'); ?>" alt="">
                </a>
                <p class=""><?php the_time('Y.m.d'); ?></p>
                <h2 class=""><?php the_title() ?></h2>
              </li>
		  	  <?php $count += 1 ?>
            <?php endif; ?>
          <?php endwhile; ?>
          <?php $count = 1; ?>

          <?php while (have_posts()) : the_post(); ?>
            <li class="hiding_posts_1 blog_contents">
              <a href="<?php the_permalink() ?>">
                <img src="<?php the_field('thumbnail-image'); ?>" alt="">
              </a>
              <p class=""><?php the_time('Y.m.d'); ?></p>
              <h2 class=""><?php the_title() ?></h2>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>  
    </div>
<?php get_footer(); ?>