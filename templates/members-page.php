<?php
/*
 * Template Name: Members Page
 *
 * The template for displaying members page
 *
 * @package JetBlack
 */

get_header();

?>

<?php
if(have_rows('principle_investigator')):?>
    
    <div class="members-page-header">
        <h1>Principal Investigators</h1>
    </div>

    <?php while( have_rows('principle_investigator')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('research_professor')):?>

    <div class="members-page-header">
        <h1>Research Professors</h1>
    </div>

    <?php while( have_rows('research_professor')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('teaching_faculty')):?>

    <div class="members-page-header">
        <h1>Teaching Faculty</h1>
    </div>

    <?php while( have_rows('teaching_faculty')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('post_doctoral_fellow')):?>

    <div class="members-page-header">
        <h1>Post-Doctoral Fellows</h1>
    </div>

    <?php while( have_rows('post_doctoral_fellow')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('administrator')):?>

    <div class="members-page-header">
        <h1>Administrators</h1>
    </div>

    <?php while( have_rows('administrator')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('programmer')):?>

    <div class="members-page-header">
        <h1>Programmers</h1>
    </div>

    <?php while( have_rows('programmer')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card"> 
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('research_assistant')):?>

    <div class="members-page-header">
        <h1>Research Assistants</h1>
    </div>

    <?php while( have_rows('research_assistant')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card"> 
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('graduate_student')):?>

    <div class="members-page-header">
        <h1>Graduate Students</h1>
    </div>

    <?php while( have_rows('graduate_student')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card">
                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>


<?php
if(have_rows('undergraduate_student')):?>

    <div class="members-page-header">
        <h1>Undergraduate Students</h1>
    </div>

    <?php while( have_rows('undergraduate_student')): the_row();
    
    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    

    $link = get_sub_field('profile_link');
    
    

    ?>
        <div class="member-row">
            <div class="member-column">
                <?php if($link):?>
                <a href="<?php echo $link['url'];?>">
                    <div class="member-card">

                        <?php if($image):?>
                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                        <?php endif;?>
                        <div class="member-container">
                            <h2><?php the_sub_field('name');?></h2>
                            <h5><?php the_sub_field('affiliation');?></h5>
                        </div>
                    </div>
                </a>
                <?php endif;?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>

<?php    
get_footer();
?>