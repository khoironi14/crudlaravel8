@extends('beranda')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Task</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Task</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><a href="/create-task" class="btn btn-primary btn-sm float-right">Tambah</a></div>
            <div class="card-body">
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('message')}}
                  </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Task Name</th>
                            <th>Assign To</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $no=1;
                        @endphp

                        @foreach  ($task as $row )


                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row->name_task}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->deadline}}</td>
                            <td><a href="/edit-task/{{$row->id}}" class="btn btn-info btn-sm">Edit</a>
                            <form action="/hapus-task/{{$row->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin akan Hapus Data?')">Hapus</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
