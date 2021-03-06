<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.head')

        @yield('css')
    </head>


    <body>
        @include('includes.header-employer')


        @yield('content')

        @include('includes.footer')

    </body>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('/js/general/header-footer.js') }}"></script>

    @yield('js')

</html>