@extends('adminlte::page')

@section('title', 'CVCS | তথ্য এবং টেক্সট')

@section('content_header')
    <h1><i class="fa fa-pic"></i> তথ্য এবং টেক্সট</h1>
@stop

@section('content')
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border text-blue">
            <i class="fa fa-fw fa-file-text-o"></i>
            <h3 class="box-title">Basic Information</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($basicinfo, ['route' => ['dashboard.updatebasicinfo', $basicinfo->id], 'method' => 'PUT']) !!}
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                {!! Form::text('address', null, array('class' => 'form-control text-blue', 'required' => '', 'placeholder' => 'Write Address')) !!}
              </div>
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                {!! Form::text('contactno', null, array('class' => 'form-control text-blue', 'required' => '', 'placeholder' => 'Write Contact No')) !!}
              </div>
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                {!! Form::text('email', null, array('class' => 'form-control text-blue', 'required' => '', 'placeholder' => 'Write Email Address')) !!}
              </div>
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                {!! Form::text('shorttext', null, array('class' => 'form-control text-blue', 'required' => '', 'placeholder' => 'Write Short Text (180 Char Max)')) !!}
              </div>
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
                {!! Form::text('fb', null, array('class' => 'form-control text-blue', 'placeholder' => 'Write Facebook Page Url (Optional)')) !!}
              </div>
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                {!! Form::text('twitter', null, array('class' => 'form-control text-blue', 'placeholder' => 'Write Twitter Page Url (Optional)')) !!}
              </div>
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                {!! Form::text('ytube', null, array('class' => 'form-control text-blue', 'placeholder' => 'Write YouTube Channel Url (Optional)')) !!}
              </div>
              <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-linkedin-square"></i></span>
                {!! Form::text('linkedin', null, array('class' => 'form-control text-blue', 'placeholder' => 'Write LinkedIn Page Url (Optional)')) !!}
              </div>
            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw fa-floppy-o" aria-hidden="true"></i> Submit</button>
            {!! Form::close() !!}
          </div>
          <!-- /.box-body -->
        </div>
        <div class="box box-primary">
          <div class="box-header with-border text-blue">
            <i class="fa fa-fw fa-file-text-o"></i>
            <h3 class="box-title">About Text (CVCS সম্পর্কে)</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($about, ['route' => ['dashboard.updateabouts', $about->id], 'method' => 'PUT']) !!}
              <div class="form-group">
                <label>Text:</label>
                {!! Form::textarea('text', str_replace('<br />', "", $about->text), array('class' => 'form-control text-blue textarea', 'required' => '', 'placeholder' => 'Write details about the institution')) !!}
              </div>
            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw fa-floppy-o" aria-hidden="true"></i> Submit</button>
            {!! Form::close() !!}
          </div>
          <!-- /.box-body -->
        </div>
        <div class="box box-primary">
          <div class="box-header with-border text-blue">
            <i class="fa fa-fw fa-file-text-o"></i>
            <h3 class="box-title">What we do</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($whatwedo, ['route' => ['dashboard.updateabouts', $whatwedo->id], 'method' => 'PUT']) !!}
              <div class="form-group">
                <label>Text:</label>
                {!! Form::textarea('text', str_replace('<br />', "", $whatwedo->text), array('class' => 'form-control text-blue textarea', 'required' => '', 'placeholder' => 'What we do')) !!}
              </div>
            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw fa-floppy-o" aria-hidden="true"></i> Submit</button>
            {!! Form::close() !!}
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="box box-success">
          <div class="box-header with-border text-green">
            <i class="fa fa-fw fa-file-text-o"></i>
            <h3 class="box-title">Brief History</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($history, ['route' => ['dashboard.updateabouts', $history->id], 'method' => 'PUT']) !!}
              <div class="form-group">
                <label>Text:</label>
                {!! Form::textarea('text', str_replace('<br />', "", $history->text), array('class' => 'form-control text-green textarea', 'required' => '', 'placeholder' => 'Write brief history')) !!}
              </div>
            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-fw fa-floppy-o" aria-hidden="true"></i> Submit</button>
            {!! Form::close() !!}
          </div>
          <!-- /.box-body -->
        </div>
        <div class="box box-success">
          <div class="box-header with-border text-green">
            <i class="fa fa-fw fa-file-text-o"></i>
            <h3 class="box-title">At a Glance</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($ataglance, ['route' => ['dashboard.updateabouts', $ataglance->id], 'method' => 'PUT']) !!}
              <div class="form-group">
                <label>Text:</label>
                {!! Form::textarea('text', str_replace('<br />', "", $ataglance->text), array('class' => 'form-control text-green textarea', 'required' => '', 'placeholder' => 'Write at a glance')) !!}
              </div>
            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-fw fa-floppy-o" aria-hidden="true"></i> Submit</button>
            {!! Form::close() !!}
          </div>
          <!-- /.box-body -->
        </div>
        <div class="box box-success">
          <div class="box-header with-border text-green">
            <i class="fa fa-fw fa-file-text-o"></i>
            <h3 class="box-title">Mission & Vision</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($mission, ['route' => ['dashboard.updateabouts', $mission->id], 'method' => 'PUT']) !!}
              <div class="form-group">
                <label>Text:</label>
                {!! Form::textarea('text', str_replace('<br />', "", $mission->text) , array('placeholder' => 'Write mission and vision','class' => 'form-control text-green textarea', 'autocomplete' => 'off')) !!}
              </div>
            <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-fw fa-floppy-o" aria-hidden="true"></i> Submit</button>
            {!! Form::close() !!}
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
@stop