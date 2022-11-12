<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom-style.css') }}">
    
    @yield('css')
</head>

<body>

    @yield('content')

    <!-- start filters toggler -->
    <div class="filters-toggler">
        <div class="filters-toggler__show">
            <!-- <span class="material-icons-outlined"> filter_list </span> -->
            <a href="{{route('home')}}">
                <span class="material-icons-outlined">add</span>
            </a>
        </div>
        <div class="filters-toggler__hide">
            <span class="material-icons-outlined"> clear </span>
        </div>
    </div>
    <!-- end filters toggler -->

    @yield('js')
</body>

</html>
