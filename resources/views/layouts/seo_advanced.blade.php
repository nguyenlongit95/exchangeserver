<meta http-equiv="content-language" content="vi">
<meta name="robots" content="@if($seo && $seo->noindex == 1){{'noindex, nofollow'}}@else{{'index, follow'}}@endif">
<title>@if($seo){{$seo->title}}@endif</title>
<meta name="description" content="@if($seo){{ $seo->description }}@endif">
<meta name="keywords" content="@if($seo){{$seo->keywords}}@endif">

<meta http-equiv="refresh" content="300">
<!-- Open Graph data -->
<meta property="og:title" content="@if($seo){{$seo->title}}@endif">
<meta property="og:type" content="article">
<meta property="og:url" content="@if($seo){{url($seo->link)}}@endif" />
<meta property="og:image" content="@if($seo){{url($seo->avatar)}}@endif">
<meta property="og:description" content="@if($seo){{$seo->description}}@endif">
<meta property="og:site_name" content="@if($seo){{$seo->title}}@endif">
<meta property="article:published_time" content="{{date('d-m-Y')}}T18:05:18+05:00">
<meta property="article:modified_time" content="{{date('d-m-Y')}}T18:30:19+01:00">
<meta property="article:section" content="Tỷ giá ngoại tệ, ngân hàng, tin tức">
<meta property="article:tag" content="tỷ giá, ngoại tệ, bitcoin, giá vàng">
<meta property="fb:admins" content="nguyenlongit1308">

<!-- Twitter Card data -->
<meta name="twitter:card" content="@if($seo){{url($seo->avatar)}}@endif">
<meta name="twitter:site" content="@tygiainfo">
<meta name="twitter:title" content="@if($seo){{$seo->title}}@endif">
<meta name="twitter:description" content="@if($seo){{$seo->description}}@endif">
<meta name="twitter:creator" content="@tygiainfo">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="@if($seo){{url($seo->avatar)}}@endif">

@if($seo)
    {{--<link rel="alternate" hreflang="vi-vn" href="@if($seo){{url($seo->link)}}@endif">--}}
    <link rel="canonical" href="@if($seo){{url($seo->link)}}@endif">
@endif

<script type='application/ld+json'>
    {
    "@context":"http://schema.org",
    "@type":"WebPage",
    "url":"@if($seo){{url($seo->link)}}@endif",
    "name":"@if($seo){{$seo->title}}@endif",
    "potentialAction":{"@type":"SearchAction",
    "target":"https://tygia.info/?s={search_term_string}",
    "query-input":"required name=search_term_string"}}
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "organization",
        "name": "@if($seo){{$seo->title}}@endif",
        "url": "@if($seo){{url($seo->link)}}@endif",
        "logo": "@if($seo){{url($seo->avatar)}}@endif",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+840962129434",
            "contactType": "customer service",
            "contactOption": "TollFree",
            "areaServed": "VN",
            "availableLanguage": "Vietnamese"
        },
        "sameAs": [
            "https://www.facebook.com/tygiainfo",
            "https://twitter.com/tygiainfo",
            "https://www.linkedin.com/in/tygiainfo/",
            "https://www.pinterest.com/tygiainfo",
            "https://tygiainfo.tumblr.com"
        ]
    }
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FinancialService",
  "name": "@if($seo){{$seo->title}}@endif",
  "alternateName": "Web tỷ giá VN",
  "logo": "https://tygia.vn/storage/userfiles/images/logo.png",
  "image": "@if($seo){{url($seo->avatar)}}@endif",
  "description": "@if($seo){{$seo->description}}@endif",
  "hasMap": "https://www.google.com/maps/place/K%C3%AAnh+th%C3%B4ng+tin+t%E1%BB%B7+gi%C3%A1/@20.9870012,105.7811747,15z/data=!4m5!3m4!1s0x0:0xc7c775e4dd5f1a1!8m2!3d20.9870012!4d105.7811747",
  "email": "mailto:QUANTRI.TYGIAINFO@GMAIL.COM",
  "url": "@if($seo){{url($seo->link)}}@endif",
  "telephone": "0962129434",
  "priceRange": "50000VND-5000000000VND",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Tòa Nhà TSQ Euroland, Mộ Lao, Hà Đông, Hà Nội",
    "addressLocality": "Hà Đông",
	"addressRegion": "Hà Nội",
    "postalCode": "100000",
    "addressCountry": "Việt Nam"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 20.9870012,
    "longitude": 105.7811747
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/tygiainfo",
    "https://twitter.com/tygiainfo",
	"https://www.linkedin.com/in/tygiainfo/",
	"https://www.pinterest.com/tygiainfo",
	"https://tygiainfo.tumblr.com",
	"https://soundcloud.com/tygiainfo",
	"https://www.youtube.com/channel/UCGChOA0TUO3yQOq03UYjzXQ",
    "https://sites.google.com/site/tygiainfo/",
	"https://tygiainfo.blogspot.com/",
   	"https://medium.com/@tygiainfo",
	"https://www.reddit.com/user/tygiainfo",
	"https://ello.co/tygiainfo",
    "https://tygia.info"
  ]
}
</script>
@if(request()->route()->getName() !== 'tin-tuc' && request()->route()->getName() !== 'chi-tiet')
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Article",
        "mainEntityOfPage": "@if($seo){{url($seo->link)}}@endif",
        "headline": "@if($seo){{$seo->h1 ?? $seo->title}}@endif cập nhật ngày {{Carbon\Carbon::today()->format('d/m/Y')}}",
        "image": {
          "@type": "ImageObject",
          "url": "@if($seo){{url($seo->avatar)}}@endif",
          "height": 300,
          "width": 600
        },
        "datePublished": "{{Carbon\Carbon::today()->toDateTimeString()}}",
        "dateModified": "{{Carbon\Carbon::today()->toDateTimeString()}}",
        "author": {
          "@type": "Person",
          "name": "Tygiainfo"
        },
        "publisher": {
          "@type": "Organization",
          "name": "Tygiainfo",
          "logo": {
            "@type": "ImageObject",
            "url": "https://tygia.info/logo.png",
            "width": 176,
            "height": 50
          }
        },
        "description": "@if($seo){{$seo->description}}@endif"
      }
</script>
@endif
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "Long Nguyen",
        "jobTitle": "CEO",
        "image":"https://tygia.info/CMS/Content/longnguyen.JPG",
        "url": "https://tygia.info",
        "sameAs":[
            "https://www.facebook.com/tygiainfo",
            "https://plus.google.com/+longnguyen"
        ],
        "AlumniOf":[ "Trường trung học phổ thông Quế Lâm","Viện Đại học Mở Hà Nội" ],
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Ha Noi",
            "addressRegion": "vietnam"
        }
    }
</script>
