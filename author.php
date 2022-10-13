<?php

/**
 * The template for displaying author page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2
 */

get_header();
global $current_user;
wp_get_current_user();
$user_login = $current_user->user_login;
$user_id = $current_user->ID;

?>

<?php


/* Get user info. */
global $current_user, $wp_roles;
?>
<div class="col-md-12">
    <div class="col-md-4" >
                    <p class="form-username">
                        <label for="first-name"><?php _e('First Name', 'aspace'); ?></label>
                        <input class="text-input" name="first-name" type="text" id="first-name" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>" />
                    </p><!-- .form-username -->
                    <p class="form-username">
                        <label for="last-name"><?php _e('Last Name', 'aspace'); ?></label>
                        <input class="text-input" name="last-name" type="text" id="last-name" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>" />
                    </p><!-- .form-username -->
                    <p class="form-email">
                        <label for="email"><?php _e('E-mail *', 'aspace'); ?></label>
                        <input class="text-input" name="email" type="text" id="email_author_card" value="<?php the_author_meta( 'user_email', $current_user->ID ); ?>" />
                    </p><!-- .form-email -->
                    <p class="form-url">
                        <label for="url"><?php _e('Website', 'aspace'); ?></label>
                        <input class="text-input" name="url" type="text" id="url" value="<?php the_author_meta( 'user_url', $current_user->ID ); ?>" />
                    </p><!-- .form-url -->
         
                    <p class="form-textarea">
                        <label for="description"><?php _e('Biographical Information', 'aspace') ?></label>
                        <textarea name="description" id="description" rows="3" cols="50"><?php the_author_meta( 'description', $current_user->ID ); ?></textarea>
                    </p><!-- .form-textarea -->

</div>
<div class="col-md-4 out-of-bound-img--full" >

<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>

</div>






<div class="card ">
<div class="card-header">




<section class="blog blog-index">
                    <h2 class="display-6 mb-5 section-heading">All Blog Posts:</h2>
                <?php 

                while(have_posts()) {
                    the_post();
                
                
                ?>
                            <div class="container-fluid blog-index-container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="card mb-3">
                                        <a href="<?php the_permalink(); ?>"></a>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"></a>
                                                <h5 class="card-title"><?php the_title(); ?></h5>
                                                <div class="card-meta">
                                                Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> in 
                                                <a href="#"><?php echo get_the_category_list(', ') ?></a>
                                                </div>
                                                <p class="card-text"><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                        wp_reset_query(); 
                        
                    ?>
                    </section>
   
   

   </div>
 </div>


</div>




            <?php





get_footer();