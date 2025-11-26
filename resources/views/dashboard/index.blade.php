@extends('layout.main')

@section('content')

<style>
    /* BACKGROUND TRANSPARAN UNTUK DASHBOARD */
    .dashboard-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('/images/bg-surat-izin.png'); /* ganti sesuai nama file gambarmu */
        background-size: cover;
        background-position: center;
        opacity: 0.15; /* transparan */
        z-index: 0;
    }

    /* SUPAYA KONTEN DI ATAS BACKGROUND */
    .dashboard-content {
        position: relative;
        z-index: 10;
    }
</style>

<!-- Background transparan -->
<div class="dashboard-background"></div>

<!-- Semua isi dashboard dibungkus -->
<div class="dashboard-content">

<h2 class="fw-bold">Dashboard</h2>

<div class="alert alert-primary mt-3">
  ⭐ Star this project on GitHub
</div>

<div class="row mt-4">
  <div class="col-md-3">
    <div class="card text-center p-3">
      <h6>Total Siswa</h6>
      <h3>850</h3>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-center p-3">
      <h6>Total Guru</h6>
      <h3>45</h3>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-center p-3">
      <h6>New Sales</h6>
      <h3>376</h3>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-center p-3">
      <h6>Pending Contacts</h6>
      <h3>35</h3>
    </div>
  </div>
</div>

<div class="card mt-4">
  <div class="card-body">
    <table class="table align-middle">
      <thead>
        <tr>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Alasan Izin</th>
          <th>Tanggal Pengajuan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Abdul Rio</td>
          <td>XI</td>
          <td><span class="badge bg-success">Kompa</span></td>
          <td>6/10/2020</td>
        </tr>
        <tr>
          <td>Dayang</td>
          <td>X</td>
          <td><span class="badge bg-warning text-dark">OTT</span></td>
          <td>6/10/2020</td>
        </tr>
        <tr>
          <td>Bahill JR</td>
          <td>XX</td>
          <td><span class="badge bg-danger">Makai</span></td>
          <td>6/10/2020</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div> <!-- Tutup dashboard-content -->

@endsection
