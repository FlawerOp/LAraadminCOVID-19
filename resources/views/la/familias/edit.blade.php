@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/familias') }}">Familia</a> :
@endsection
@section("contentheader_description", $familia->$view_col)
@section("section", "Familias")
@section("section_url", url(config('laraadmin.adminRoute') . '/familias'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Familias Edit : ".$familia->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($familia, ['route' => [config('laraadmin.adminRoute') . '.familias.update', $familia->id ], 'method'=>'PUT', 'id' => 'familia-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'Nombre')
					@la_input($module, 'Integrantes')
					@la_input($module, 'Niños')
					@la_input($module, 'Descripcion')
					@la_input($module, 'Email')
					@la_input($module, 'Donacion')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/familias') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#familia-edit-form").validate({
		
	});
});
</script>
@endpush
