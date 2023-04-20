@extends('layouts.base')

@section('title','Kontaktformular')

@section('content')
<div class="container">
  <h1>Kontaktformular</h1> 
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
      </ul>
    </div>    
  @endif

  <form method="POST" action="{{route('index',[],false)}}">
    @csrf
    <div class="mb-3">
        <label for="inputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" name='Username' id="inputUsername">
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="text" class="form-control" name='Email' id="inputEmail">
    </div>
    <div class="mb-3">
      <label for="inputAdresse" class="form-label">Adresse</label>
      <input type="text" class="form-control" name='Adresse' id="inputAdresse">
    </div>
    <div class="mb-3">
      <label for="inputPlzOrt" class="form-label">Plz & Ort</label>
      <input type="text" class="form-control" name='Plz & Ort' id="inputPlzOrt">
    </div>
    <div class="mb-3">
      <label for="inputNachricht" class="form-label">Deine Nachricht</label>
      <textarea type="inputNachricht" class="form-control" name='Nachricht' id="inputNachricht"></textarea>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary">Speichern</button>
    </div>
    

  </form>  
</div>
   
@endsection