@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Content
        <small>Create {replace}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('{replace_sm}') }}">{replace}</a></li>
        <li class="active">Create</li>
    </ol>
</section>
@include('common.notification.alert')
<!-- Main content -->
<section class="content">
    <form id="form_{replace_sm}_register" method="post" action="{{ url('{replace_sm}') }}">
        {!! csrf_field() !!}
        <div class="panel panel-default">
            <div class="panel-body">
                <!-- include component-->
                <button type="submit" class="btn btn-success pull-right" style="margin-top: 10px">
                    <span class="fa fa-save" role="presentation" aria-hidden="true"></span> ยืนยันการบันทึกข้อมูล
                </button>
            </div>
        </div>
    </form>
</section>
@stop

@push('styles')
<link rel="stylesheet" href="{{ asset('plugins/backpack/crud/css/crud.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/backpack/crud/css/form.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/backpack/crud/css/list.css') }}">
@include('admin.{replace_sm}.style')
@stack('crud_list_styles')
@endpush

@push('scripts')
@include('admin.{replace_sm}.create-script')
@endpush