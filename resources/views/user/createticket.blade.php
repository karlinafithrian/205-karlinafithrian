@extends('layouts.master1')

@section('konten')

<div class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Tiket</h3>
        </div>
        <form action="{{ route('postcreateticket') }}" method="POST">
            @csrf
    
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Lengkap">
        </div>
        
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control" placeholder="Harga Tiket">
        </div>
        
        <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="date" name="date" class="form-control">
        </div>
        
    </div>
    
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
</form>

</div>
</div>

    
@endsection