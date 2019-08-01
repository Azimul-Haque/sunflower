@extends('adminlte::page')

@section('title', 'CVCS | অ্যাডমিনগণ')

@section('css')

@stop

@section('content_header')
    <h1>
      অ্যাডমিনগণ
      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('dashboard.createadmin') }}" title="অ্যাডমিন যোগ করুন"><i class="fa fa-fw fa-plus" aria-hidden="true"></i></a>
      </div>
    </h1>
@stop

@section('content')
  <h4>অ্যাডমিনগণ</h4>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>নাম</th>
          <th>যোগাযোগ</th>
          <th>ইমেইল</th>
          <th>ছবি</th>
          <th width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($admins as $admin)
        <tr>
          <td>
            {{ $admin->name }}
          </td>
          <td>{{ $admin->mobile }}</td>
          <td>{{ $admin->email }}</td>
          <td>
            @if($admin->image != null)
              <img src="{{ asset('images/users/'.$admin->image)}}" style="height: 50px; width: auto;" />
            @else
              <img src="{{ asset('images/user.png')}}" style="height: 50px; width: auto;" />
            @endif
          </td>
          <td>
            <a class="btn btn-sm btn-success" href="#" title="সদস্য তথ্য দেখুন"><i class="fa fa-eye"></i></a>
            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#removeAdmin{{ $admin->id }}" data-backdrop="static" title="অ্যাডমিন থেকে অব্যহতি দিন" disabled=""><i class="fa fa-trash-o"></i></button>
            <!-- Remove Admin Modal -->
            <!-- Remove Admin Modal -->
            <div class="modal fade" id="removeAdmin{{ $admin->id }}" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header modal-header-danger">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">অ্যাডমিন থেকে অব্যহতি দিন</h4>
                  </div>
                  <div class="modal-body">
                    আপনি কি নিশ্চিতভাবে <b>{{ $admin->name_bangla }}</b>-কে অ্যাডমিন থেকে অব্যহতি দিতে চান?
                  </div>
                  <div class="modal-footer">
                    {!! Form::model($admin, ['route' => ['dashboard.removeadmin', $admin->id], 'method' => 'PATCH', 'class' => 'form-default']) !!}
                        {!! Form::submit('অব্যহতি দিন', array('class' => 'btn btn-danger')) !!}
                        <button type="button" class="btn btn-default" data-dismiss="modal">দিরে যান</button>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
            <!-- Remove Admin Modal -->
            <!-- Remove Admin Modal -->
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{ $admins->links() }}
@stop

@section('js')

@stop