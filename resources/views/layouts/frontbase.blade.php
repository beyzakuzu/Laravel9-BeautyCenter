<h1>Header</h1>

@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>

<h1>Footer</h1>
@yield('foot')
</body>
</html>

