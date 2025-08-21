@extends('layout',['judul' => 'Daftar Buku'])

@section('content')
<h2>Disini Daftar Buku</h2>
    <br>
    @foreach($listBook as $books)
    <p>{{$books['title']}} - {{formatRupiah($books['price'])}}</p>
    <br>
    @endforeach

@endsection