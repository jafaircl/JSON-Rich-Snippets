<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.example.com",
      "logo": {
          "@type": "ImageObject",
          "url": "http://www.example.com/logo.php",
          "width": "300",
          "height": "200"
      }
      }
    }
 </script>

<!-- With a WordPress plugin that defines an option for "logo" -->

<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.example.com",
      "logo": {
          "@type": "ImageObject",
          "url": "<?php echo get_option('logo'); ?>",
          <?php list($width, $height, $tyoe, $attr) = getimagesize( get_option('logo') ); ?>
          "width": "<? echo $width; ?>",
          "height": "<? echo $height; ?>"
      }
      }
    }
 </script>
 
<!-- Now with WordPress using the header image as the logo. Theme must support header image. -->

<?php // Get the header image. Returns a url.
    $img_url = get_header_image();
?>

<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.example.com",
      "logo": {
          "@type": "ImageObject",
          "url": "<?php echo $img_url; ?>",
          <?php list($width, $height, $tyoe, $attr) = getimagesize( $img_url ); ?>
          "width": "<? echo $width; ?>",
          "height": "<? echo $height; ?>"
      }
      }
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
      "@type": "Organization",
      "url": "http://www.example.com",
      "logo": {
          "@type": "ImageObject",
          "url": "<?php echo $img_url[0]; ?>",
          "width": "<?php echo $img_url[1]; ?>",
          "height": "<?php echo $img_url[2]; ?>"
      }
      }
    }
 </script>
