@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
<style>
    .error-message {
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')
    <form method="POST" action="{{route('tasks.store')}}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" rows='5' id="description" >{{old('description')}}</textarea>
            @error('description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" rows='10' id="long_description">{{old('long_description')}}</textarea>
            @error('long_description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Add task</button>
        </div>
    </form>
@endsection