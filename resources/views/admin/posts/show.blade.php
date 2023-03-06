@extends('layouts.admin');

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="py-3">TITOLO: {{ $post['title'] }}</h2>
            <div class="d-flex gap-3 pb-3">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna all'elenco</a>
            </div>
            <h4 class="pb-1">CONTENUTO DEL POST:</h4>
            <p class="pb-2">{{ $post['content']}}</p>
            <p>Slug: {{ $post['slug'] }}</p>
            <p>Creato il: {{ $post['created_at']}}</p>
            <p>Ultima modifica effettuata il: {{ $post['updated_at']}}</p> 
        </div>
    </div>
</div>

@endsection