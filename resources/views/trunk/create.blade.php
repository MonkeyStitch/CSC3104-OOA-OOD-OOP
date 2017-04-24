@extends('layouts.admin')


@section('contents')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เพิ่มข้อมูลพนักงานขับรถบรรทุก</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-12">
            <a href="{{ url('managements/trunk') }}" class="btn btn-primary">จัดการข้อมูลรถบรรทุก</a>
        </div>

        <br>
    </div>
    <!-- /.row -->

    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    เพิ่มข้อมูลพนักงานขับรถบรรทุก
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    {!! Form::open(['url' => 'managements/trunk', 'method' => 'post', 'files' => true]) !!}

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label>ป้ายทะเบียนรถ</label>
                                    <input class="form-control" type="text" placeholder="Enter text" name="trunk_name" required>
                                </div>

                                <div class="form-group">
                                    <label>อัพโหลดรูปภาพ</label>
                                    <input type="file" name="picture">
                                </div>

                                <div class="form-group">
                                    <label>ประเภทรถ</label>
                                    <select class="form-control" name="category_trunk" required>
                                        <option value="null">-- โปรดเลือก --</option>
                                        <option value="สิบสองล้อ">สิบสองล้อ</option>
                                        <option value="สิบล้อ">สิบล้อ</option>
                                        <option value="รถพ่วง">รถพ่วง</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>น้ำหนักบรรทุก</label>
                                    <input class="form-control" type="date" placeholder="Enter text" name="joined" required>
                                </div>
                                <div class="form-group">
                                    <label>น้ำหนักบรรทุก</label>
                                    <input class="form-control" placeholder="Enter text" type="text" name="freight_weight" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group text-right">
                                    {{--<button type="reset" class="btn btn-outline btn-warning">reset</button>--}}
                                    <button type="submit" class="btn btn-outline btn-primary">บันทึกข้อมูล</button>
                                </div>
                            </div>
                        </div>


                    {!! Form::close() !!}

                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>

@endsection