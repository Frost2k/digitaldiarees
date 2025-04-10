<?php
/*
 * Template Name: Rosetta Tutorials
 *
 * The template for displaying Digital DIAREEs Rosetta Tutorials page
 *
 * @package JetBlack
 */

get_header();

?>
        <div class="tutorial-column">
            <h4><?php the_field('tutorial_description');?></h4>
            <?php
            if(have_rows('tutorial_fields')):  the_row();?>
                <div class="title-wrapper">
                    <div class="title-spacer">
                        <?php if(  get_sub_field('topic') ):?>
                            <div class="topic-title">
                                <h2>Topic</h2>
                            </div>
                        <?php endif; ?>
                        <?php if(  get_sub_field('presenter') ):?>
                            <div class="presenter-title">
                                <h2>Presenter</h2>
                            </div>
                        <?php endif; ?>
                        <?php if(  get_sub_field('presentation') ):?>
                            <div class="presentation-title">
                                <h2>Presentation</h2>
                            </div>
                        <?php endif; ?>
                        <?php if(  get_sub_field('tutorial') ):?>
                            <div class="tutorial-title">
                                <h2>Tutorial File</h2>
                            </div>
                        <?php endif; ?>
                        <?php if(  get_sub_field('tutorial_materials') ):?>
                            <div class="tutorial-materials-title">
                                <h2>Tutorial Materials</h2>
                            </div>
                        <?php endif; ?>
                        <?php if(  get_sub_field('movies') ):?>
                            <div class="movies-title">
                                <h2>Movies</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            reset_rows();
            if(have_rows('tutorial_fields')):?>

            <?php while( have_rows('tutorial_fields')): the_row();
            
            $presenter = get_sub_field('presenter');
            $presentation_file = get_sub_field('presentation');
            $tutorial_file = get_sub_field('tutorial');
            $tutorial_materials_file = get_sub_field('tutorial_materials');
            $movies = get_sub_field('movies');
            

            ?>
            <div class="tutorial-row">
                <div class="tutorial-card">
                    <div class="topic-row">
                        <p><?php the_sub_field('topic');?></p>
                    </div>
                    <?php if($presenter):?>
                        <div class="presenter-row">
                        <p><?php the_sub_field('presenter');?></p>
                        </div>
                    <?php endif;?>
                    <?php if($presentation_file):?>
                        <div class="presentation-row">
                            <a href="<?php echo $presentation_file['url']; ?>">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="pdf-download" width="40px">
                            </a>
                        </div>
                    <?php endif;?>
                    <?php if($tutorial_file):?>
                        <div class="tutorial-file-row">
                            <a href="<?php echo $tutorial_file['url']; ?>">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="pdf-download" width="40px">
                            </a>
                        </div>
                    <?php endif;?>
                    <?php if($tutorial_materials_file):?>
                        <div class="tutorial-materials-row">
                            <a href="<?php echo $tutorial_materials_file['url']; ?>">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Faenza-application-x-zip.svg" alt="pdf-download" width="40px">
                            </a>
                        </div>
                    <?php endif;?>
                    <?php if($movies):?>
                        <div class="movies-row">
                            <a href="<?php echo $movies; ?>">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_play_button_icon_%282013%E2%80%932017%29.svg" alt="youtube-link" width="60px">
                            </a>
                        </div>
                    <?php endif;?>
                </div>
            </div>
             <?php endwhile; ?>

            <?php endif; ?>
        </div>
<?php    
get_footer();
?>