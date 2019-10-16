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
                                            <h2>Edit <b>Category</b></h2>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    {!! Form::model($tag, ['route' => ['categories.update', $tag->id],
                                    'method' => 'PUT']) !!}
                                    @include('admin.categories.partials.form')
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div><!-- here the template -->
                    </div>

                </div>
            </div>
        </div>
@endsection