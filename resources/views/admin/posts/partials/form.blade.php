{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id', 'Categories') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('name', 'Tag name') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL friendly') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Image') }}
    {{ Form::file('file') }}
</div>
<div class="form-group">
    {{ Form::label('status', 'State') }}
    <br>
    <label>
        {{ Form::radio('status', 'PUBLISHED') }} Published
    </label>
    <label>
        {{ Form::radio('status', 'DRAFT') }} Draft
    </label>
</div>
<div class="form-group">
    {{ Form::label('tags', 'Tags') }}
    <div>
        @foreach($tags as $tag)
            {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
        @endforeach
    </div>

</div>
<div class="form-group">
    {{ Form::label('excerpt', 'Abstract') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}

<div class="form-group">
{{ Form::label('body', 'Description') }}
    {{ Form::textarea('body', null, ['class' => 'ckeditor', 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('save', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
    <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function(){
           $("#name, #slug").stringToSlug({
               callback: function(text){
                   $("#slug").val(text);
               }
           });
        });

        CKEDITOR.config.height = 300;
        CKEDITOR.config.width = 'auto';

        CKEDITOR.replace('body');
    </script>
@endsection