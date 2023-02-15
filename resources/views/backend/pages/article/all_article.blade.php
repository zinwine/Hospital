@extends('backend.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">View Article</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Photo </th>
                  <th> Title </th>
                  <th> Author </th>
                  <th> Article </th>
                  <th> Date </th>
                </tr>
              </thead>
              <tbody>
                @foreach($articles as $index => $arc)
                <tr>
                    <td>{{$index+1}} </td>
                  <td class="py-1">
                    <img src={{$arc->image}} alt="image" 
                    style="width: 100px;
                    height: 100px;
                    border-radius: 5%;"/>
                  </td>
                  <td>{{$arc->title}} </td>
                  <td>{{$arc->author}} </td>
                  <td> {{ substr($arc->body, 0, 20)}} ... </td>
                  <td> {{$arc->created_at}}</td>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection