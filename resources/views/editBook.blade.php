@extends('layout')

@section('content')
    
    @if($succes ?? '' == 1)
    <p class="successMsg">Dane na temat książki zostały zaktualizowane</p>
    @endif

    <form action="/book/edit/{{ $book->id }}" method="POST">
    @csrf
    <label>ID</label> <br/>
    <input type="text" value="{{ $book->id }}" disabled> <br/><br/>
    <label>Tytuł</label> <br/>
    <input type="text" name='title' value="{{ $book->title}}"> <br/><br/>
    <label>Opis</label> <br/>
    <textarea name="description" id="" cols="50" rows="15">{{ $book->description }}</textarea> <br/><br/>
    <label>Autor</label> <br/>
    <input type="text" name='author' value="{{ $book->author }}"> <br/><br/>
    <label>Wydawnictwo</label> <br/>
    <input type="text" name='publishing_house' value="{{ $book->publishing_house }}"> <br/><br/>
    <label>Rok wydania</label> <br/>
    <input type="text" name='publishing_year' value="{{ $book->publishing_year }}"> <br/> <br/>

    <input type="submit" value="Zapisz">
    <a href="/">Powrót</a>    
    </form>
@endsection