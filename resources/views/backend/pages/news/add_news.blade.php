@extends('backend.master')
@section('title', "Add News")
@section('content')
  <div class="row">
    <div class="offset-3 col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add News</h4>
          <form class="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" id="author" placeholder="Author">
            </div>
            <div class="form-group">
              <label>Upload Image</label>
              <input type="file" name="news_img" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" name="news_img" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Choose</button>
                </span>
              </div>
            </div>
            <div class="form-group">
              <img class="news_img d-none" src="" alt="image" style="width: 100px;height: 100px;border-radius: 5%;"/>
            </div>
            <div class="form-group">
              <label for="news">News</label>
              <textarea class="form-control" id="news" name="news" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Add News</button>
            <a href="{{url('admin/news')}}" class="btn btn-dark">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  
@endsection
@section('script')
<script>
    (function($) {
  'use strict';
  $(function() {
    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function(e) {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      var name = URL.createObjectURL(e.target.files[0]);
      $('.news_img').attr("src", name);
      $('.news_img').removeClass('d-none');
    });
  });
})(jQuery);
  </script>
@endsection