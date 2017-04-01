@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">

                    @if (Auth::check())
                        <div class="panel-heading">
                            <div>Add a new Series to your list</div>
                        </div>

                        
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
