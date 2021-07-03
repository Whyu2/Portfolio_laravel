@extends('admin/layout/main')
@section('container')
   
   <div class="row bg-light shadow-lg  bg-body rounded p-3">
        <div class="row">

            <div class="col display-4 mb-2">
                About Me
            </div>
        </div>
 
        <div class="col">
      
            <div class="row">
                <div class="col">
                    <form method="post" action="/admin/about/{{$about->id}}">

                        @method('put')
                        @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control @error('about') is-invalid @enderror" id="about" rows="3" name="about"> {{$about->about}}</textarea>
                        @error('about')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                      </div>
                      <button type="submit" class="btn btn-success mt-3 mb-3">Submit</button>
                    </form> 

                </div>
                
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        </div>
    </div>
    @endsection
