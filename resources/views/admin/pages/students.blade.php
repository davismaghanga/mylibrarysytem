@extends('admin.layout')
@section('content')
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5> Student Information:</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="{{url('/storestudent')}}" method="post" class="form-horizontal" >
                {{csrf_field()}}
                <div class="control-group">
                    <label class="control-label">Student Name :</label>
                    <div class="controls">
                        <input type="text" name="name" class="span11" placeholder="Enter name of student" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Student Reg no :</label>
                    <div class="controls">
                        <input type="text" name="regno" class="span11" placeholder="Registration number" />
                    </div>
                </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection