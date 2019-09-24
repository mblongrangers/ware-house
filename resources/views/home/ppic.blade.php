<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <form class="form-horizontal" role="form">
    <fieldset>
      <legend>Formulasi Produk</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Tanggal</label>
        <div class="col-sm-6">
          <input type="date">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Nama Produk</label>
        <div class="col-sm-6">
          <select name="formulations">
            @foreach($formulations as $formulation)
                <option>{{ $formulation->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Batch</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Batch">
        </div>
      </div>

      <div class="col-sm-offset-3 col-sm-9">
        <a href="" class="btn btn-success">Submit</a>

        <a href="{{ route('welcome') }}" class="btn btn-success">Cancel</a>
      </div>
    </fieldset>
  </form>
</div>