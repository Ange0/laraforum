@extends('layouts.topics')
@section('content')
   <div class="container">
        <h2>{{ $topic->title }}</h2>
        <form action="{{ route('topics.update',$topic) }}">
            @csrf
            @method('PUT')
            <input type="text" value="{{ $topic->title ?? '' }}"  name="title" class="form-control @error('title') is-invalid @enderror " placeholder="Entrer le titre">
            @error('title')
                <div class="invalid-feedback"> {{ $errors->first('title')}}</div>
            @enderror
            <textarea name="content" value="" id=""  class="form-control @error('content') is-invalid @enderror" cols="30" rows="10">{{ $topic->content ?? '' }}</textarea>
            @error('content')
            <div class="invalid-feedback"> {{ $errors->first('content')}}</div>
        @enderror
            <button type="submit">Modifier</button>
        </form>
   </div>
@endsection