<!-- <h1>
    <a href="<?php the_permalink(); ?>">
        Check out <?php the_title(); ?>
    </a>
</h1> -->
<a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php nice_background('hero_image'); ?>" href="<?php the_permalink(); ?>">
<div class="hero-content white tc ph-3 ph4-l">
<h1 class="hero-heading f2 f1-l b mt0 mb3 ttu archivo lh-title"><?php the_title(); ?></h1>
<?php if( get_field('subhead') ): ?>
    <p class="hero-subhead f2 f1-l mb5 mb6-l mt0 ttu tenor lh-title"><?php the_field('subhead'); ?></p>
<?php endif; ?>
<?php if( get_field('date') ): ?>
<p class="date f6 ma0 ttu tracked archivo"><?php nice_date(get_field('date')); ?></p>
<?php endif; ?>
</div>
</a>