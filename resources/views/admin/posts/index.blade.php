@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                <!--/<div class="card-header">
                        Label List
                    <a href="{{ route('posts.create') }}"
                           class="btn btn-sm btn-primary pull-right">
                            Create
                        </a>
                    </div>
                </div>  /cierre card header-->
                <div class="card-body">
                    <div class="container">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Administrar <b>Entradas</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{ route('posts.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i><span> New Entry</span></a>
                                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-trash-alt"></i> <span> Remove</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                                    </th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                                    </td>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('posts.show', $post->id) }}"
                                        class="btn btn-sm btn-primary">
                                            view
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                           class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['posts.destroy', $post->id],
                                        'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Remove
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                             </tr>
                            @endforeach
                                </tbody>
                            </table>
                            {{ $posts->render() }}
                        </div>
                    </div><!-- -->
                </div>

            </div>
        </div>
    </div>
@endsection