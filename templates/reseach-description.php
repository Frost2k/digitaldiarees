<?php
/*
 * Template Name: Research Description
 *
 * The template for displaying Digital DIAREEs Research Description page
 *
 * @package JetBlack
 */

get_header();

?>

<?php
    $image = get_field('research_description_image');
    $picture = $image['sizes']['large'];
?>

        <div class="research-description-column">
            <div class="research-description-row">
                <div class="research-description-card">
                    <p><?php the_field('research_decription');?></p>
                    <div class="research-description-image-title-wrapper">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                    </div>
                    <div class="research-description-container">
                        <div class="research-image-caption-container">
                            <p><?php the_field('research_image_caption');?></p>
                        </div>
                        
                        <p><?php the_field('research_description_reference');?></p>
                    </div>
                </div>
            </div>
        </div>





<?php    
get_footer();
?>