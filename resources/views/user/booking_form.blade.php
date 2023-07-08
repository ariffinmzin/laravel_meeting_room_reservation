@extends('layouts.mytemplate')

@section('content')
<form action="newbooking/submit" method="post">

    <div class="row">
        <div class="col-md-12">
            <label for="name">Name</label>
            <input type="text" name="" class="form-control" id="name">
        </div>
        <div class="col-md-4">
            <label for="date">Date</label>
            <input type="date" name="" class="form-control" id="date">
        </div>
        <div class="col-md-4">
            <label for="timefrom">Time From</label>
            <select name="" id="timefrom" class="form-control">
                <option value="">8.00AM</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="timeto">Time To</label>
            <select name="" id="timeto" class="form-control">
                <option value="">5.00PM</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="meetingroom">Meeting Room</label>
            <select name="" id="meetingroom">
                <option value="">Meeting Room 1</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="remark">Remark</label>
            <input type="text" name="" class="form-control" id="remark">
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection