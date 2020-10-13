<?php 
// Create id attribute allowing for custom "anchor" value.
$id = 'project-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'project';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<section id="lukania" class="<?php echo esc_attr($className); ?>">
    <div class="project__gallery">
    <a href="./<?php the_field('project_name'); ?>.html">
        <div class="project__gallery__img-container">
        <?php the_field('gallery'); ?>
        </div>
    </a>
    </div>
    <div class="project__description">
    <a href="#">
        <h2 class="h2-italic"><?php the_field('project_title'); ?></h2>
        <p><?php the_field('first_p'); ?></p>
        <p><span><?php the_field('second_p'); ?></span></p>
        <p><?php the_field('third_p'); ?></p>
    </a>
    </div>
    <a class="project__btn" href="./<?php the_field('project_name'); ?>.html"
    ><button><p>Scopri di più</p></button></a
    >
</section>