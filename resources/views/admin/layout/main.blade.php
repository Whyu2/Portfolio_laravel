<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portfolio</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- custom css -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style>
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
</head>

<body>
  
     
   


    
    <nav class="navbar navbar-expand  d-flex flex-column align-item-start active-nav"" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-5 font-weight-bold">Admin</div>
        </a>
        <ul class="navbar-nav active-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
                <a href="{{url('/admin')}}"" class="nav-link text-light pl-4">Home</a>
            </li>
            <li class="nav-item w-100">
                <a href="{{url('/admin/profile')}}" class="nav-link text-light pl-4">Profile</a>
            </li>
            <li class="nav-item w-100">
                <a href="{{url('/admin/about')}}" class="nav-link text-light pl-4">About</a>
            </li>
            <li class="nav-item dropdown w-100">
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Project</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 1</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 2</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 3</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 4</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 5</a></li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Inbox</a>
            </li>
        </ul>
    </nav>
    
    <section class="p-4 my-container active-cont  ">

        {{-- <button class="btn btn-dark my-4" id="menu-btn">Menu</button> --}}
        <a href="{{'/'}}" class="btn btn-primary position-end my-4">Kembali Ke Portofolio</a>
    @yield('container')


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    <!-- custom js -->
    {{-- <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script> --}}
</body>

</html>