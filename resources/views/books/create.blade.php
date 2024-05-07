@extends('books.layout')
@section('content')
    <div class="card" style="margin: 20px">
        <div class="card-header" style="background-color: #28a745; color: #fff;">Create New Book</div>
        <div class="card-body">

            <form action="{{ route('book.store') }}" method="post" >
                @csrf
                <label>Nama Buku</label><br>
                <input type="text" name="nama" id="nama" class="form-control"><br>
                <label>Penerbit</label><br>
                <input type="text" name="pengarang" id="pengarang" class="form-control"><br>
                <label>Tahun Terbit</label><br>
                <input type="text" name="terbit" id="terbit" class="form-control "><br>
                <label>Harga</label><br>
                <input type="text" name="harga" id="harga" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection