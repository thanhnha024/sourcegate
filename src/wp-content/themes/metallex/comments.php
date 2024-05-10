<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?>
      <div class="full_width">          
                <h3 class="fnt_25 mbot25 no_after"><?php echo esc_html__( 'Comments', 'metallex' );?></h3>
              <div class="comment_list_col">
          <?php wp_list_comments('callback=metallex_theme_comment'); ?>
          </div>
          <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( array(
                  'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'metallex' ),ENT_QUOTES),
                  'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'metallex' ),ENT_QUOTES),
                  ));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
                </div>
                <?php endif; ?> 

<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => '',        
                'class_form' => 'comment-form',                         
                'title_reply'=> esc_html__( 'Leave a Comment', 'metallex' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control leave_form" placeholder="'.esc_attr__('Enter Your Name', 'metallex').'">
                        </div>
                      </div>',
                    'email' => '<div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control leave_form" placeholder="'.esc_attr__('Enter Your Email Address', 'metallex').'">
                        </div>
                      </div>
                  </div>'  ,                                                                                 
                ) ),   
                'comment_field' => '<div class="row"><div class="col-md-12">
                        <div class="form-group">
                          <textarea rows="7" class="form-control leave_form" name="comment"'.$aria_req.' placeholder="'.esc_attr__('Write comment', 'metallex').'"></textarea>
                        </div>
                      </div></div>',                    
                 'label_submit' => esc_html__( 'submit now', 'metallex' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
    <?php if ( comments_open() ) : ?>
    <div class="full_width">
    <div id="ask-question-form" class="leave_cmt_col">
    <?php comment_form($comment_args); ?>
    </div>
    </div>
                        <?php endif; ?> 