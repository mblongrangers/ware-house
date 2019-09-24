<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <form class="form-horizontal" role="form">
    <fieldset>
      <legend>Discount</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Nama Produk</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Nama Produk">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Harga Produk</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Harga Produk">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Quantity</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Jumlah Barang">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">SKU</label>
        <div class="col-sm-1">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="SKU">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">SubTotal</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="SubTotal">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Discount</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Discount">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Total Harga</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Total Harga">
        </div>
      </div>
      <div class="col-sm-offset-3 col-sm-9">
        <a href="" class="btn btn-success">Submit</a>

        <a href="{{ route('welcome') }}" class="btn btn-success">Cancel</a>
      </div>
    </fieldset>
  </form>
</div>