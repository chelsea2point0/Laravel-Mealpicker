@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('MealController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$meal->name}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control form-control-lg" name="description" rows="3" cols="50">{{$meal->description}}</textarea>
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Serves</label>
      <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" id="meal-serves" name="serves" value="{{$meal->serves}}">
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Difficulty</label>
      <div class="col-sm-10">
        <select name="difficulty" class="form-control form-control-lg">
            <option value="easy">Easy</option>
            <option value="intermediate">Intermediate</option>
            <option value="difficult">Difficult</option>
            <option value="expert">Expert</option>
        </select>
      </div>

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Instructions</label>
      <div class="col-sm-10">
        <textarea class="form-control form-control-lg" name="instructions" rows="8" cols="50">{{$meal->instructions}}</textarea>
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Time Required (min)</label>
      <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" id="meal-time" name="minutes" value="{{$meal->minutes}}">
      </div>
      

    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
