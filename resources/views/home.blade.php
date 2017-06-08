@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Camarotes - A</h3>
	<hr>
	<div style="overflow-x: scroll;">
		<div id="camarote-grid" class="selectable-grid" data-multiple="true" style="display: flex;">
			@for($i=1;$i<=60;$i+=4)
				<div class="col-lg-12">
					<div class="row">
						<img src="img/Ativo4.svg" height="50" width="90" class="col"> </img>
					</div>
					<div class="row">
						<div class="selectable-grid-row col">
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $i }}" class="cabin selectable-grid-column" style="background-color:yellow;"><span>{{$i }}</span></a>
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $i+1 }}" class="cabin selectable-grid-column" style="background-color:yellow;"><span>{{$i+1}}</span></a>
						</div>
					</div>
					<div class="row">
						<div class="selectable-grid-row col">
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $i+2 }}" class="cabin selectable-grid-column" style="background-color:yellow;"><span>{{$i+2}}</span></a>
							<a href="#cabin-modal" data-toggle="modal" data-cabin-id="{{ $i+3 }}" class="cabin selectable-grid-column" style="background-color:yellow;"><span>{{$i +3 }}</span></a>
						</div>
					</div>
				</div>
			@endfor
		</div>
		<div class="street"></div>
	</div>
</div>

<div id="cabin-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Camarote <span id="cabin-position"></span></h4>
      </div>
      <div class="modal-body">
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script>

$('.cabin').click(function() {
	let id = $(this).data('cabin-id')
	$.ajax({
		url: "/cabin/show/" + id,
		complete: function(response) {
			let cabin = JSON.parse(response.responseText)
			$('#cabin-position').html(cabin.position)
		}
	})

})

</script>



@endsection

