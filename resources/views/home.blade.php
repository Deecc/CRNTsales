@extends('layouts.app')

@section('content')

	<div id="cabin-modal" class="modal" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Camarote <span id="cabin-position"></span></h4>
				</div>
				<div class="modal-body">
					<div id="noClient">
						<p>Este camarote está diponível, selecione o cliente comprador.</p>
						<select id="select-client" type="text" style="width: 100%;" value="-1">
							<option value=""></option>
								@foreach($clients as $client)
								<option value="{{ $client->id }}">{{ $client->name  }} | CPF: {{ $client->social_number  }}  </option>
								@endforeach
								
						</select>
						</br>
						</br>
						<div class="pull-right">
							<a href="{{ route( 'web.clients.index') }}">Cadastrar novo cliente.</a>
						</div>
						</br>
						
					</div>
					<div id="hasClient">
						<p>Camarote vendido para o cliente: <span id="cabin-client"></span>, portador do CPF <span id="cabin-client-cpf"></span>.</p> 
					</div>
				</div>
				<div class="modal-footer">
					<button id="removeClient" type="button" class="btn btn-danger">Remover cliente</button>
					<button id="save-modal" type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div>
		</div>
	</div>			

<article class="kontext">

	<div id="cabinsA" class="layer one show">
		<div class="particularA">
			<img src="img/CamaroteA.svg"></img>
		</div>
		<div class="cabinBg" data-simplebar>
			<div id="" class="selectable-grid" data-multiple="true" style="display: flex;">
				@for($i=0;$i<=73;$i+=4)
					<div class="col-lg-12">
						<div class="row">
						@if ($cabins[$i]->id <= 32 )
							<img src="img/Ativo4.svg" height="100" width="180" class="col"> </img>
						@else
							<img src="img/Ativo5.svg" height="100" width="180" class="col"> </img>
						@endif
						</div>
						<div class="row">
							<div class="col">
								@if ($cabins[$i]->id <= 30 )
									<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'soldA' : 'avaiableA'  }} "><span>{{ $cabins[$i]->position }}</span></a>
								@else
									<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'soldC' : 'avaiableC'  }} "><span>{{ $cabins[$i]->position }}</span></a>
								@endif
								@if($i+2 < 73)
									@if ($cabins[$i+2]->id <= 30 )
										<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'soldA' : 'avaiableA'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
									@else
										<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'soldC' : 'avaiableC'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
									@endif
								@else
									<div class="row">
										<div class="col">
											<a class="cabin soldA"></a>							
										</div>
									</div>
								@endif
							</div>
						</div>
						<div class="row">
							<div class="col">
								@if ($cabins[$i + 1]->id <= 30)
									<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'soldA' : 'avaiableA'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
								@else
									<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'soldC' : 'avaiableC'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
								@endif
								@if($i+3 < 73)
									@if ($cabins[$i +3 ]->id <= 30)
										<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'soldA' : 'avaiableA'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
									@else
										<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'soldC' : 'avaiableC'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
									@endif
								@else
									<div class="row">
										<div class="col">
											<a class="cabin soldA"></a>							
										</div>
									</div>
								@endif
							</div>
						</div>
					</div>
				@endfor
			</div>
		<div class="street"></div>
		</div>
	</div>		
		
	<div id="cabinsB" class="layer two">
		<div class="particularB">
			<img src="img/CamaroteB.svg"></img>
		</div>
		
		<div class="cabinBg" data-simplebar>
			<div id="" class="selectable-grid" data-multiple="true" style="display: flex;">
				@for($i=74;$i<=140;$i+=4)
					<div class="col-lg-12">
						<div class="row">
							<img src="img/Ativo3.svg" height="100" width="180" class="col"> </img>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'soldB' : 'avaiableB'  }} "><span>{{ $cabins[$i]->position }}</span></a>
								@if($i+2 < 140)
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'soldB' : 'avaiableB'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
								@else
									<div class="row">
										<div class="col">
											<a class="cabin soldB"></a>							
										</div>
									</div>
								@endif
							</div>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'soldB' : 'avaiableB'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
								@if($i+3 < 140)
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'soldB' : 'avaiableB'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
								@else
									<div class="row">
										<div class="col">
											<a class="cabin soldB"></a>							
										</div>
									</div>
								@endif

							</div>
						</div>
					</div>
				@endfor
			</div>
			<div class="street"></div>
		</div>
	</div>

	{{--  <div id="cabinsC" class="layer three" >
		<div class="particularC">
			<img src="img/CamaroteC.svg"></img>
		</div>		
		<div class="cabinBg" data-simplebar>
			<div id="" class="selectable-grid" data-multiple="true" style="display: flex;">
				@for($i=120;$i<150;$i+=4)
					<div class="col-lg-12">
						<div class="row">
							<img src="img/Ativo2.png" height="100" width="180" class="col"> </img>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'soldC' : 'avaiableC'  }} "><span>{{ $cabins[$i]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'soldC' : 'avaiableC'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
							</div>
						</div>
						@if(($i+2)<150 && ($i+3<150))
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'soldC' : 'avaiableC'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'soldC' : 'avaiableC'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
							</div>
						</div>
						@else
						<div class="row">
							<div class="col">
								<a class="cabin soldC"></a>
								<a class="cabin soldC"></a>
							</div>
						</div>
						@endif
					</div>
				@endfor
			</div>
			<div class="street" > </div>
		</div>
	</div>
	  --}}
	
		
</article>


<ul class="bullets"></ul>





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
			if(cabin.status) {
				$('#hasClient').css("display", "block")
				$('#noClient').css("display", "none")
				$('#cabin-client').html(cabin.client.name)
				$('#cabin-client-cpf').html(cabin.client.social_number)
											
			}
			else
			{
				$('#hasClient').css("display", "none")
				$('#noClient').css("display", "block")
				$('#removeClient').css("display", "none")
				ajaxGetClient()	
				

			}
		}
	})
})

function ajaxGetClient(){
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
								
				}
			}
		})
	})
}

$('#save-modal').click(function() {
	location.reload()
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



 //Kontext
// Create a new instance of kontext
			var k = kontext( document.querySelector( '.kontext' ) );
			// API METHODS:
			// k.prev(); // Show prev layer
			// k.next(); // Show next layer
			// k.show( 3 ); // Show specific layer
			// k.getIndex(); // Index of current layer
			// k.getTotal(); // Total number of layers
			// DEMO-SPECIFIC:
			var bulletsContainer = document.body.querySelector( '.bullets' );
			// Create one bullet per layer
			for( var i = 0, len = k.getTotal(); i < len; i++ ) {
				var bullet = document.createElement( 'li' );
				bullet.className = i === 0 ? 'active' : '';
				bullet.setAttribute( 'index', i );
				bullet.onclick = function( event ) { k.show( event.target.getAttribute( 'index' ) ) };
				bullet.ontouchstart = function( event ) { k.show( event.target.getAttribute( 'index' ) ) };
				bulletsContainer.appendChild( bullet );
			}
			// Update the bullets when the layer changes
			k.changed.add( function( layer, index ) {
				var bullets = document.body.querySelectorAll( '.bullets li' );
				for( var i = 0, len = bullets.length; i < len; i++ ) {
					bullets[i].className = i === index ? 'active' : '';
				}
			} );
			document.addEventListener( 'keyup', function( event ) {
				if( event.keyCode === 37 ) k.prev();
				if( event.keyCode === 39 ) k.next();
			}, false );
			{{--  var touchX = 0;
			var touchConsumed = false;
			document.addEventListener( 'touchstart', function( event ) {
				touchConsumed = false;
				lastX = event.touches[0].clientX;
			}, false );
			document.addEventListener( 'touchmove', function( event ) {
				event.preventDefault();
				if( !touchConsumed ) {
					if( event.touches[0].clientX > lastX + 10 ) {
						k.prev();
						touchConsumed = true;
					}
					else if( event.touches[0].clientX < lastX - 10 ) {
						k.next();
						touchConsumed = true;
					}
				}
			}, false );  --}}
</script>

@endsection
