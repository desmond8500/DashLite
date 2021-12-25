{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('invoice_id', 'Invoice_id:') !!}
			{!! Form::text('invoice_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('reference', 'Reference:') !!}
			{!! Form::textarea('reference') !!}
		</li>
		<li>
			{!! Form::label('quantity', 'Quantity:') !!}
			{!! Form::text('quantity') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</li>
		<li>
			{!! Form::label('priority_id', 'Priority_id:') !!}
			{!! Form::text('priority_id') !!}
		</li>
		<li>
			{!! Form::label('coef', 'Coef:') !!}
			{!! Form::text('coef') !!}
		</li>
		<li>
			{!! Form::label('section', 'Section:') !!}
			{!! Form::text('section') !!}
		</li>
		<li>
			{!! Form::label('article_id', 'Article_id:') !!}
			{!! Form::text('article_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}