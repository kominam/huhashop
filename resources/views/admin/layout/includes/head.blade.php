<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Documentation</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	 <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href=" {{ asset('css/backend/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/backend/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/css/skins/_all-skins.min.css') }}">
    @stack('css')
    @stack('style')
    @stack('js-head')
    @stack('script-head')
</head>