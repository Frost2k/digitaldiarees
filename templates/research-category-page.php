<?php
/*
 * Template Name: Research Category
 *
 * The template for displaying Digital DIAREEs research page
 *
 * @package JetBlack
 */

get_header();

?>

<?php

$image = get_field('research_category_image');
$picture = $image['sizes']['thumbnail'];


$link = get_field('research_category_link');



?>
<div class="research-category-column">
    <div class="research-category-row">
        <div class="research-category-card">
        
        <?php if($image):?>
            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
        <?php endif;?>
            <div class="research-category-container">
                <h2><?php the_field('research_category_title');?></h2>
                <p><?php the_field('research_category_summary');?></p>
                <p>
                    <div class="research-category-link">
                        <?php if($link):?>
                                <a href="<?php echo $link['url'];?>">Back to Research</a>
                        <?php endif;?>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
if(have_rows('subtopic_category')):?>

    <?php while( have_rows('subtopic_category')): the_row();
    
    $image = get_sub_field('subtopic_category_image');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('subtopic_category_link');
    
    

    ?>
        <div class="subtopic-category-column">
            <div class="subtopic-category-row">
                <div class="subtopic-category-card">
                    <div class="subtopic-category-image-title-wrapper">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                            <h2><?php the_sub_field('subtopic_category_title');?></h2>
                        <?php endif;?>
                    </div>
                    <div class="subtopic-category-container">
                        <p><?php the_sub_field('subtopic_category_summary');?></p>
                        <p>
                            <div class="subtopic-category-link">
                                <?php if($link):?>
                                        <a href="<?php echo $link['url'];?>">View More</a>
                                <?php endif;?>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>




<?php    
get_footer();
?>