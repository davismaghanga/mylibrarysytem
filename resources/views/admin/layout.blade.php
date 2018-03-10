<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Administrator</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('css/select2.css')}}" />
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/jquery.gritter.css')}}" />
    <style>
        .select2-drop-active{
            z-index: 999999;
        }
    </style>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'/>

</head>
<body>
<section id="container">
    @include('admin.header.header')
    @include('admin.sidebar.sidebar')
    <div id="content">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif

        @yield('content')

    </div>
    </section>
<script src="{{asset('ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>

<script src="{{asset('js/excanvas.min.js')}}"> </script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('js/jquery.peity.min.js')}}"></script>
<script src="{{asset('js/matrix.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/matrix.calendar.js')}}"></script>
<script src="{{asset('js/matrix.chat.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/matrix.form_validation.js')}}"></script>
<script src="{{asset('js/jquery.wizard.js')}}"></script>
<script src="{{asset('js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/matrix.popover.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/matrix.tables.js')}}"></script>
<script src="{{asset('js/matrix.interface.js')}}"></script>
<script src="{{asset('js/matrix.form_common.js')}}"></script>
<script type="text/javascript"></script>
</body>

</html>