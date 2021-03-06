@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Test
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Test Form -->
                    <form action="{{ url('test') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Test Name -->

                        <div class="form-group">
                            <label for="test-name" class="col-sm-3 control-label">Test Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="test-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Test Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Test
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tests -->
            @if (count($tests) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tests
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Tests</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tests as $test)
                                    <tr>
                                        <td class="table-text"><div>{{ $test->name }}</div></td>

                                        <!-- Test Delete Button -->
                                        <td>
                                            <form action="{{url('test/' . $test->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-test-{{ $test->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
