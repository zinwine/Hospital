@extends('backend.master')

@section('content')

<div class="row">
  @if(session('status'))
    <p class="alert alert-success">{{session('status')}}</p>  
  @endif
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
                  <th> Manange </th>
                </tr>
              </thead>
              <tbody>
                @foreach($news as $index => $new)
                <tr>
                    <td>{{$index+1}} </td>
                  <td class="py-1">
                    @if(strpos($new->image, "https://") !== false)
                    <img src={{$new->image}} alt="image" style="width: 100px;height: 100px;border-radius: 5%;"/>
                    @else
                    <img src={{asset('backend/assets/images/upload/'. $new->image)}} alt="image" style="width: 100px;height: 100px;border-radius: 5%;"/>
                    @endif
                  </td>
                  <td>{{$new->title}} </td>
                  <td>{{$new->author}} </td>
                  <td> {{ substr($new->body, 0, 20)}} ... </td>
                  <td> {{$new->created_at}}</td>
                  <td>

                    <div class="row action_icon">
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <a  style="font-size:20px" href="{{url('admin/news/edit/' . $new->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                      <a  style="font-size:20px" href="{{url('admin/news/' . $new->id)}}"><i class="mdi mdi-delete text-danger"></i></a>
                     
              </div>
            </div>
                  </td>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection