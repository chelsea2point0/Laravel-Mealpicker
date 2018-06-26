@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Meals</h1>
    <a href="{{action('MealController@create')}}" class="btn btn-success">New Meal</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($meals as $meal)
      <tr>
        <td>{{$meal['id']}}</td>
        <td>{{$meal['name']}}</td>
        <td>{{$meal['description']}}</td>
        <td><a href="{{action('MealController@edit', $meal['id'])}}" class="btn btn-info">Edit</a></td>
        <td>
          <form action="{{action('MealController@destroy', $meal['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
