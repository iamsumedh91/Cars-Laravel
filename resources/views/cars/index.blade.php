@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Make</th>
        <th>Model</th>
        <th>Produced On</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cars as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['make']}}</td>
        <td>{{$post['model']}}</td>
        <td>{{$post['produced_on']}}</td>
        <td><a href="{{action('CarController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><form action="{{action('CarController@destroy', $post['id'])}}" method="post">
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