<table class="table table-striped">
    <tr>
    <td>No</td>
    <td>Nama Jenis Kendaraan</td>
    <td>Aksi</td>
</tr>
@php $no = 1; @endphp
@foreach($data as $row)

</tr>
    <td>{{$no++}}</td>
    <td>{{$row->nm_kendaraan}}</td>
    <td>Update | delete</td>
</tr>
  <a href="{{route ('jnskendaraan.edit ,$row->id_jenis_kendaraan)}}" >Update</a>

  <a href="{{route ('jnskendaraan.delete ,$row->id_jenis_kendaraan)}}" >Delete</a>
@endforeach

</table>