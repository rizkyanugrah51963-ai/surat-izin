@extends('layouts.app')

@section('title', 'Profil')
@section('page-title', 'Profil Saya')

@section('content')
<div class="container-fluid">
    <div class="row g-4">

        {{-- ================= SIDEBAR PROFIL ================= --}}
        <div class="col-lg-4 col-xl-3">
            <div class="card border-0 shadow-sm overflow-hidden">
                {{-- Cover --}}
                <div class="profile-cover"></div>

                <div class="card-body text-center profile-header">
                    {{-- Avatar --}}
                    <div class="avatar-wrapper mb-3">
                        @if ($user->file)
                            <img src="{{ $user->file->file_stream }}"
                                 id="profilePreview"
                                 class="avatar-img">
                        @else
                            <div id="profilePreview" class="avatar-placeholder">
                                {{ strtoupper(substr($user->name, 0, 1)) }}
                            </div>
                        @endif
                    </div>

                    <h5 class="fw-bold mb-0">{{ $user->name }}</h5>
                    <small class="text-muted">{{ $user->email }}</small>

                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-primary">
                            <i class="bi bi-person-circle me-1"></i> Profil Publik
                        </button>
                        <button id="copyProfileLink" class="btn btn-outline-secondary">
                            <i class="bi bi-link-45deg me-1"></i> Salin Link
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- ================= KONTEN UTAMA ================= --}}
        <div class="col-lg-8 col-xl-9">
    <div class="card border-0 shadow-sm profile-card-right">
                <div class="card-body pt-3 px-4 pb-4">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="mb-3">
    <h4 class="fw-bold mb-0">Pengaturan Akun</h4>
    <small class="text-muted">
        Kelola informasi akun dan foto profil Anda
    </small>
</div>



                    <form action="{{ route('profile.update') }}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Foto Profil --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Foto Profil</label>

                            <div class="d-flex align-items-center gap-3 p-3 border rounded-3 bg-light">
                                <div>
                                    @if ($user->file)
                                        <img src="{{ $user->file->file_stream }}"
                                             id="profilePreviewSmall"
                                             class="avatar-sm">
                                    @else
                                        <div id="profilePreviewSmall" class="avatar-sm placeholder">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                    @endif
                                </div>

                                <div class="flex-fill">
                                    <input type="file"
                                           name="profile"
                                           id="profileInput"
                                           class="form-control"
                                           accept="image/*">
                                    <small class="text-muted">
                                        Format JPG / PNG • Maksimal 2MB
                                    </small>
                                    @error('profile')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Nama --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text"
                                   name="name"
                                   class="form-control form-control-lg"
                                   value="{{ old('name', $user->name) }}">
                        </div>

                        {{-- Email --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email"
                                   class="form-control form-control-lg bg-light"
                                   value="{{ $user->email }}"
                                   readonly>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('siswa.dashboard.user') }}"
                               class="btn btn-light btn-lg">
                                Batal
                            </a>
                            <button class="btn btn-primary btn-lg">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- ================= STYLE ================= --}}
<style>
.profile-cover {
    height: 120px;
    background: linear-gradient(135deg, #667eea, #2c0bd2);
}

.profile-header {
    margin-top: -50px;
}

.avatar-wrapper {
    position: relative;
    display: inline-block;
}

.avatar-img,
.avatar-placeholder {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 4px solid #fff;
    object-fit: cover;
    box-shadow: 0 8px 24px rgba(0,0,0,.15);
}

.avatar-placeholder {
    background: #4f46e5;
    color: #fff;
    font-size: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.avatar-sm {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.avatar-sm.placeholder {
    background: #6c757d;
    color: #fff;
    font-size: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

{{-- ================= SCRIPT ================= --}}
<script>
const input = document.getElementById('profileInput');

if (input) {
    input.addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = e => {
            ['profilePreview', 'profilePreviewSmall'].forEach(id => {
                let el = document.getElementById(id);
                if (!el) return;

                if (el.tagName !== 'IMG') {
                    const img = document.createElement('img');
                    img.id = id;
                    img.className = el.className;
                    img.style = el.style.cssText;
                    el.replaceWith(img);
                    el = img;
                }
                el.src = e.target.result;
            });
        };
        reader.readAsDataURL(file);
    });
}

const copyBtn = document.getElementById('copyProfileLink');
if (copyBtn) {
    copyBtn.addEventListener('click', function () {
        navigator.clipboard.writeText(window.location.href);
        this.innerHTML = '✔ Tersalin';
        setTimeout(() => {
            this.innerHTML = '<i class="bi bi-link-45deg me-1"></i> Salin Link';
        }, 2000);
    });
}
</script>
@endsection
