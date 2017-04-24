@extends('layouts.admin')


@section('contents')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการข้อมูลรถบรรทุก</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-12">
            <a href="{{ url('managements/trunk/create') }}" class="btn btn-primary">เพิ่มข้อมูลพนักงานขับรถบรรทุก</a>
        </div>

        <br>

    </div>
    <!-- /.row -->

    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    รถบรรทุก
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ทะเบียนรถ</th>
                                <th>รูป</th>
                                <th>น้ำหนักบรรทุก</th>
                                <th>ประเภทรถ</th>
                                <th class="text-center"><i class="fa fa-cog fa-fw"></i> </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($trunk as $value)
                            <tr>
                                <td>{{ $value->trunk_name }}</td>
                                <td>
                                    <img alt="140x140" data-src="holder.js/140x140" class="img-thumbnail" src="{{ Storage::url($value->image) }}" data-holder-rendered="true" style="width: 120px; height: 120px;">
                                </td>
                                <td>{{ number_format($value->freight_weight, 3) }}</td>
                                <td>{{ $value->category_trunk }}</td>
                                <td class="text-center">
                                    <!-- Button trigger modal -->
                                    <a href="{{ url('managements/trunk/' . $value->trunk_id . '/edit') }}">
                                        <i class="fa fa-edit fa-fw"></i>
                                    </a>
                                    |
                                    <!-- Button trigger modal -->
                                    <a href="javascript::void(0)" class="btn-delete" data-id="{{ $value->trunk_id }}">
                                        <i class="fa fa-trash-o fa-fw"></i>
                                    </a>

                                    {{ Form::open(['method' => 'DELETE', 'url' => ['managements/trunk', $value->trunk_id ], 'id' => 'frmDel'.$value->trunk_id]) }}

                                    {{ Form::close() }}
                                </td>


                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->

    </div>

@endsection