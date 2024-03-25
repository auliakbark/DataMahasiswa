@extends('penduduk.master')

@section('tabel')
              <div class="card-header">
                <h3 class="card-title">Tabel Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <td> NIM </td>
                        <td> Nama </td>
                        <td> Jenis Kelamin </td>
                        <td> Alamat </td>
                        <td> Umur </td>
                        <td> Tanggal Lahir </td>
                        <td> Edit </td>   
                      </tr>
                  </thead>
                  <tbody>
                  @foreach ($dataPenduduk as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('prosesdelete',$item->id) }}" class="border-0 bg-danger rounded p-2"><i
                                    class="fa-solid fa-trash"></i></a>
                            <p> | </p>
                            <a href="{{ url('edit',$item->id) }}" class="border-0 bg-warning rounded p-2"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                  </tbody>
                </table>
                <!-- /.card-body -->
              </div>
@endsection