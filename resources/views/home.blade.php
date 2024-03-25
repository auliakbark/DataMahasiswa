@extends('penduduk.master')

@section('tabel')
    <div class="row">
        <div class="col-4">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Data</span>
                    <span class="info-box-number">{{ $totalPenduduk }}</span>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Laki-laki</span>
                    <span class="info-box-number">{{ $jumlahLakiLaki }}</span>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Perempuan</span>
                    <span class="info-box-number">{{ $jumlahPerempuan }}</span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Grafik Data Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

    </div>
    <div class="card-header">
        <h3 class="card-title">Tabel Data Mahasiswa</h3>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col">
                <input type="text" id="search" class="form-control" placeholder="Cari berdasarkan nama...">
            </div>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td> NIM </td>
                    <td> Nama </td>
                    <td> Jenis Kelamin </td>
                    <td> Alamat </td>
                    <td> Umur </td>
                    <td> Tanggal Lahir </td>
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
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        var table = $('#example1').DataTable();
        $('#example1_filter').hide();
        table.order([0, 'desc']).draw();
        $('#search').on('keyup', function() {
            // Memfilter hanya kolom nama (indeks kolom 1)
            table.column(1).search($(this).val()).draw();
        });
    });
</script>

  <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['Laki-laki', 'Perempuan'],
              datasets: [{
                  label: 'Jumlah Mahasiswa',
                  data: [{{ $jumlahLakiLaki }}, {{ $jumlahPerempuan }}],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
  </script>
@endsection

