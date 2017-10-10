<section class="container">
  <div class="row">
    <div class="grid-xs-12 grid-sm-8 grid-md-8">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <div class="grid-xs-12 grid-sm-4 grid-md-4">
      <?php dynamic_sidebar('sidebar-primary'); ?>
    </div>
  </div>
</section>