@extends('layouts.master')

@section('content')
   <div class="container">
        <form role="form" action="/profil" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama proyek</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama proyek">
                    </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="desk" rows="3" placeholder=""></textarea>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
   </div>
@endsection