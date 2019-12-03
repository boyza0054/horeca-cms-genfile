@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {replace} Information
        <small>Edit {replace}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('{replace_sm}') }}">{replace}</a></li>
        <li class="active">Edit</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    @include('common.notification.alert')
    {!! Form::model($data, ['method' => 'POST', 'route' => ['admin.{replace_sm}.update', $data['id']]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    Id <span style="color:red;">*</span>
                    <input type="text" name="id">
                    <p class="help-block"></p>

                </div>
            </div>

    </div>
</section>
@stop

@push('styles')
@include('admin.{replace_sm}.edit-style')
@endpush

@push('scripts')
@include('admin.{replace_sm}.edit-script')
@endpush