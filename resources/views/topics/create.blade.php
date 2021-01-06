@extends('layouts.topics')
@section('extra-js')
    {!! NoCaptcha::renderJs() !!}
@endsection
@section('content')
   <div class="container">
        <h2>Créer un topic</h2>
        <form action="{{route('topics.store')}}" method="POST">
            @csrf
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " placeholder="Entrer le titre">
            @error('title')
                <div class="invalid-feedback"> {{ $errors->first('title')}}</div>
            @enderror
         
            <textarea name="content" id=""  class="form-control @error('content') is-invalid @enderror" cols="30" rows="10"></textarea>
            @error('content')
            <div class="invalid-feedback"> {{ $errors->first('content')}}</div>
        @enderror
            <button type="submit">Enregistrer</button>
            <div>
                {!! NoCaptcha::display() !!}

                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                 @endif
            </div>
        </form>
   </div>
@endsection