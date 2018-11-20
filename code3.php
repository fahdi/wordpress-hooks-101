function publish_post_tweet($post_ID) {
  global $post;
  // Code to send a tweet with post info
}

add_action('publish_post', 'publish_post_tweet');