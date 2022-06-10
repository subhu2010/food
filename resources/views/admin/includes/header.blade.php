<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("page_title")</title>

    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/choices.js/choices.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.svg') }}" type="image/x-icon') }}">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- lineawesome cdn -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- xzoom -->
    <script src="{{ asset('admin-assets/vendors/xzoom/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin-assets/vendors/xzoom/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/xzoom/xzoom.css') }}" media="all" />
    <script type="text/javascript" src="{{ asset('admin-assets/vendors/xzoom/jquery.hammer.min.js') }}"></script>

    <!-- datatable -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/simple-datatables/style.css') }}">

    <!-- Tag Inputs -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" /> -->


    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/owl/owl.theme.default.min.css') }}">

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>

<body>