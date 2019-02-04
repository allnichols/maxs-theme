<?php /*
Template Name: Services
*/ get_header();?>

<div class="hero-services">
  <div class="call-to-action">
    <h1><?php the_field('main_title') ?></h1>
    <h3><?php the_field('sub_title') ?></h3>
  </div>
</div>

<section class="section_services">
  <div class="container">
    <h1>Services</h1>
  </div>
  <div class="container grid">
    <h4>Local Business SEO</h4>
    <h4>Copywriting</h4>
    <h4>UX & UI Design</h4>
    <h4>WordPress Development</h4>
    <h4>Website Redesign</h4>
  </div>
<hr>
  <div class="container">
    <h1>Process</h1>
  </div>

  <div class="container grid">

      <div class="col">
          <h2>Research</h2>
          <p>
            Here we determine what your needs are for your website.
          We'll begin with some questions to help determine your business and it's goals.
          Once we understand your business, we'll begin tracking web statistics of your current website
          (if you have an existing one) so we can accurately measure the success of the project.
        </p>
      </div>
      <div class="col">
          <h2>Design</h2>
          <p>
            After we've established your business goals, we'll begin
          designing your site to meet those goals. You will recieve a
          fully mocked up version of your new website.
        </p>
      </div>
      <div class="col">
          <h2>Development</h2>
          <p>
            We will then use the design that we have agreed upon and begin bringing your
          new website to life. Applying modern web Development techniques to make your new site fast
          fast across desktops, tablets and mobile devices.
        </p>
      </div>


      <div class="col">
          <h2>Testing</h2>
          <p>
            With a newly developed site, we'll use this phase to test it.
            Double checking functionality, and making sure it is bug free across all pages and devices.
          </p>
      </div>
      <div class="col">
          <h2>Launch</h2>
          <p>
            Well, congratulations, you have a new site up and running. It's out in the web for everybody to see.
          </p>
      </div>
      <div class="col">
          <h2>Data Analysis</h2>
          <p>
            We’ll monitor things to help determine what’s
            working best using data that’s collected from actual users
            interacting with your new website. You will also recieve a
            full report on all of the statistical improvements.
          </p>
      </div>

    </div>
  </div>
</section>

  <?php get_template_part("template-parts/call-to", "action") ?>




<?php get_footer(); ?>
