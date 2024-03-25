@extends('penduduk.master')
 
@section('form')
<form action="prosestambah" method="post">
  @csrf
                    <input type="hidden" class="form-control" id="id" name='id'>


                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" class="form-control" id="nim" name='nim' placeholder="Enter NIM" required>
                    </div>


                    <div class="form-group">
                      <label for="nama">Nama Penduduk</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" required>
                    </div>


                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='jenis_kelamin'>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name='alamat' placeholder="Enter Alamat" required >
                    </div>

                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input type="number" class="form-control" id="umur" name='umur' placeholder="Enter Umur" >
                    </div>

                    <div class="form-group">
                      <label for="tannggal">Tanggal Lahir</label>
                      <input type="date" class="form-control" name='tgl_lahir' placeholder="Enter Tanggal Lahir" >
                    </div>

                    <input type="submit">
                  </form>
@endsection