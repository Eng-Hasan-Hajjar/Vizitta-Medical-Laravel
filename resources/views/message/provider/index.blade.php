@extends('layouts.master')

@section('title', 'رسائل مقدمى الخدمة')

@section('content')
@section('breadcrumbs')
    {!! Breadcrumbs::render('user.message') !!}
@stop

<div class="page-content">
    <div class="col-md-12">
        <div class="col-md-9 page-header">
            <h1><i class="menu-icon fa fa-envelope-o"></i> رسائل مقدمى الخدمة </h1>
        </div>
    </div>
    <div class="col-md-12">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover no-footer" width="100%">
            <thead>
            <tr>
                <th>رقم الرسالة</th>
                <th> عنوان المراسلة </th>
                <th>اسم مقدم الخدمة</th>
                <th>النوع</th>
                <th>الأهمية</th>
                <th>التاريخ</th>
                <th>العمليات</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#dynamic-table').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('admin.provider.message.data') }}",
                columns: [
                    {name: 'message_no'},
                    {name: 'title'},
                    {name: 'provider.name_ar', render: function (data) {
                            return (data === "N/A" ? '' : data);
                        }, orderable: false
                    },
                    {name: 'type'},
                    {name: 'importance'},
                    {name: 'created_at'},
                    {name: 'provider_action', orderable: false, searchable: false}

                ],
            });
        });
    </script>
@stop
