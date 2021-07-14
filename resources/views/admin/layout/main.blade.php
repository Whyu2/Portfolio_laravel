<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portfolio</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            {{-- <li class="nav-item dropdown w-100">
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Project</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 1</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 2</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 3</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 4</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Project 5</a></li>
                </ul>
            </li> --}}
            <li class="nav-item w-100">
                <a href="{{url('/admin/projek')}}" class="nav-link text-light pl-4">Project</a>
            </li>
            <li class="nav-item w-100">
                <a href="{{url('/admin/inbox')}}" class="nav-link text-light pl-4">Inbox</a>
            </li>
        </ul>
    </nav>
    
    <section class="p-4 my-container active-cont  ">

        {{-- <button class="btn btn-dark my-4" id="menu-btn">Menu</button> --}}
        <a href="{{'/'}}" class="btn btn-primary position-end my-4">Kembali Ke Portofolio</a>
    @yield('container')


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
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