{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('project_id', 'Project_id:') !!}
			{!! Form::text('project_id') !!}
		</li>
		<li>
			{!! Form::label('reference', 'Reference:') !!}
			{!! Form::textarea('reference') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('status_id', 'Status_id:') !!}
			{!! Form::text('status_id') !!}
		</li>
		<li>
			{!! Form::label('tva', 'Tva:') !!}
			{!! Form::text('tva') !!}
		</li>
		<li>
			{!! Form::label('discount', 'Discount:') !!}
			{!! Form::text('discount') !!}
		</li>
		<li>
			{!! Form::label('notes', 'Notes:') !!}
			{!! Form::textarea('notes') !!}
		</li>
		<li>
			{!! Form::label('modalities', 'Modalities:') !!}
			{!! Form::textarea('modalities') !!}
		</li>
		<li>
			{!! Form::label('client_name', 'Client_name:') !!}
			{!! Form::text('client_name') !!}
		</li>
		<li>
			{!! Form::label('client_adress', 'Client_adress:') !!}
			{!! Form::text('client_adress') !!}
		</li>
		<li>
			{!! Form::label('client_tel', 'Client_tel:') !!}
			{!! Form::text('client_tel') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}