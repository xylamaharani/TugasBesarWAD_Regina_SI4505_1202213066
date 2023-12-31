<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4">
                <h1><a href="index.html" class="logo">Admin</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="{{ request()->routeIs('admin.index**') ? 'active' : '' }}">
                        <a href="{{ route('admin.index') }}"><span class="fa fa-home mr-3"></span>Homepage</a>
                    </li>
                    <li class="{{ request()->routeIs('admin.users**') ? 'active' : '' }}">
                        <a href="{{ route('admin.users.index') }}"><span class="fa fa-user mr-3"></span>Users</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-briefcase mr-3"></span>Pendaftaran</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"><span class="fa fa-chevron-left mr-3"></span>Homepage</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <main id="content" class="p-4 p-md-5 pt-5 container">
        <div>
        <h1>hello admin {{ Auth::user()->username }}</h1>
    </div>
        </main>
    </div>
</body>

</html>
