<!--[if IE 8]>
<html lang="{{ app()->getLocale() }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="{{ app()->getLocale() }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
          name="viewport"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Fonts-->
    <link rel="icon shortcut" href="/storage/fv-b.png">
    <!-- CSS Library-->

    {{--<style>--}}
    {{--:root {--}}
    {{----color-1st: {{ theme_option('primary_color', '#d8403f') }};--}}
    {{----primary-font: '{{ theme_option('primary_font', 'Roboto Slab') }}', sans-serif;--}}
    {{--}--}}
    {{--</style>--}}
      {!! Theme::header() !!}
            <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/venobox/venobox.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/style.css?v=6.<?php echo rand(1, 100) ?>">
    <link rel="stylesheet" type="text/css" href="/themes/newstv/assets/css/responsive.css">


    @if (class_exists('Language', false) && app()->getLocale()=='ar')
        <link rel="stylesheet" href="/themes/newstv/assets/css/ar-style.css">
    @endif
    @if (class_exists('Language', false) && app()->getLocale()=='en')
        <link rel="stylesheet" href="/themes/newstv/assets/css/en-style.css?v=<?php echo rand(1, 999) ?>">
    @endif
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170276153-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-170276153-4');
    </script>

</head>
<body>

<!-- Start Header Section -->
<header id="header-section">