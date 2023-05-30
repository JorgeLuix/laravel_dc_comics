@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Modifica Comic con id: {{$comic->id}} </h5>
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" value="{{ $comic->description }}" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnail</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->Thumb }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <a href="{{ route('comics.index') }}" class="btn btn-danger">Back to List</a>
                </form>
            </div>
        </div>
    </div>
@endsection
