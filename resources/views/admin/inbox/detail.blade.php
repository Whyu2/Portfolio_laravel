@extends('admin/layout/main')
@section('container')
   
   <div class="row bg-light shadow-lg  bg-body rounded p-3">
        <div class="row">

            <div class="col display-4 mb-4">
                Detail Inbox
            </div>
        </div>
        
        <div class="col">
      
            <div class="row">
                <div class="col">
                  <table >
                
                    <tbody>
                      <tr class="d-flex">

                        <td class="col-5 mb-3">Nama Pengirim</td>
                        <td  class="col-1"> :</td>
                        <td class="col-sm-4">{{$data->nama}}</td>
                      </tr>
                      <tr class="d-flex">

                        <td class="col-5 mb-3">Email Pengirim</td>
                        <td  class="col-1"> :</td>
                        <td class="col-sm-4">{{$data->email}}</td>
                      </tr>
                      <tr class="d-flex">

                        <td class="col-5 mb-3">Tanggal Kirim</td>
                        <td  class="col-1"> :</td>
                        <td class="col-sm-5">{{$date}}</td>
                      </tr>
                      <tr class="d-flex">

                        <td class="col-5 mb-3">Isi Pesan</td>
                        <td class="col-1"> :</td>
                        <td class="col-sm-4">   <textarea class="form-control mt-2" id="about" rows="3" name="about"> {{$data->pesan}}</textarea>
                      
                      </tr>
                     
                   
                    </tbody>
                  </table>

                      

                </div>
            </div>
            {{-- @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif --}}
        </div>
    </div>
    @endsection
