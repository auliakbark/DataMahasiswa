@extends('penduduk.master')
 
@section('edit')
<form action="{{ url('prosesupdate', $dataPenduduk->id) }}" method="post">
  @csrf
                    <input type="hidden" class="form-control" id="id" name='id'>


                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" class="form-control" id="nim" name='nim' placeholder="Enter NIK" value="{{$dataPenduduk->nim}}" disabled>
                    </div>


                    <div class="form-group">
                      <label for="nama">Nama Penduduk</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" value="{{$dataPenduduk->nama}}">
                    </div>


                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='jenis_kelamin' value="{{$dataPenduduk->jenis_kelamin}}">
                        <option value="Laki-laki" @if($dataPenduduk->jenis_kelamin =="Laki-laki") selected @endif>Laki-Laki</option>
                        <option value="Perempuan" @if($dataPenduduk->jenis_kelamin =="Perempuan") selected @endif>Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name='alamat' placeholder="Enter Alamat" required value="{{$dataPenduduk->alamat}}">
                    </div>

                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input type="number" class="form-control" id="number" name='number' placeholder="Enter Umur" value="{{$dataPenduduk->umur}}">
                    </div>

                    <div class="form-group">
                      <label for="tanggal">Tanggal Lahir</label>
                      <input type="date" class="form-control" name='tgl_lahir' placeholder="Enter Tanggal Lahir" value="{{$dataPenduduk->tgl_lahir}}">
                    </div>

                    <input type="submit">
                  </form>
@endsection