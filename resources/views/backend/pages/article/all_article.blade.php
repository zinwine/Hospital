@extends('backend.master')

@section('style')
<style>
  /* .action_icon>div>a>i{
    display: -webkit-flex; 
    display: flex; 
    -webkit-align-items: center; 
    align-items: center; 
    padding: 15px 15px; 
    font-weight: bold; 
    font-size: 30px !important;
  } */
</style>
@endsection
@section('content')


<div class="row">
  @if(session('status'))
    <p class="alert alert-success">{{session('status')}}</p>  
  @endif
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
                  <th> Manage </th>
                </tr>
              </thead>
              <tbody>
                @foreach($articles as $index => $arc)
                <tr>
                    <td>{{$index+1}} </td>
                  <td class="py-1">
                    @if(strpos($arc->image, "https://") !== false)
                    <img src={{$arc->image}} alt="image" style="width: 100px;height: 100px;border-radius: 5%;"/>
                    @else
                    <img src={{asset('backend/assets/images/upload/'. $arc->image)}} alt="image" style="width: 100px;height: 100px;border-radius: 5%;"/>
                    @endif
                  </td>
                  <td>{{$arc->title}} </td>
                  <td>{{$arc->author}} </td>
                  <td> {{ substr($arc->body, 0, 20)}} ... </td>
                  <td> {{$arc->created_at}}</td>
                  <td> 
                            <div class="row action_icon">
                              <div class="col-sm-6 col-md-4 col-lg-3">
                                <a  style="font-size:20px" href="{{url('admin/article/edit/' . $arc->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                              </div>
                              <div class="col-sm-6 col-md-4 col-lg-3">
                              <a  style="font-size:20px" href="{{url('admin/article/' . $arc->id)}}"><i class="mdi mdi-delete text-danger"></i></a>
                             
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