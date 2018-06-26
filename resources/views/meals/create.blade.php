@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Create New Meal</h1>
        <form method="post" action="{{url('meals')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <div class="col-sm-2">
                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="name">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
                </div>
                <div class="col-sm-10">
                    <textarea class="form-control form-control-lg" name="description" rows="3" cols="50"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Serves</label>
                </div>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="" name="serves">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Difficulty</label>
                </div>
                <div class="col-sm-10">
                    <select name="difficulty" class="form-control form-control-lg">
                        <option value="easy">Easy</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="difficult">Difficult</option>
                        <option value="expert">Expert</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Instructions</label>
                </div>
                <div class="col-sm-10">
                    <textarea class="form-control form-control-lg" name="instructions" rows="8" cols="50"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Time Required (min)</label>
                </div>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-lg" id="" name="minutes">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Category</label>
                </div>
                <div class="col-sm-10">
                    @foreach($categories as $key => $category)
                        <input type="checkbox" class="" id="{{$category->id}}" name="meal-category[]" value="{{$category->id}}"> {{$category->name}}
                    @endforeach
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
