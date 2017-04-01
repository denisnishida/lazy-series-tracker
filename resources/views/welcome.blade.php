@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">

                    @if (Auth::check())
                        <div class="panel-heading">
                            Your Series List
                        </div>

                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Notes</th>
                                <th>Bookmark</th>
                                <th>Last Watched at</th>
                            </tr>

                            @foreach ($characters as $key => $value)
                                <tr>
                                    <td>{{$key}}</td>
                                    <td><a href="#">See Notes</a></td>
                                    <td>{{$value}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    @endif

                </div>

                @if (Auth::guest())
                    <p>
                        This is simple website to manage what you are watching.
                    </p>
                    <a href="/login" class="btn btn-info">
                        Login to see the list
                    </a>
                @endif

            </div>
        </div>
    </div>
@endsection
