@extends('adminlte::page')

@section('title', 'CVCS | অ্যাডমিন নির্ধারণ')

@section('css')

@stop

@section('content_header')
    <h1>
      অ্যাডমিন নির্ধারণ
      <div class="pull-right">
        
      </div>
    </h1>
@stop

@section('content')
  @if(Auth::user()->role == 'admin')
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border text-blue">
          <i class="fa fa-fw fa-key"></i>
          <h3 class="box-title">অ্যাডমিন তৈরি করুন</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          {!! Form::open(['route' => 'dashboard.addadmin', 'method' => 'POST']) !!}
            <div class="form-group">
              <label for="name">নাম</label>
              <input type="text" name="name" class="form-control" placeholder="নাম লিখুন">
            </div>
            <div class="form-group">
              <label for="email">ইমেইল</label>
              <input type="email" name="email" class="form-control" placeholder="ইমেইল লিখুন">
            </div>
            <div class="form-group">
              <label for="mobile">মোবাইল</label>
              <input type="number" name="mobile" class="form-control" placeholder="মোবাইল লিখুন" onkeypress="if(this.value.length==11) return false;">
            </div>
            <div class="form-group">
              <label for="password">পাসপার্ড</label>
              <input type="password" name="password" class="form-control" placeholder="পাসপার্ড লিখুন">
            </div>
            <div class="form-group">
              <button class="btn btn-success" type="submit"><i class="fa fa-user-secret"></i> অ্যাডমিন নিয়োগ দিন</button>
            </div>
          {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <div class="col-md-6"></div>
  </div>

  @else
    <span class="text-red"><i class="fa fa-exclamation-triangle"></i> দুঃখিত, আপনার এই পাতাটি দেখবার অনুমতি নেই!</span>
  @endif
@stop

@section('js')
  <script type="text/javascript">

  </script>
@stop