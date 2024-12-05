@extends('layout')

@section('page-content')
    <legend>Create Employee</legend>
    <form method="post" action="{{route('employee.store')}}">
        @csrf
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Name </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{old('name')}}" id="title" name="name"
                       placeholder="Name" >
                @error('name')
                 <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{old('email')}}" id="title" name="email"
                       placeholder="example@gmail.com">
                       @error('email')
                       <div class="text-danger">{{$message}}</div>
                      @enderror
            </div>
        </div>
        <div class="form-group">
            <label f class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{old('phone')}}"  name="phone"
                       placeholder="01XXXXXXXX">
                       @error('phone')
                       <div class="text-danger">{{$message}}</div>
                      @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{old('address')}}" id="title" name="address"
                       placeholder="address">
                       @error('address')
                       <div class="text-danger">{{$message}}</div>
                      @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Post</label>
            <select class="form-select" name="post" id="">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>

            </select>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection



