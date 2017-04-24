@extends('layouts.admin')


@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ตารางงาน</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-12">
            <a href="{{ url('managements/work/create') }}" class="btn btn-primary">เพิ่มข้อมูลตารางงาน</a>
        </div>

        <br>

    </div>
    <!-- /.row -->
    <div class="row">

       {{-- <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    การบรรทุกอ้อยใน 1 อาทิตย์
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>--}}


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    การบรรทุกอ้อยทั้งหมด
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>วันที่ส่ง</th>
                            <th>ทะเบียนรถ</th>
                            <th>คนขับ</th>
                            <th>บรรทุกอ้อยจาก</th>
                            <th>น้ำหนักรถ</th>
                            <th>น้ำหนักอ้อย</th>
                            <th>น้ำหนักรวมสุทธิ</th>
                            <th>วันที่ออกใบบรรทุก</th>
                            <th class="text-center"><i class="fa fa-cog fa-fw"></i> </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="">
                            <td>3/01/2560</td>
                            <td>82-8502</td>
                            <td>tis</td>
                            <td>ส.รุ่งเจริญ</td>
                            <td>11.250</td>
                            <td>15.070</td>
                            <td>26.320</td>
                            <td>3/01/2560</td>
                            <td class="text-center">
                                <!-- Button trigger modal -->
                                <a href="{{ url('managements/trunk/' . '' . '/edit') }}">
                                    <i class="fa fa-edit fa-fw"></i>
                                </a>
                                |
                                <!-- Button trigger modal -->
                                <a href="javascript::void(0)" class="btn-delete" data-id="">
                                    <i class="fa fa-trash-o fa-fw"></i>
                                </a>

                                {{--{{ Form::open(['method' => 'DELETE', 'url' => ['managements/trunk', $value->trunk_id ], 'id' => 'frmDel'.$value->trunk_id]) }}--}}

                                {{--{{ Form::close() }}--}}
                            </td>
                        </tr>
                        </tbody>


                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection