@extends('backend.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">View News</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Photo </th>
                  <th> Title </th>
                  <th> Author </th>
                  <th> Content </th>
                  <th> Date </th>
                </tr>
              </thead>
              <tbody>
                @foreach($news as $index => $new)
                <tr>
                    <td>{{$index+1}} </td>
                  <td class="py-1">
                    <img src={{$new->image}} alt="image" 
                    style="width: 80px;
                    height: 80px;
                    border-radius: 5%;"/>
                  </td>
                  <td>{{$new->title}} </td>
                  <td>{{$new->author}} </td>
                  <td> {{ substr($new->body, 0, 20)}} ... </td>
                  <td> {{$new->created_at}}</td>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection