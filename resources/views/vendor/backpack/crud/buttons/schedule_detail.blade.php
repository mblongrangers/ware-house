<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#detail{{ $entry->id }}">Detail</button>

@php
	$schedule = \App\Schedule::find($entry->id);
@endphp

<div id="detail{{ $entry->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Jumlah Formulasi</h4>
      </div>
      <div class="modal-body">
      	<dl class="dl-horizontal">
      		@foreach ($schedule->materialCategories as $material)
      			<dt>{{ $material->name }}<dt>
      			<dd>{{ $material->pivot->sum }} kg</dd>
      		@endforeach
      	</dl>

      <div class="row">
        <div class="col-md-4">
          <p><strong>Batch</span></p>
          <p><strong>{{ $schedule->created_at->format('d  F  Y') }}</span></p>
        </div>
        <div class="col-md-4">
          <p><strong>Nama Produk</span></p>
          <p><strong>{{ $schedule->formulation->name }}</span></p>
        </div>
        <div class="col-md-4">
          <p><strong>Batch</span></p>
          <p><strong>{{ $schedule->batch }}</span></p>
        </div> 
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>