@extends('layouts.admin');

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div>
                <h2>Elenco dei Posts</h2>
            </div>
            <div class="d-flex gap-3">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Aggiungi Post</a>
            </div>
        </div>
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}    
            </div>            
        @endif
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Slug</th>
                    <th>Data creazione</th>
                    <th>Ultima modifica</th>
                    <th>Azioni</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post['id']}}</td>
                            <td>{{ $post['title']}}</td>
                            <td>{{ $post['slug']}}</td>
                            <td>{{ $post['created_at']}}</td>
                            <td>{{ $post['updated_at']}}</td>                            
                            <td>
                                <a href="{{ route('admin.posts.show', ['post' => $post['slug']]) }}" title="Visualizza Post" class="btn btn-square btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.posts.edit', ['post' => $post['slug']]) }}" title="Modifica Post" class="btn btn-square btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection