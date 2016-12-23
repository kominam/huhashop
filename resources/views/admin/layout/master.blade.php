<!DOCTYPE html>
<html>
@include('admin.layout.includes.head')
<body class="hold-transition skin-blue sidebar-mini">
<noscript>
	Your script is turn off.Turn it on browser setting
</noscript>
@include('admin.layout.includes.header')
@include('admin.layout.includes.sidebar')
@yield('content')
@include('admin.layout.includes.footer')
@include('admin.layout.includes.script')
</body>
</html>