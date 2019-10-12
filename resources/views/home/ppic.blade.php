<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br>
<div class="container">
  <form action="{{ route('page.postPpic') }}" class="form-horizontal" method="post" role="form">
    @csrf
    <fieldset>
      <legend>Formulasi Produk</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Tanggal</label>
        <div class="col-sm-6">
          <input type="date" name="date">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Nama Produk</label>
        <div class="col-sm-6">
          <select name="formulations" id="formulation">
            @foreach($formulations as $formulation)
                <option value="{{ $formulation->id }}">{{ $formulation->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Batch</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="batch" placeholder="Batch">
        </div>
      </div>

      <div class="col-sm-offset-3 col-sm-9">
        <input type="submit" class="btn btn-primary" value="Submit">

        <a href="{{ route('welcome') }}" class="btn btn-success">Cancel</a>
      </div>
    </fieldset>
  </form>
  <br>
  <br>

  @if (app('request')->input('formulation'))
    @include('home._result')
  @endif

</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#formulation').val({{ app('request')->input('formulation') }})
  });
</script>