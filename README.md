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
An example from an AMP page article:

```json
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "headline": "&#039;Public option&#039; makes a comeback with Clinton&#039;s endorsement",
      "alternativeHeadline": "&#039;Public option&#039; makes a comeback with...",
      "datePublished": "2016-02-23T10:40:16-05:00",
      "dateModified": "2016-02-23T10:46:48-05:00",
      "image": {
        "@type": "ImageObject",
        "url": "http://www.msnbc.com/sites/msnbc/files/styles/ratio--3-2--770x513/public/509821238.jpg?itok=iPfj6VNb",
        "width": 770,
        "height": 513
      },
      "author": {
        "@type": "Person",
        "name": "Steve Benen"
      },
      "publisher": {
        "@type": "Organization",
        "name": "MSNBC",
        "logo": {
          "@type": "ImageObject",
          "url": "http://www.msnbc.com/sites/msnbc/themes/leanforward/images/site-header/msnbc-logo-small2x.png",
          "width": 254,
          "height": 46
        }
      },
      "description": "One of the most popular ideas of the health care fight is back. And this time, there&#039;s nothing Joe Lieberman can do about it.",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "http://www.msnbc.com/rachel-maddow-show/public-option-makes-comeback-clintons-endorsement"
      }
    }
  </script>
  ```
