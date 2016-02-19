<script type="application/ld+json">
{
  "@context":"http://schema.org",
  "@type":"HealthClub",
  "@id":"http://daveshouseofyoga.example.com/",
  "name":"Dave's House of Yoga",
  "address":{
    "@type":"PostalAddress",
    "streetAddress":"3986 Rivermark Pkwy",
    "addressLocality":"Santa Clara",
    "addressRegion":"CA",
    "postalCode":"95054",
    "addressCountry":"US"
  },
  "geo":{
    "@type":"GeoCoordinates",
    "latitude":37.3952149,
    "longitude":-121.9474023
  },
  "telephone":"+14085551135",
  "potentialAction":{
    "@type":"ReserveAction",
    "target":{
      "@type":"EntryPoint",
      "urlTemplate":"https://www.example.com/reserve?merchantId=20373",
      "inLanguage":"en-US",
      "actionPlatform":[
        "http://schema.org/DesktopWebPlatform",
        "http://schema.org/IOSPlatform",
        "http://schema.org/AndroidPlatform"
      ]
    },
    "result":{
      "@type":"HealthClubReservation",
      "name":"Book a class"
    }
  }
}
</script>
