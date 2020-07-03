@extends('adminlte.master')

@section('content')
    <form action="/pertanyaan" method="POST">
      @csrf
        <div class="form-group">
          <label for="judul">Judul pertanyaan:</label>
          <input type="text" class="form-control" placeholder="Masukkan judul" id="judul">
        </div>
        <div class="form-group">
          <label for="isi">Isi pertanyaan:</label>
          <input type="text" class="form-control" placeholder="Masukkan judul" id="isi">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection