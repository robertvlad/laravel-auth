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
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Slug</th>
                    <th>Azioni</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post['id']}}</td>
                            <td>{{ $post['title']}}</td>
                            <td>{{ $post['slug']}}</td>
                            <td>
                                {{-- AZIONI --}}
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection