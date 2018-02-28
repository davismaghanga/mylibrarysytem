@extends('admin.layout')

@section('content')

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td><a href="{{action('BookController@getbook',$book->id)}}">{{$book->book_name}}</a></td>
                    <td>{{$book->author_name}}</td>
                    <td>{{$book->edition}}</td>
                    <td>{{$book->year}}</td>
                    @if($book->borrowed==0)
                        <td> <a href="{{action('BookController@borrow',$book->id)}}" class="btn btn-small"> Borrow</a> </td>
                    @else
                        <td> <button class="btn btn-small" disabled=""> Borrowed</button> </td>
                     @endif

                </tr>
            @endforeach
        </tbody>
    </table>


@endsection