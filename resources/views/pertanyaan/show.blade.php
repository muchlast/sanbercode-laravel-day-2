@extends('adminlte.master')

@section ('content')
<div class='mt-3 ml-3'>
    <h4> {{ $pertanyaa->judul }} </h4>
    <p> {{ $pertanyaa->isi }} </p>
</div>
@endsection