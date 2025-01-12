@extends('adminlte::page')

@section('title', 'Teachers & Staffs')

@section('css')

@stop

@section('content_header')
    <h1>
      শিক্ষক ও এমএলএসএস তালিকা
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#addMemberModal" data-backdrop="static" title="স্টাফ যোগ করুন"><i class="fa fa-fw fa-plus" aria-hidden="true"></i></button>
      </div>
    </h1>
@stop

@section('content')
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 20px;">সিরিয়াল</th>
            <th>নাম</th>
            <th>ধরণ</th>
            <th>ইমেইল ও ফোন নম্বর</th>
            <th>পদবি</th>
            <th>ছবি</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $addmodalflag = 0; $editmodalflag = 0; @endphp
          @foreach($teachers as $member)
          <tr>
            <td>
              {{ bangla($member->serial) }}
            </td>
            <td>{{ $member->name }}</td>
            <td>
              @if($member->staff_type == 0)
                <span class="badge badge-danger">শিক্ষক</span>
              @else
                <span class="badge badge-success">এমএলএসএস</span>
              @endif
            </td>
            <td>{{ $member->email }}<br/>{{ $member->phone }}</td>
            <td>{{ $member->designation }}</td>
            <td>
              @if($member->image != null)
              <img src="{{ asset('images/staff/'.$member->image)}}" style="height: 40px; width: auto;" />
              @else
              <img src="{{ asset('images/user.png')}}" style="height: 40px; width: auto;" />
              @endif
            </td>
            <td>
              <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editMemberModal{{ $member->id }}" data-backdrop="static" title="সম্পাদনা করুন"><i class="fa fa-pencil"></i></button>
              <!-- Edit Member Modal -->
              <!-- Edit Member Modal -->
              <div class="modal fade" id="editMemberModal{{ $member->id }}" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header modal-header-success">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">সম্পাদনা করুন</h4>
                    </div>
                    <div class="modal-body">
                      {!! Form::model($member, ['route' => ['dashboard.updatestaff', $member->id], 'method' => 'PUT', 'class' => 'form-default', 'enctype' => 'multipart/form-data']) !!}
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('name', 'নাম') !!}
                                {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'স্টাফের নাম লিখুন', 'required')) !!}
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('designation', 'পদবি') !!}
                                {!! Form::text('designation', null, array('class' => 'form-control', 'placeholder' => 'পদবি লিখুন', 'required')) !!}
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('email', 'ইমেইল') !!}
                                {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'ইমেইল এড্রেস লিখুন')) !!}
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('phone', 'ফোন নম্বর') !!}
                                {!! Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'ফোন নম্বর লিখুন', 'required')) !!}
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('fb', 'FB Url: (optional)') !!}
                                {!! Form::text('fb', null, array('class' => 'form-control', 'placeholder' => 'Facebook Url')) !!}
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('twitter', 'Twitter Url: (optional)') !!}
                                {!! Form::text('twitter', null, array('class' => 'form-control', 'placeholder' => 'Twitter Url')) !!}
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('linkedin', 'যোগাযোগের পারদর্শিতা (শতকরায়)') !!}
                                {!! Form::text('linkedin', null, array('class' => 'form-control', 'placeholder' => 'Linkedin Url')) !!}
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('serial', 'সিরিয়াল নম্বর (1/2/3 ইত্যাদি)') !!}
                                {!! Form::text('serial', null, array('class' => 'form-control', 'placeholder' => 'সিরিয়াল নম্বর (1/2/3 ইত্যাদি)', 'required')) !!}
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('communication_skill', 'যোগাযোগের পারদর্শিতা (শতকরায়)') !!}
                                {!! Form::number('communication_skill', null, array('class' => 'form-control', 'placeholder' => 'যোগাযোগের পারদর্শিতা', 'required')) !!}
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('experience_skill', 'অভিজ্ঞতা (শতকরা)') !!}
                                {!! Form::number('experience_skill', null, array('class' => 'form-control', 'placeholder' => 'অভিজ্ঞতা', 'required')) !!}
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            {!! Form::label('description', 'বিবরণ') !!}
                            {!! Form::textarea('description', null, array('class' => 'form-control textarea', 'placeholder' => 'বিবরণ', 'required')) !!}
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ছবি (৩০০ X ৩০০ এবং সর্বোচ্চ ৫০০ কিলোবাইট):</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse <input type="file" id="image{{ $member->id }}" name="image">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <center>
                                  <img src="{{ asset('images/user.png')}}" id='img-update{{ $member->id }}' style="height: 100px; width: auto; padding: 5px;" />
                                </center>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                {!! Form::label('staff_type', 'স্টাফের ধরণ') !!}
                                <select class="form-control" name="staff_type" required="">
                                  <option selected="" disabled="">স্টাফের ধরণ নির্ধারণ করুন</option>
                                  <option value="0" @if($member->staff_type == 0) selected="" @endif>শিক্ষক</option>
                                  <option value="1" @if($member->staff_type == 1) selected="" @endif>এমএলএসএস</option>
                                </select>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                          {!! Form::submit('দাখিল করুন', array('class' => 'btn btn-success')) !!}
                          <button type="button" class="btn btn-default" data-dismiss="modal">ফিরে যান</button>
                    </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
              <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
              <script type="text/javascript">
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
                              $('#img-update{{ $member->id }}').attr('src', e.target.result);
                          }
                          reader.readAsDataURL(input.files[0]);
                      }
                  }
                  $("#image{{ $member->id }}").change(function(){
                      readURL(this);
                      var filesize = parseInt((this.files[0].size)/1024);
                      if(filesize > 500) {
                        $("#image{{ $member->id }}").val('');
                        toastr.warning('File size is: '+filesize+' Kb. try uploading less than 500Kb', 'WARNING').css('width', '400px;');
                          setTimeout(function() {
                            $("#img-update{{ $member->id }}").attr('src', '{{ asset('images/user.png') }}');
                          }, 1000);
                      }
                  });

                  @if ((count($errors) > 0) && ($editmodalflag == 0))
                    $('#editMemberModal{{ $member->id }}').modal({backdrop: "static"});
                    @php $editmodalflag = 1; @endphp
                  @endif
                });
              </script>
              <!-- Edit Member Modal -->
              <!-- Edit Member Modal -->

              <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteMemberModal{{ $member->id }}" data-backdrop="static" title="মুছে ফেলুন"><i class="fa fa-trash-o"></i></button>
              <!-- Delete Member Modal -->
              <!-- Delete Member Modal -->
              <div class="modal fade" id="deleteMemberModal{{ $member->id }}" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">স্টাফ মুছে ফেলুন</h4>
                    </div>
                    <div class="modal-body">
                      আপনি কী নিশ্চিতভাবে <b>{{ $member->name }}</b>-কে মুছে ফেলতে চান?
                    </div>
                    <div class="modal-footer">
                      {!! Form::model($member, ['route' => ['dashboard.deletestaff', $member->id], 'method' => 'DELETE', 'class' => 'form-default', 'enctype' => 'multipart/form-data']) !!}
                          {!! Form::submit('মুছুন', array('class' => 'btn btn-danger')) !!}
                          <button type="button" class="btn btn-default" data-dismiss="modal">ফিরে যান</button>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
              <!-- Delete Member Modal -->
              <!-- Delete Member Modal -->
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


    <!-- Add Member Modal -->
    <!-- Add Member Modal -->
    <div class="modal fade" id="addMemberModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header modal-header-success">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">স্টাফ যোগ ফরম</h4>
          </div>
          <div class="modal-body">
            {!! Form::open(['route' => 'dashboard.storestaff', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('name', 'নাম') !!}
                      {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'স্টাফের নাম লিখুন', 'required')) !!}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('designation', 'পদবি') !!}
                      {!! Form::text('designation', null, array('class' => 'form-control', 'placeholder' => 'পদবি লিখুন', 'required')) !!}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('email', 'ইমেইল') !!}
                      {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'ইমেইল এড্রেস লিখুন (থাকলে)')) !!}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('phone', 'ফোন নম্বর') !!}
                      {!! Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'ফোন নম্বর লিখুন', 'required')) !!}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('fb', 'FB Url: (optional)') !!}
                      {!! Form::text('fb', null, array('class' => 'form-control', 'placeholder' => 'Facebook Url (থাকলে)')) !!}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('twitter', 'Twitter Url: (optional)') !!}
                      {!! Form::text('twitter', null, array('class' => 'form-control', 'placeholder' => 'Twitter Url (থাকলে)')) !!}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('linkedin', 'Linkedin Url: (optional)') !!}
                      {!! Form::text('linkedin', null, array('class' => 'form-control', 'placeholder' => 'Linkedin Url (থাকলে)')) !!}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('serial', 'সিরিয়াল নম্বর (1/2/3 ইত্যাদি)') !!}
                      {!! Form::text('serial', null, array('class' => 'form-control', 'placeholder' => 'সিরিয়াল নম্বর (1/2/3 ইত্যাদি)', 'required')) !!}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('communication_skill', 'যোগাযোগের পারদর্শিতা (শতকরায়)') !!}
                      {!! Form::number('communication_skill', null, array('class' => 'form-control', 'placeholder' => 'যোগাযোগের পারদর্শিতা', 'required')) !!}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('experience_skill', 'অভিজ্ঞতা (শতকরা)') !!}
                      {!! Form::number('experience_skill', null, array('class' => 'form-control', 'placeholder' => 'অভিজ্ঞতা', 'required')) !!}
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  {!! Form::label('description', 'বিবরণ') !!}
                  {!! Form::textarea('description', null, array('class' => 'form-control textarea', 'placeholder' => 'বিবরণ', 'required')) !!}
                </div>
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>ছবি (৩০০ X ৩০০ এবং সর্বোচ্চ ৫০০ কিলোবাইট):</label>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <span class="btn btn-default btn-file">
                                      Browse <input type="file" id="image" name="image">
                                  </span>
                              </span>
                              <input type="text" class="form-control" readonly>
                          </div>
                      </div>
                      <center>
                        <img src="{{ asset('images/user.png')}}" id='img-upload' style="height: 100px; width: auto; padding: 5px;" />
                      </center>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::label('staff_type', 'স্টাফের ধরণ') !!}
                      <select class="form-control" name="staff_type" required="">
                        <option selected="" disabled="">স্টাফের ধরণ নির্ধারণ করুন</option>
                        <option value="0">শিক্ষক</option>
                        <option value="1">এমএলএসএস</option>
                      </select>
                    </div>
                  </div>
                </div>
          </div>
          <div class="modal-footer">
                {!! Form::submit('দাখিল করুন', array('class' => 'btn btn-success')) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">ফিরে যান</button>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <!-- Add Member Modal -->
    <!-- Add Member Modal -->
@stop

@section('js')
  <script type="text/javascript">
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
          var filesize = parseInt((this.files[0].size)/1024);
          if(filesize > 500) {
            $("#image").val('');
            toastr.warning('File size is: '+filesize+' Kb. try uploading less than 500Kb', 'WARNING').css('width', '400px;');
              setTimeout(function() {
                $("#img-upload").attr('src', '{{ asset('images/user.png') }}');
              }, 1000);
          }
      });

      @if (count($errors) > 0 && $addmodalflag = 0)
        $('#addMemberModal').modal({backdrop: "static"});
        @php $addmodalflag = 1; @endphp
      @endif
    });
  </script>
@stop