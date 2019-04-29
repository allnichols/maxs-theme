<footer>
  <div class="container" id="skills">

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
              <h5 class="hide"><a download href="<?php the_field('resume') ?>"> resume</a></h5>
            </div>

            <div class="tech">
              <h4 class="hide">Skills:</h4>
              <p class="hide">HTML</p>
              <p class="hide">CSS</p>
              <p class="hide">SCSS</p>
              <p class="hide">JavaScript</p>
              <p class="hide">jQuery</p>
              <p class="hide">React</p>
              <p class="hide">React Router</p>
            </div>
            </div>


        </div>
    </div>
    <div class="form-section">
      <section class="container form">
      <h2>Say Hello!</h2>
        <?php the_content(); ?>
      </section>
    </div>
</footer>


