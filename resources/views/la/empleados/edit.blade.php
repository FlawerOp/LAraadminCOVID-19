@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/empleados') }}">Empleado</a> :
@endsection
@section("contentheader_description", $empleado->$view_col)
@section("section", "Empleados")
@section("section_url", url(config('laraadmin.adminRoute') . '/empleados'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Empleados Edit : ".$empleado->$view_col)

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
				{!! Form::model($empleado, ['route' => [config('laraadmin.adminRoute') . '.empleados.update', $empleado->id ], 'method'=>'PUT', 'id' => 'empleado-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'Cedula')
					@la_input($module, 'Nombre')
					@la_input($module, 'Nombre_Empresa')
					@la_input($module, 'Email')
					@la_input($module, 'Telefono')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/empleados') }}">Cancel</a></button>
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
	$("#empleado-edit-form").validate({
		
	});
});
</script>
@endpush
