<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage":{
    "@type":"WebPage",
    "@id":"https://google.com/article"
  },
  "headline": "Article headline",
  "image": {
    "@type": "ImageObject",
    "url": "https://google.com/thumbnail1.jpg",
    "height": 800,
    "width": 800
  },
  "datePublished": "2015-02-05T08:00:00+08:00",
  "dateModified": "2015-02-05T09:20:00+08:00",
  "author": {
    "@type": "Person",
    "name": "John Doe"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Google",
    "logo": {
      "@type": "ImageObject",
      "url": "https://google.com/logo.jpg",
      "width": 600,
      "height": 60
    }
  },
  "description": "A most wonderful article"
}
</script>

<!-- Now with WordPress using common hooks & plugin-defined logo -->

<?php 
    // Get the featured image.
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image( $img_id, 'full', true ); // Returns an array: [url, width, height]
    // Get the excerpt to use as a description. Could also use a plugin-defined description.
    $myExcerpt = get_the_excerpt(); 
    $tags = array("<p>", "</p>"); // Returns the excerpt inside <p> tags.
    $myExcerpt = str_replace($tags, "", $myExcerpt); // Remove <p> tags.
?>

<script type="application/ld+json">
    {
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage":{
    "@type":"WebPage",
    "@id":"<?php the_permalink(); ?>"
  },
  "headline": "<?php the_title() ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php echo $img_url[0]; ?>",
    "width": "<?php echo $img_url[1]; ?>",
    "height": "<?php echo $img_url[2]; ?>"
  },
  "datePublished": "<?php echo get_the_date('c'); ?>",
  "dateModified": "<?php echo get_the_modified_date('c'); ?>",
  "author": {
    "@type": "Person",
    "name": "<?php the_author_meta('display_name', 1); ?>"
  },
   "publisher": {
    "@type": "Organization",
    "name": "<?php bloginfo('name'); ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo get_option('logo'); ?>",
      <?php list($width, $height, $type, $attr) = getimagesize( get_option('logo') ); ?>
      "width": "<? echo $width; ?>",
      "height": "<? echo $height; ?>"
    }
  },
  "description": "<?php  echo $myExcerpt; ?>"
}
 </script>
