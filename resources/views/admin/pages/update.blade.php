@extends('admin.layout')
@section('content')
    {{--confirmation message. also research on session--}}

    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5> Book Information:</h5>
        </div>
        <div class="widget-content nopadding">
            <form  method="post" class="form-horizontal" >
                {{csrf_field()}}
                <div class="control-group">
                    <label class="control-label">Book Name :</label>
                    <div class="controls">
                        <input type="text" name="book_name" class="span11" value="{{$book->book_name}}" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Author Name :</label>
                    <div class="controls">
                        <input type="text" name="author_name" class="span11" value="{{$book->author_name}}" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Edition :</label>
                    <div class="controls">
                        <input type="text"  name="edition"  class="span11" value="{{$book->edition}}"  />
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label">Year of publication :</label>
                    <div class="controls">
                        <input  type="number" name="year" class="span11" value="{{$book->year}}"/>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection