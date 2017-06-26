<ul><?php
$output = wp_list_pages('echo=0&depth=1&title_li=<h2>Top Level Pages </h2>' );
if (is_page( )) {
  $page = $post->ID;
  if ($post->post_parent) {
    $page = $post->post_parent;
  }
  $children=wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
  if ($children) {
    $output = wp_list_pages ('echo=0&child_of=' . $page . '&title_li=');
  }
}
echo $output;
?></ul>