@extends('layouts.topics')
@section('content')

   @foreach ($topics as $topic)
       <h4><a href="{{route('topics.show',$topic->id)}}">{{ $topic->title}} </a></h4>
       <p>
          {{ $topic->content}}

       </p>
       <div>
           Posté le {{ $topic->created_at->format('d/m/y à H:m:s') }}
       </div>
       <div>
           {{ $topic->user->name }}
       </div>
       
   @endforeach
   <div>{{ $topics->links()}}</div>
@endsection
