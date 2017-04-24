<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">ระบบประมวลผลรายงานการบรรทุกอ้อย</a>
    </div>
    <!-- /.navbar-header -->


    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ url('/') }}"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} </a>
                </li>
                <li><a href="{{ url('#') }}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> แดชบอร์ด</a>
                </li>
                <li>
                    <a href="{{ url('report-cane-truck') }}"><i class="fa fa-bar-chart-o fa-fw"></i> รายงานการบรรทุกอ้อย</a>
                </li>

                <li>
                    <a href="{{ url('work-table') }}"><i class="fa fa-table fa-fw"></i> ตารางงาน</a>
                </li>
                <li>
                    <a href="{{ url('managements/drivers') }}"><i class="fa fa-edit fa-fw"></i> จัดการข้อมูลพนักงานขับรถบรรทุก</a>
                </li>
                <li>
                    <a href="{{ url('managements/trunk') }}"><i class="fa fa-wrench fa-fw"></i> จัดการข้อมูลรถบรรทุก</a>
                </li>

                {{--<li>--}}
                    {{--<a href="{{ url('managements/members') }}"><i class="fa fa-edit fa-fw"></i> จัดการข้อมูลสมาชิก(ลูกไร่)</a>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<a href="{{ url('managements/sugarcane') }}"><i class="fa fa-sitemap fa-fw"></i> ข้อมูลไร่</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>