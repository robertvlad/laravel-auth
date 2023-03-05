@extends('layouts.admin');

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="py-3">
                <h2>Aggiungi Post</h2>
            </div>
            <div>
                <form action="{{ route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">TITOLO</label>
                        <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label class="control-label">CONTENUTO</label>
                        <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenuto" class="form-control"></textarea>
                    </div>
                    <div class="form-group my-2">
                        <button type="submit" class="btn btn-success">Salva</button>                        
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection