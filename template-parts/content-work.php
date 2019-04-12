
    <div class="work">

      <div class="work_img hide-work">
        <?php the_post_thumbnail('medium')?>
      </div>

        <div class="work_description">
          <h2 class="hide-work"><?php the_title(); ?></h2>
          <p class="hide-work"><?php the_field('description_of_project') ?></p>
          <a href="<?php the_field('link_to_site'); ?>" class="btn btn-work hide-work"><?php the_field('work_btn_text'); ?></a>

        </div>



      </div>
