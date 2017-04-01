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

                        <div class="panel-body">
                            <form class="form-horizontal" role="form"
                                  method="POST" action="/register_series">

                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" required autofocus />

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="notes" class="col-md-4 control-label">Your Notes</label>

                                    <div class="col-md-6">
                                        <textarea id="notes" class="form-control" rows="4"
                                                  placeholder="You can write here details and links."></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
