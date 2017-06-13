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
								<option value="{{ $client->id }}">{{ $client->name }}</option>
								@endforeach
						</select>
					</div>
					<div id="hasClient">
						<p>Camarote vendido para o cliente: <span id="cabin-client"></span></p> 
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
		<h3>Camarotes individuais - A</h3>
		<div class="cabinBg" data-simplebar>
			<div id="" class="selectable-grid" data-multiple="true" style="display: flex;">
				@for($i=0;$i<=59;$i+=4)
					<div class="col-lg-12">
						<div class="row">
							<img src="img/Ativo4.svg" height="100" width="180" class="col"> </img>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'sold' : 'avaiableA'  }} "><span>{{ $cabins[$i]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'sold' : 'avaiableA'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'sold' : 'avaiableA'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'sold' : 'avaiableA'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
							</div>
						</div>
					</div>
				@endfor
			</div>
		<div class="street"></div>
		</div>
	</div>		
		
	<div id="cabinsB" class="layer two">
		<h3>Camarotes individuais - B</h3>
		<div class="cabinBg" data-simplebar>
			<div id="" class="selectable-grid" data-multiple="true" style="display: flex;">
				@for($i=60;$i<=119;$i+=4)
					<div class="col-lg-12">
						<div class="row">
							<img src="img/Ativo3.png" height="100" width="180" class="col"> </img>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'sold' : 'avaiableB'  }} "><span>{{ $cabins[$i]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'sold' : 'avaiableB'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'sold' : 'avaiableB'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'sold' : 'avaiableB'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
							</div>
						</div>
					</div>
				@endfor
			</div>
			<div class="street"></div>
		</div>
	</div>

	<div id="cabinsC" class="layer three" >
		<h3>Camarotes individuais - C</h3>
		<div class="cabinBg" data-simplebar>
			<div id="" class="selectable-grid" data-multiple="true" style="display: flex;">
				@for($i=120;$i<=147;$i+=4)
					<div class="col-lg-12">
						<div class="row">
							<img src="img/Ativo2.png" height="100" width="180" class="col"> </img>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i]->id }}" class="cabin {{ $cabins[$i]->status ? 'sold' : 'avaiableC'  }} "><span>{{ $cabins[$i]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 1]->id }}" class="cabin {{ $cabins[$i + 1]->status ? 'sold' : 'avaiableC'  }}"><span>{{ $cabins[$i+1]->position }}</span></a>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 2]->id }}" class="cabin {{ $cabins[$i + 2]->status ? 'sold' : 'avaiableC'  }}"><span>{{ $cabins[$i+2]->position }}</span></a>
								<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $cabins[$i + 3]->id }}" class="cabin {{ $cabins[$i + 3]->status ? 'sold' : 'avaiableC'  }}"><span>{{ $cabins[$i+3]->position }}</span></a>
							</div>
						</div>
					</div>
				@endfor
			</div>
			<div class="street" > </div>
		</div>
	</div>
	
	
		
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
			var touchX = 0;
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
			}, false );
</script>

@endsection
