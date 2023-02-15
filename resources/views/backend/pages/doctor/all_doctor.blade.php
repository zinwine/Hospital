@extends('backend.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">View Doctors</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Photo </th>
                  <th> Name </th>
                  <th> Age </th>
                  <th> Bachelor </th>
                  <th> Experience </th>
                  <th> Department </th>
                </tr>
              </thead>
              <tbody>
                @foreach($doctors as $index => $doc)
                <tr>
                  <td>{{$index+1}} </td>
                  <td class="py-1">
                    <img src={{$doc->photo}} alt="image" 
                    style="width: 100px;
                    height: 100px;
                    border-radius: 5%;"/>
                  </td>
                  <td>{{$doc->name}} </td>
                  <td>{{$doc->age}} </td>
                  <td> {{$doc->bechelor}}</td>
                  <td> {{$doc->experience}}</td>
                  <td> {{$doc->department}}</td>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection