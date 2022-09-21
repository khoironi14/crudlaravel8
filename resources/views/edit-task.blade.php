@extends('beranda')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/update-task/{{$edit->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Task Name</label>
                        <input type="text" name="name_task" class="form-control @error('name_task')
                        is-invalid
                        @enderror" value="{{old('name_task',$edit->name_task)}}" id="">
                        @error('name_task')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">User</label>
                        <select name="user_id" id="" class="form-control @error('user_id')
                        is-invalid
                        @enderror">
                            <option value="">--Pilih User--</option>
                            @foreach ($user as $row )
                            @if (old('user_id',$edit->user_id) == $row->id)


                            <option value="{{$row->id}}" selected>{{$row->name}}</option>
                            @else
                            <option value="{{$row->id}}" >{{$row->name}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Deadline</label>
                        <input type="date" name="deadline" id="" class="form-control @error('deadline')
                        is-invalid
                        @enderror" value="{{old('deadline',$edit->deadline)}}">
                        @error('deadline')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
