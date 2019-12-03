@inject('request', 'Illuminate\Http\Request')
<!-- @extends('layouts.app') -->

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {replace}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{replace}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    @include('common.notification.alert')
    <p>

        <a href="{{ url('{replace_sm}/create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i>
            Create {replace}
        </a>
    </p>

    <div class="panel panel-default">
        <div class="panel-body table-responsive">
            <table id="user_table" class="table responsive table-bordered table-striped" style="width:100%;">
                <thead>
                <tr class="bg-head-table">
                    <th data-priority="2" style="width: 120px;text-align: center;vertical-align: text-top;">Id</th>
                </tr>
                </thead>
                <tfoot>
                <tr class="bg-gray color-palette">
                    <th>Id</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@stop

@push('styles')
@include('admin.{replace_sm}.index-style')
@endpush

@push('scripts')
@include('admin.{replace_sm}.index-script')
@endpush