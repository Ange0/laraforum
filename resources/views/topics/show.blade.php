@extends('layouts.topics')
@section('content')
 <div class="container">
   <h2> {{ $topic->title }} </h2>
    <div>
      {{ $topic->content }}
      
    </div>
    <div>
      Posté le {{ $topic->created_at->format('d/m/y à H:m:s') }}
  </div>
  <div>
      {{ $topic->user->name }}
   </div>
   <div>
      @can('update',$topic)
        <a href="{{ route('topics.edit',$topic) }}">Modifier</a>
      @endcan
      @can('delete',$topic)
        <form action="{{ route('topics.destroy',$topic) }}">
            @csrf
            @method('DESTROY')
            <button type="submit">Supprimer</button>
        </form>
      @endcan
      <hr>
      <h2>Commentaire</h2> 
      @forelse ($topic->comments as $comment)
          <p>{{ $comment->content}}</p>
      @empty
          <p>Aucun commentaire pour ce topic</p>
      @endforelse
      <form action="{{ route('comments.store',$topic)}} " method="POST">
        @csrf
         <textarea name="content" id="content" class="@error('content') is-invalid @enderror" cols="30" rows="10"></textarea>
         @error('content')
             <div>
                {{ $errors->first('content') }}
             <div>
         @enderror
         <button type="submit"> Commenter</button>
      </form> 
 </div>
@endsection