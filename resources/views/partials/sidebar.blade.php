<div class="sidebar">
  <h4 class="fw-bold mb-4">AbsenFlow</h4>

  <a href="{{ route('index') }}" class="{{ request()->is('index') ? 'active' : '' }}">
    <i class="fa fa-home me-2"></i> Dashboard
  </a>

  <a href="{{ route('guru.index') }}" class="{{ request()->is('guru*') ? 'active' : '' }}">
    <i class="fa fa-user-tie me-2"></i> Data Guru
  </a>

  <a href="#" onclick="return false;">
    <i class="fa fa-users me-2"></i> Data Siswa
  </a>

  <a href="#" onclick="return false;">
    <i class="fa fa-file-alt me-2"></i> Surat Izin
  </a>

  <a href="#" onclick="return false;">
    <i class="fa fa-star me-2"></i> Kategori Izin
  </a>
</div>
