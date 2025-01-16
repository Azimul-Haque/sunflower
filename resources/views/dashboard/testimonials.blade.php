@extends('adminlte::page')

@section('title', 'Testimonials | ')

@section('css')
  {!!Html::style('css/parsley.css')!!}
@stop

@section('content_header')
    <h1>
      <i class="fa fa-fw fa-plus" aria-hidden="true"></i> মন্তব্য/ প্রশংসাবাক্য
      <div class="pull-right">
        <a class="btn btn-info" href="#!" title="হোমপেইজে লোড প্রেশার কম রাখবার জন্য, প্রশংসাবাক্য ৩ থেকে ৫টি ছবির মাঝে সীমাবদ্ধ থাকা সমীচীন" data-placement="bottom"><i class="fa fa-info-circle"></i></a>
      </div>
    </h1>
@stop

@section('content')
    <div class="row">
      {!! Form::open(['route' => 'dashboard.testimonials.store', 'method' => 'POST', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data']) !!}
      <div class="col-md-4">
        <div class="box box-success">
          <div class="box-header with-border text-green">
            <i class="fa fa-fw fa-upload"></i>
            <h3 class="box-title">প্রশংসাবাক্য আপলোড করুন</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
                <div class="form-group">
                  <label>ব্যক্তির নাম</label>
                  {!! Form::text('title', null, array('class' => 'form-control text-green', 'placeholder' => 'টাইটেল', 'required' => '', 'data-parsley-required-message' => 'নাম আবশ্যক')) !!}
                </div>
                <div class="form-group">
                  <label>ডেসিগনেশন/পদবি</label>
                  {!! Form::text('subtitle', null, array('class' => 'form-control text-green', 'placeholder' => 'সাব-টাইটেল', 'required' => '', 'data-parsley-required-message' => 'পদবি আবশ্যক')) !!}
                </div>

                <div class="form-group">
                    <label>প্রশংসাবাক্য (দৈর্ঘ্য এবং প্রস্থের অনুপাত 1:1 হওয়া বাঞ্ছনীয়):</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                ব্রাউজ করুন <input type="file" id="image" name="image" required="" data-parsley-required-message = "ছবি সিলেক্ট করুন">
                            </span>
                        </span>
                        <input type="text" class="form-control text-green" readonly>
                    </div>
                </div>

                <center>
                  <img class="img-responsive" src="{{ asset('images/300x100.png')}}" id='img-upload' style="height: 100px; width: auto; padding: 5px;" />
                </center>

                <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-fw fa-floppy-o" aria-hidden="true"></i> আপলোড করুন</button>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        {!! Form::close() !!}
        <div class="col-md-8">
          <div class="box box-warning">
            <div class="box-header with-border text-orange">
              <i class="fa fa-fw fa-trash"></i>
              <h3 class="box-title">প্রশংসাবাক্য তালিকা (কমপক্ষে ২টি প্রশংসাবাক্য থাকা লাগবে)</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table">
                <td>sd</td>
                <td>sd</td>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
    </div>

@stop

@section('js')
  {!!Html::script('js/parsley.min.js')!!}
  <script type="text/javascript">
    var _URL = window.URL || window.webkitURL;
    $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
      });

      $('.btn-file :file').on('fileselect', function(event, label) {
          var input = $(this).parents('.input-group').find(':text'),
              log = label;
          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }
      });
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#img-upload').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#image").change(function(){
          readURL(this);
          var file, img;

          if ((file = this.files[0])) {
            img = new Image();
            img.onload = function() {
              var imagewidth = this.width;
              var imageheight = this.height;
              filesize = parseInt((file.size / 1024));
              if(filesize > 1000) {
                $("#image").val('');
                toastr.warning('ফাইলের আকৃতি '+filesize+' কিলোবাইট. ১ মেগাবাইটের মধ্যে আপলোড করার চেস্টা করুন', 'WARNING').css('width', '400px;');
                setTimeout(function() {
                  $("#img-upload").attr('src', '{{ asset('images/300x100.png') }}');
                }, 1000);
              }
              // if(((imagewidth/imageheight) < 2.9375) || ((imagewidth/imageheight) > 3.07142)) {
              //   $("#image").val('');
              //   toastr.warning('দৈর্ঘ্য এবং প্রস্থের অনুপাত ১:৩ হওয়া বাঞ্ছনীয়!', 'WARNING').css('width', '400px;');
              //   setTimeout(function() {
              //     $("#img-upload").attr('src', '{{ asset('images/300x100.png') }}');
              //   }, 1000);
              // }
            };
            img.onerror = function() {
              $("#image").val('');
              toastr.warning('অনুগ্রহ করে ছবি সিলেক্ট করুন!', 'WARNING').css('width', '400px;');
              setTimeout(function() {
                $("#img-upload").attr('src', '{{ asset('images/300x100.png') }}');
              }, 1000);
            };
            img.src = _URL.createObjectURL(file);
          }
      });
    });
  </script>
  <script type="text/javascript">
    $(function(){
     $('a[title]').tooltip();
     $('button[title]').tooltip();
    });
  </script>
@stop