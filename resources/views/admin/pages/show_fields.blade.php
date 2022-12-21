<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/pages.fields.id').':') !!}
    <p>{{ $page->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/pages.fields.title').':') !!}
    <p>{{ $page->title }}</p>
</div>

<!-- Short Description Field -->
<div class="form-group">
    {!! Form::label('short_description', __('models/pages.fields.short_description').':') !!}
    <p>{{ $page->short_description }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/pages.fields.description').':') !!}
    <p>{{ $page->description }}</p>
</div>

<!-- Main Image Field -->
<div class="form-group">
    {!! Form::label('main_image', __('models/pages.fields.main_image').':') !!}
    <p>{{ $page->main_image }}</p>
</div>

<!-- Keywords Field -->
<div class="form-group">
    {!! Form::label('keywords', __('models/pages.fields.keywords').':') !!}
    <p>{{ $page->keywords }}</p>
</div>

<!-- Background Color Field -->
<div class="form-group">
    {!! Form::label('background_color', __('models/pages.fields.background_color').':') !!}
    <p>{{ $page->background_color }}</p>
</div>

<!-- In Home Field -->
<div class="form-group">
    {!! Form::label('in_home', __('models/pages.fields.in_home').':') !!}
    <p>{{ $page->in_home }}</p>
</div>

<!-- Animation Image Field -->
<div class="form-group">
    {!! Form::label('animation_image', __('models/pages.fields.animation_image').':') !!}
    <p>{{ $page->animation_image }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/pages.fields.created_at').':') !!}
    <p>{{ $page->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/pages.fields.updated_at').':') !!}
    <p>{{ $page->updated_at }}</p>
</div>

