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

<!-- With a WordPress plugin that defines an option for "logo" -->

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
 
<!-- Now with WordPress using the header image as the logo. Theme must support header image. -->

<?php // Get the header image. Returns a url.
    $img_url = get_header_image();
?>

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

<!-- Now with WordPress using the featured image as the logo -->

<?php // Get the featured image. Returns an array: [url, width, height]
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image( $img_id, 'full', true );
?>

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
