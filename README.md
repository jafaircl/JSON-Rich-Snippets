# JSON-Rich-Snippets
How to enable JSON+LD Rich Snippets for the Google Knowledge Graph and SERPs.

Here's an example defining a logo for an organization:

```json
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.example.com",
      "logo": "http://www.example.com/images/logo.png"
    }
 </script>
 ```
Combining 2 separate schema types or entities:

```json
<script type="application/ld+json">
    [{
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Organization 1",
      "url": "http://www.example.com",
      "logo": "http://www.example.com/images/logo.png"
    },{
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Organization 2",
      "url": "http://www.example.com",
      "logo": "http://www.example.com/images/logo.png"
    }]
 </script>
 ```
