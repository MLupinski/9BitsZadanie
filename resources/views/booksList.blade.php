@extends('layout')

@section('content')
    <table>
        <thead>
            <th>ID</th>
            <th>Tytuł</th>
            <th>Opis</th>
            <th>Autor</th>
            <th>Wydawnictwo</th>
            <th>Rok wydania</th>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ mb_strimwidth($book->title, 0, 13, "...") }}</td>
                    <td>{{ mb_strimwidth($book->description, 0, 353, "...") }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publishing_house }}</td>
                    <td>{{ $book->publishing_year }}</td>
                    <td> <a href="/book/edit/{{ $book->id }}">Edytuj</a>
                </tr>
            @endforeach
        </tbody>
    </table> 
    <div class="pagin"> 
    @for($i=1; $i <= $books->lastPage(); $i++)
            @if($i == $books->currentPage())
                <a href="?page= {{ $i }}" class="currentPage"> {{ $i }} </a>
                @continue;
            @endif

            <a href="?page= {{ $i }}" class="paginNav"> {{ $i }} </a>
    @endfor
    </div>    
@endsection