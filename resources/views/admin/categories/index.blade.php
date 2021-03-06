@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                <!--/<div class="card-header">
                        Label List
                    <a href="{{ route('categories.create') }}"
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
                                        <h2>Administrar <b>Categorías</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{ route('categories.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i><span> New category</span></a>
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
                                    <th>Number</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                                    </td>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('categories.show', $category->id) }}"
                                        class="btn btn-sm btn-primary">
                                            <i class="fas fa-info"></i>
                                            view
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                           class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['categories.destroy', $category->id],
                                        'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                                Remove
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                             </tr>
                            @endforeach
                                </tbody>
                            </table>
                            {{ $categories->render() }}
                        </div>
                    </div><!-- here the template -->
                </div>

            </div>
        </div>
    </div>
@endsection