<footer id="skills">
  <div class="container" >

        <div class="section_call">
          <div class="img-box">
            <img src="<?php the_field('image_of_me') ?>" alt="me" class="hide"/>
          </div>


            <div class="skills">

              <div class="name-info">
               <h4 class="hide">Allen 'Max' Nichols.</h4>
              <h5 class="hide">
              I'm a Self Taught Front-End Developer. I love clean readable code, learning new technologies, and improving my skills. I'm also a teacher!
              </h5>
              <h5 class="hide">Download my <a download href="<?php the_field('resume') ?>">resume</a>!</h5>
            </div>

            <div class="tech">
              <h4 class="hide">Skills:</h4>
              <p class="hide">HTML</p>
              <p class="hide">CSS</p>
              <p class="hide">SCSS</p>
              <p class="hide">JavaScript</p>
              <p class="hide">jQuery</p>
              <p class="hide">React</p>
            </div>
            </div>
        </div>
    </div>
</footer>


<div class="form-section">

<?php get_template_part('template-parts/content', 'form') ?>

</div>
