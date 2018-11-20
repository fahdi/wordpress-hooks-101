// if the page is called 'debug'
function cleanup($content) {   
  return strip_tags($content);
}

add_filter( 'the_content', 'cleanup' );
