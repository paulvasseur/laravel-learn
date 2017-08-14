@include('templates.header')
<body>
<div class="container">

        
   

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('templates.footer')
    </footer>

</div>
</body>
</html>