@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/medicos') }}">Medico</a> :
@endsection
@section("contentheader_description", $medico->$view_col)
@section("section", "Medicos")
@section("section_url", url(config('laraadmin.adminRoute') . '/medicos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Medicos Edit : ".$medico->$view_col)

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
				{!! Form::model($medico, ['route' => [config('laraadmin.adminRoute') . '.medicos.update', $medico->id ], 'method'=>'PUT', 'id' => 'medico-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'Numero_Profesional')
					@la_input($module, 'Nombre')
					@la_input($module, 'Cedula')
					@la_input($module, 'Direccion')
					@la_input($module, 'Telefono')
					@la_input($module, 'Email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/medicos') }}">Cancel</a></button>
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
	$("#medico-edit-form").validate({
		
	});
});
</script>
@endpush
