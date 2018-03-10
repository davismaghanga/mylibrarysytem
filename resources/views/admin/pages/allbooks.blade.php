@extends('admin.layout')

@section('content')
    <div class="widget-box" xmlns="http://www.w3.org/1999/html">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5> All Books</h5>
                </div>
                <div class="class span4"></div>
                {{--end of first span--}}

                <div class="class span4">
                    <div class="buttons"> <a  data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Borrow book</a>
                        <div class="modal hide" id="modal-add-event">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3>Lend book to Student</h3>
                            </div>
                            <div class="modal-body">
                                <div class="widget-content nopadding">
                                    <form  action="{{url('/studentandbook')}}"    method="post" class="form-horizontal" >
                                    {{csrf_field()}}
                                    <div class="control-group">
                                        <label class="control-label">Select student :</label>
                                        <div class="controls">
                                            <select name="stud_id" >
                                                @foreach($students as $student)
                                                <option value="{{$student->id}}"> {{$student->regno}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Select book :</label>
                                        <div class="controls">
                                            <select name="book_id">
                                                @foreach($bbooks as $book)
                                                <option value="{{$book->id}}">{{$book->book_name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Cancel</a>
                                        <button type="submit"  id="add-event-submit" class="btn btn-primary">Save </button> </div>
                                    </form>

                            </div>

                        </div>

                </div>
                        </div>
                    </div>
        <div class="buttons"> <a  data-toggle="modal" href="#returned" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Return book</a>
            <div class="modal hide" id="returned">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Return book</h3>
                </div>
                <div class="modal-body">
                    <div class="widget-content nopadding">
                        <form  action="{{url('/studentandbook2')}}"    method="post" class="form-horizontal" >
                            {{csrf_field()}}


                            <div class="control-group">
                                <label class="control-label">Select book :</label>
                                <div class="controls">
                                    <select name="book_id">
                                        @foreach($rbooks as $book)
                                            <option value="{{$book->id}}">{{$book->book_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Cancel</a>
                                <button type="submit"  id="add-event-submit" class="btn btn-primary">Save </button> </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>


                     {{--end of second span--}}
                <div class="class span4"></div>

            <div class="widget-content nopadding">
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection