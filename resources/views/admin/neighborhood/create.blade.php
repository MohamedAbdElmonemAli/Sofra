@extends('layouts.app')

@inject('model','App\Models\Neighborhood')
@inject('city','App\Models\City')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            إضافه حي
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('admin/home')}}"><i class="fa fa-dashboard"></i> الرئسية</a></li>
            <li class="active">إضافه حي</li>
        </ol>
    </section>



    <!-- Main content -->
    <section class="content">
    @include('partials.validationerrors')
    <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                {!!Form::model($model,[
                    'action' => 'Admin\NeighborhoodController@store'
                ])!!}

                <div class="form-group">
                    <label for="name">الحي</label>
                    {!!Form::text('name',null,[
                        'class' => 'form-control'
                    ])!!}
                </div>
                <div class="form-group">
                    <label for="name">المدينه</label>
                    {!!Form::select('city_id',$city->pluck('name','id')->toArray(),null,[
                        'class' => 'form-control','placeholder'=>'المدينه'
                    ])!!}
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="Submit">حفظ</button>
                </div>

                {!!Form::close()!!}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
