
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama Bahan Baku</th>
      <th scope="col">Batch</th>
      <th scope="col">Quantity /Kg</th>
      <th scope="col">Total Quantity /Kg</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    @php
      $show = true;
      $current = \App\Formulation::find(app('request')->input('formulation'));
    @endphp


    @foreach ($current->compositions as $composition)
    <tr>
      <th scope="row">{{ app('request')->input('date') }}</th>
      <td>{{ $composition->materialCategory->name }}</td>
      <td>{{ app('request')->input('batch') }}</td>
      <td>{{ $composition->quantity }}</td>
      <td>{{ $composition->quantity * app('request')->input('batch') }}</td>
      @php
        if (!$composition->materialCategory->isAvailable($composition->quantity * app('request')->input('batch'))) {
          $show = false;
        }
      @endphp

      <td>
        {{ $composition->materialCategory->status($composition->quantity * app('request')->input('batch')) }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@if ($show)
<form action="{{ route('schedule.store') }}" method="post">
  @csrf

  <input type="hidden" name="formulation" value="{{ app('request')->input('formulation') }}">
  <input type="hidden" name="batch" value="{{ app('request')->input('batch') }}">
  <input type="hidden" name="date" value="{{ app('request')->input('date') }}">
  <input type="submit" value="Submit Schedule">
</form>
@endif