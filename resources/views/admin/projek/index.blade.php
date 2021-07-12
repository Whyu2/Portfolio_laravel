@extends('admin/layout/main')
@section('container')

    

<div class="row bg-light shadow-lg  bg-body rounded p-3 mb-2">
    <div class="row">

        <div class="col display-4 mb-2">
            Projek
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    @foreach ( $projek as $projek )
    <div class="row mb-3">
    <div class="col-4">
        <div class="row">
            <div class="col mb-1 mx-2 rounded text-center " text-center" style="background-color: #22282e">
                <h5 class="text-light mt-1">Foto Projek</h5>
            </div>
        </div>
        <div class="row">
            <div class="col mb-2">
                <img src="{{ asset('img/'. $projek->gambar) }}"" class=" img-fluid "  alt="">
               </div>
               <div class=" col">
                <form method="post" action="/admin/projek/{{$projek->id}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Foto</label>
                        <input type="file" name="file" class="form-control-file" id="gambar">
                    </div>

            </div>
        </div>
    </div>
    <div class="col -6">
        <div class="row">
            <div class="col mb-1 mx-2 rounded text-center " style=" background-color: #22282e">
                <h5 class="text-light mt-1">Deskripsi Projek</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">


                <div class="mb-3">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control " id="deskirpsi" rows="3" name="isi"> </textarea>
                       
                      </div>

                </div>


                <button type="submit" class="btn btn-success mt-3 mb-3">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>

            </div>

        </div>

    </div>
 
</div>
    @endforeach
</div>













{{-- <div class="row text-center">
        <div class="col-12 mb-5  ">
            <h2>Detail Profile</h2>
        </div>
    </div>
    <div class="row ">
        <div class="col-5">
            <p class="">Foto Profile</p>
        </div>
        <div class="col-7">
            <p>Data Profile</p>
        </div>
    </div> --}}


</section>

@endsection