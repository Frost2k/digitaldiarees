<?php
/*
 * Template Name: Research Overview
 *
 * The template for displaying Digital DIAREEs research overview page
 *
 * @package JetBlack
 */

get_header();

?>

<?php
if(have_rows('research_overview')):?>

    <?php while( have_rows('research_overview')): the_row();
    
    $image = get_sub_field('research_image');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('research_link');
    
    

    ?>
        <div class="research-column">
            <div class="research-row">
                <div class="research-card">
                
                <?php if($image):?>
                    <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                <?php endif;?>
                    <div class="research-container">
                        <h2><?php the_sub_field('research_title');?></h2>
                        <p><?php the_sub_field('research_summary');?></p>
                        <p>
                            <div class="research-link">
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