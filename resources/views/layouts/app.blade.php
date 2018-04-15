<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @hasSection('title')
        <title>@yield('title') caro.codes | Home</title>
    @endif

{{-- site level styles --}}
@section('site-stylesheets')
    {{ Html::style(mix('css/all.css')) }}
@show

@yield('page-stylesheets')

</head>
<body>

    @section('header')
        @include('header')
    @show
    {{--  main content --}}
    @yield('content')

    {{--  footer --}}
    <footer>
        @include('footer')
    </footer>



@section('page-javascript')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
<script type = "text/javascript"
        src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>

<script type = "text/javascript"
        src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
</script>
@show

</body>

</html>