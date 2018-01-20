
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
        crossorigin="anonymous"
    >
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
</head>

<body>
<header>
    @include('layouts.nav')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        @yield('content')
        @include('layouts.sidebar')
    </div>
</div>

@include('layouts.footer')

</body>
</html>
