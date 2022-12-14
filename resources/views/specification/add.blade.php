@extends('layouts.master')

@section('title', 'إضافة تخصص')

@section('styles')
    {!! Html::style('css/form.css') !!}
@stop

@section('content')
    @section('breadcrumbs')
        {!! Breadcrumbs::render('add.specification') !!}
    @stop

    <div class="page-content">
        <div class="col-md-12">
            <div class="page-header">
                <h1><i class="menu-icon fa fa-magic"></i> إضافة تخصص </h1>
            </div>
        </div>

        <div class="col-md-12">
            {{ Form::open(['route' => 'admin.specification.store', 'class' => 'form']) }}
                @include('specification.form', ['btn' => 'حفظ'])
            {{ Form::close() }}
        </div>
    </div>
@stop
