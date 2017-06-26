<?php // Do not delete these lines
    // Text Domain: reSpare
    if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
        if (!empty($post->post_password)) { 
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
                <p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
            <?php return; } } $oddcomment = 'alt'; ?>

    <?php if ($comments) : ?>
    <h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?> | <a href="#<?php the_title(); ?>_commentform">Skip to comment form</a></h3> 
    <div class="commentPagination"><?php paginate_comments_links(); ?></div>
    <ol class="commentlist">
    <?php foreach ($comments as $comment) : ?>
        <li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
            <span class="commentAvatar"><?php echo get_avatar( $comment, 32 ); ?></span>
            <cite><?php comment_author_link() ?></cite>
            <?php if ($comment->comment_approved == '0') : ?>
            <em>Your comment is awaiting moderation.</em>
            <?php endif; ?>
            <small class="commentmetadata"> / <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php if (function_exists('quoter_comment')) { quoter_comment(); } ?> <?php edit_comment_link('e','',''); ?></small>
            <?php comment_text() ?>
        </li>
    <?php /* Changes every other comment to a different class */    
        if ('alt' == $oddcomment) $oddcomment = '';
        else $oddcomment = 'alt';
    ?>
    <?php endforeach; ?>
    </ol>
 <?php else : ?>
  <?php if ('open' == $post-> comment_status) : ?> 
     <?php else : ?>
        <p class="nocomments"></p>
    <?php endif; ?>
<?php endif; ?>