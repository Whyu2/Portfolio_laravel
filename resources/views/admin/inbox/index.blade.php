@extends('admin/layout/main')
@section('container')
   
   <div class="row bg-light shadow-lg  bg-body rounded p-3">
        <div class="row">

            <div class="col display-4 mb-2">
                Inbox
            </div>
        </div>
          @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif
        <div class="col">
      
            <div class="row">
                <div class="col">
                  <table class="table">
                    <thead class="table-dark">
                          <tr>
                            <th   style="width: 8%" scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                          
                            <th style="width: 5%" scope="col">Detail</th>
                            <th  style="width: 5%" scope="col">Hapus</th>
                          </tr>
                        </thead>
                        <tbody>
                   
                          @forelse ($inbox as $key => $in)
                        
    
                          <tr>
                            <th scope="row">{{$inbox->firstItem() + $key}}</th>
                            <td>{{$in->nama}}</td>
                            <td>{{$in->email}}</td>
                          
                            <td >
                              <a href="/admin/inbox/{{$in->id}}" class="btn btn-primary bi bi-pencil-square"></a>
                            </td>
                            <td>
                                <form action="/admin/inbox/{{$in->id}}" method="POST">
                                @method('delete')
                                  @csrf
                                  <button class="btn btn-danger bi bi-trash" type="submit"></button>
                                </form>
                          
                              {{-- <a href="/admin/inbox/delete/{{$in->id}}" class="btn btn-danger bi bi-trash"></a> --}}
                            </td>
                  
                          </tr>
                          @empty
                          <h3>Belum ada pesan masuk</h3>
                          @endforelse
                         
                        </tbody>
                      </table>
                      
                </div>
                <div class="row">
                  <div class="col-10">
                Showing
                {{$inbox->firstItem()}}
                to
                {{$inbox->lastItem()}}
                of
                {{$inbox->total()}}
                entries
                  </div>
                  <div class="col-2"><span class="float-right">                {{ $inbox->links() }}</span></div>
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
