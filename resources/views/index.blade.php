<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 welcome-header">
                        <h1>WELCOME TO JOBPORTAL</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-5">
                                <div class="row">
                                    <div class="col-md-4 user-type">
                                        <a href="{{ url('/login') }}">
                                            <div class="row pt-3 pb-3">
                                                <div class="col-md-12">
                                                    <h2>Search Job</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mb-5">
                                <div class="row">
                                    <div class="col-md-4 user-type">
                                        <a href="{{ url('/login') }}">
                                            <div class="row pt-3 pb-3">
                                                <div class="col-md-12">
                                                    <h2>Post A New Job</h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>