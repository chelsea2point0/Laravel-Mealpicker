@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Categories</h1>
    <a href="{{action('CategoryController@create')}}" class="btn btn-success">New Category</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$category['id']}}</td>
        <td>{{$category['name']}}</td>
        <td><a href="{{action('CategoryController@edit', $category['id'])}}" class="btn btn-info">Edit</a></td>
        <td>
          <form action="{{action('CategoryController@destroy', $category['id'])}}" method="post">
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
