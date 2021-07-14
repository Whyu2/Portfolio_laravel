<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css buatan -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style>
<link rel="stylesheet" href="{{ asset('css/portfolio/style.css') }}">



    <title>Wellcome</title>
</head>

<body id="home">
    <nav class="navbar navbar-expand-lg shadow-lg navbar-dark fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="#home"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projek">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Contac Me</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="jumbotron text-center">
        <img src=" {{asset('img/'.$profile->gambar )}}"  alt="me" width="200" class="rounded-circle img-thumbnail mb-3">

      

        <h1 class="display-4">{{$profile->nama}}</h1>
        <p class="lead">{{$profile->slogan}}</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L48,208C96,192,192,160,288,176C384,192,480,256,576,240C672,224,768,128,864,112C960,96,1056,160,1152,186.7C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

    </section>

    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row text-center justify-content-center"">
                <div class=" col-md-4">
                <p class="fs-5">{{$about->about}}</p>
            </div>
      
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#98B4D4" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,202.7C384,181,480,107,576,106.7C672,107,768,181,864,192C960,203,1056,149,1152,117.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <section id="projek">
        <div class="container">
            <div class="row text-center">
                <div class="col mb-3">
                    <h2>My Project</h2>
                </div>
            </div>
            <div class="row justify-content-center">

  @foreach ($projek as $p)
      
 
                    
     
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{asset('img/'.$p->gambar )}}"  class="card-img-top" alt="Projek">
                        <div class="card-body text-center">
                            <p class="card-text">{{$p->deskripsi}}</p>
                        </div>
                    </div>

                </div>
                @endforeach
          
                {{-- <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/projek.jpeg" class="card-img-top" alt="Projek">
                        <div class="card-body text-center"">
                            <p class=" card-text">2</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/projek.jpeg" class="card-img-top" alt="Projek">
                        <div class="card-body text-center"">
                            <p class=" card-text">3</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="card" style="width: 18rem;">
                        <img src="img/projek.jpeg" class="card-img-top" alt="Projek">
                        <div class="card-body text-center"">
                            <p class=" card-text">4</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/projek.jpeg" class="card-img-top" alt="Projek">
                        <div class="card-body text-center"">
                            <p class=" card-text">5</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,234.7C384,213,480,171,576,160C672,149,768,171,864,197.3C960,224,1056,256,1152,266.7C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <section id="kontak">
        <div class="container mb-4">
            <div class="row">
                <div class="col text-center">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="/admin/inbox/" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Isikan Nama ">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 " class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Isikan Email ">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="exampleFormControlTextarea1" rows="3" placeholder="Isikan Pesan "></textarea>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @if (session('status'))
                    <div class="alert mt-3 alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                </div>
          
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#22282E" fill-opacity="1" d="M0,32L34.3,48C68.6,64,137,96,206,101.3C274.3,107,343,85,411,106.7C480,128,549,192,617,202.7C685.7,213,754,171,823,165.3C891.4,160,960,192,1029,202.7C1097.1,213,1166,203,1234,170.7C1302.9,139,1371,85,1406,58.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </section>

    <section id="footer">

        <footer class="text-center pb-3">
            <p class="text-light">Latihan@Wahyu@</p>
        </footer>

    </section>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>