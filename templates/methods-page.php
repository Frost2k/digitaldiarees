<?php
/*
 * Template Name: Methods
 *
 * The template for displaying Digital DIAREEs methods page
 *
 * @package JetBlack
 */

get_header();

?>

<?php
if(have_rows('methods')):?>

    <?php while( have_rows('methods')): the_row();
    
    $image = get_sub_field('methods_image');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('methods_link');
    
    

    ?>
        <div class="methods-column">
            <div class="methods-row">
                <div class="methods-card">
                    <div class="methods-image-title-wrapper">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                            <h2><?php the_sub_field('methods_title');?></h2>
                        <?php endif;?>
                    </div>
                    <div class="methods-container">
                        <p><?php the_sub_field('methods_summary');?></p>
                        <p>
                            <div class="methods-link">
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