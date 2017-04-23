@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br>
                    {{ Auth::user() }} <br>
                    {{ Auth::user()->is_owner ? 'true': 'false' }} <br>
                    {{ Auth::user()->is_members ? 'true': 'false' }} <br>
                    {{ Auth::user()->is_drivers ? 'true': 'false' }} <br>
                    {{ Auth::user()->is_others ? 'true': 'false' }} <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


