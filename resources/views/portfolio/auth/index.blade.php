@extends('portfolio/layout/main')
@section('container')

<section id="auth">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <h3 class="text-center mb-5">Login Admin</h3>
                        <form action="{{route('postlogin')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                             
                            </div>
                            <div class="mb-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" name="password"  class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                             
                            </div>
                            @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="d-grid mt-2">
                                <button class="btn btn-primary" type="submit">Login</button>
                            
                              </div>
                          </form>
                     
                    </div>
                
            </div>

        </div>
    </div>


@endsection