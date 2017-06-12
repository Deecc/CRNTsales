@extends('layouts.app')

@section('content')
<div class="container">

	<div id="cabinsA">
		<h3>Camarotes - A</h3>
		<hr>
		<div style="overflow-x: scroll;">
			<div id="" class="selectable-grid" data-multiple="true" style="display: flex;">
			@for($i=0;$i<=59;$i+=4)
				<div class="col-lg-12">
					<div class="row">
						<img src="img/Ativo4.svg" height="100" width="180" class="col"> </img>
					</div>
					<div class="row">
						<div class="col">
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'sold' : 'avaiable'  }} "><span>{{ $cabins[$i]->position }}</span></a>
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'sold' : 'avaiable'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'sold' : 'avaiable'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'sold' : 'avaiable'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
						</div>
					</div>
				</div>
			@endfor
		</div>
		<div class="street"></div>
	</div>
</div>

<div id="cabin-modal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Camarote <span id="cabin-position"></span></h4>
      </div>
      <div class="modal-body">
	  	
				<select id="select-client" type="text" style="width: 100%;" value="-1">
					<option value=""></option>
					@foreach($clients as $client)
					<option value="{{ $client->id }}">{{ $client->name }}</option>
					@endforeach
				</select>
      </div>
      <div class="modal-footer">
				<button id="removeClient" type="button" class="btn btn-danger">Remover cliente</button>
        <button id="save-modal" type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')

<script>
var cabin_selected_id = null;

$('.cabin').click(function() {
	cabin_selected_id = $(this).data('cabin-id')
	$.ajax({
		url: "/cabin/show/" + cabin_selected_id,
		complete: function(response) {
			let cabin = JSON.parse(response.responseText)
			$('#cabin-position').html(cabin.position)
		}
	})
})

$('#select-client').select2({
	placeholder: 'Escolha um cliente',
}).on('select2:select', function(e) {
	let client_id = $(this).val()
	$.ajax({
		url: "{{ route('web.cabins.sale') }}",
		type: 'get',
		data: { 'cabin_id': cabin_selected_id, 'client_id': client_id },
		statusCode: {
			200: function() {
				$('#save-modal').click(function() {
					location.reload();
				})
				
			}
		}
	})
})

$('#removeClient').click(function() {
	$.ajax({
		url: "/cabin/detach/" + cabin_selected_id,
		type: 'get',
		complete: function(response){
			location.reload();
			}	
	})	
})


</script>

@endsection
