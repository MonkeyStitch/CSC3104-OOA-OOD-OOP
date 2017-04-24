@extends('layouts.admin')


@section('contents')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เพิ่มข้อมูลพนักงานขับรถบรรทุก</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-12">
            <a href="{{ url('managements/drivers') }}" class="btn btn-primary">จัดการข้อมูลรถบรรทุก</a>
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

                    {!! Form::open(['url' => 'managements/drivers', 'method' => 'post', 'files' => true]) !!}

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input class="form-control" placeholder="Enter text" name="first_name">
                            </div>
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input class="form-control" placeholder="Enter text" name="last_name">
                            </div>
                            <div class="form-group">
                                <label>วัน/เดือน/ปีเกิด</label>
                                <input class="form-control" placeholder="Enter text" name="birthday">
                            </div>
                            <div class="form-group">
                                <label>อัพโหลดรูปภาพ</label>
                                <input type="file" name="picture">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทร</label>
                                <input class="form-control" placeholder="Enter text" name="tel_mobile">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <input class="form-control" placeholder="Enter text" name="address">
                            </div>
                            <div class="form-group">
                                <label>ใบอนุญาติขับขี่</label>
                                <div class="form-group">
                                    <label>ชนิด : &nbsp;</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInlineType" id="optionsRadiosInline1" value="1" checked>1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInlineType" id="optionsRadiosInline2" value="2">2
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>ประเภท : &nbsp;</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInlineCategories" id="optionsRadiosInline1" value="1" checked>1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInlineCategories" id="optionsRadiosInline2" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInlineCategories" id="optionsRadiosInline3" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInlineCategories" id="optionsRadiosInline4" value="4">4
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>วัน/เดือน/ปี วันอนุญาติใบขับขี่</label>
                                <input class="form-control" placeholder="Enter date" name="dateIssue">
                            </div>
                            <div class="form-group">
                                <label>วัน/เดือน/ปี วันหมดอายุของใบขับขี่</label>
                                <input class="form-control" placeholder="Enter text" name="dateExpiry">
                            </div>

                            <div class="form-group">
                                <label>รถประจำรถบรรทุก</label>
                                <select class="form-control" name="trunk">

                                    @foreach($trunks as $trunk)
                                        <option value="{{ $trunk->trunk_id }}">{{ $trunk->trunk_name }}</option>
                                    @endforeach
                                </select>
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