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
    @foreach ($formulation->compositions as $composition)
    <tr>
      <th scope="row">{{ app('request')->input('date') }}</th>
      <td>{{ $composition->materialCategory->name }}</td>
      <td>{{ app('request')->input('batch') }}</td>
      <td>{{ $composition->quantity }}</td>
      <td>{{ $composition->quantity * app('request')->input('batch') }}</td>
      <td>
        {{ $composition->materialCategory->status($composition->quantity * app('request')->input('batch')) }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>