<div>

  Alessio Ratti Simba
</div>

<?php
/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function my_awesome_func( $data ) {
  $posts = get_posts( array(
    'author' => $data['id'],
  ) );

  if ( empty( $posts ) ) {
    return 'Alessio Ratti Mitico';
  }

  return $posts[0]->post_title;
} ?>
