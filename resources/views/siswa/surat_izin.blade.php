<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-50 to-slate-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 w-64 bg-gradient-to-b from-indigo-600 to-indigo-800 text-white transition-transform duration-300 ease-in-out z-30 shadow-2xl">
            <div class="p-6">
                <img src="{{ asset('user/assets/img/logo1.png') }}" alt="SchoolPass Logo"
                    style="max-height: 90px; height: auto; width: auto;">
                </a>

                <nav class="space-y-2">
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg bg-white/10 hover:bg-white/20 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>
                    <button onclick="showFormIzin()"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10 transition-all text-left">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="font-medium">Ajukan Izin</span>
                    </button>
                </nav>
            </div>

            <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-white/20">
                <button type="button" onclick="window.location.href='{{ route('siswa.dashboard.user') }}'"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10 transition-all w-full text-left">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="..." />
                    </svg>

                    <span class="font-medium">Dashboard</span>
                </button>

            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 lg:ml-64 min-h-screen">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-20">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center gap-4">
                        <button onclick="toggleSidebar()" class="lg:hidden">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        <div>
                            <h1 class="text-2xl font-bold text-slate-800">Selamat Datang</h1>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div
                        class="bg-white rounded-xl shadow-sm p-6 border border-slate-200 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-slate-600 mb-1">Total Izin</p>
                                <p class="text-3xl font-bold text-slate-800" id="totalIzin">2</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl shadow-sm p-6 border border-slate-200 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-slate-600 mb-1">Disetujui</p>
                                <p class="text-3xl font-bold text-green-600" id="disetujui">1</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl shadow-sm p-6 border border-slate-200 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-slate-600 mb-1">Menunggu</p>
                                <p class="text-3xl font-bold text-amber-600" id="menunggu">1</p>
                            </div>
                            <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Card -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200">
                    <div class="p-6 border-b border-slate-200">
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <h2 class="text-xl font-bold text-slate-800">Riwayat Surat Izin</h2>
                                <p class="text-sm text-slate-500 mt-1">Daftar pengajuan izin Anda</p>
                            </div>
                            <!-- BUTTON AJUKAN IZIN -->
<button onclick="showFormIzin()"
    class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-6 py-2.5 rounded-lg
           hover:from-indigo-700 hover:to-indigo-800 transition-all shadow-md flex items-center gap-2">
    Ajukan Izin
</button>

<!-- MODAL -->
<div id="modalFormIzin"
    class="hidden fixed inset-0 bg-black/50 z-40 flex items-center justify-center p-4"
    onclick="hideFormIzin()">

    <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full"
        onclick="event.stopPropagation()">

        <!-- FORM -->
        <form action="{{ route('siswa.surat_izin.store') }}"
      method="POST"
      enctype="multipart/form-data">


            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 p-6 text-white rounded-t-2xl">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-bold">Ajukan Surat Izin</h3>
                    <button type="button" onclick="hideFormIzin()">✕</button>
                </div>
            </div>

            <div class="p-6 space-y-4">

                <!-- TANGGAL -->
                <div>
                    <label class="block text-sm font-semibold mb-1">Tanggal Izin</label>
                    <input type="date" name="tanggal_izin" required
                        class="w-full border rounded-lg px-4 py-2">
                </div>

                <!-- ALASAN -->
                <div>
                    <label class="block text-sm font-semibold mb-1">Alasan</label>
                    <select name="alasan" required
                        class="w-full border rounded-lg px-4 py-2">
                        <option value="">Pilih Alasan</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Izin Keluarga">Izin Keluarga</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <!-- KETERANGAN -->
                <div>
                    <label class="block text-sm font-semibold mb-1">Keterangan</label>
                    <textarea name="keterangan" rows="3"
                        class="w-full border rounded-lg px-4 py-2"></textarea>
                </div>

                <!-- UPLOAD BUKTI -->
                <div>
                    <label class="block text-sm font-semibold mb-1">
                        Bukti Surat (Foto / PDF)
                    </label>
                    <input type="file"
                        name="bukti_surat"
                        accept="image/*,.pdf"
                        class="w-full border rounded-lg px-4 py-2">
                    <p class="text-xs text-gray-500 mt-1">
                        JPG / PNG / PDF (Max 2MB)
                    </p>
                </div>

                <!-- BUTTON -->
                <div class="flex gap-3 pt-4">
                    <button type="button" onclick="hideFormIzin()"
                        class="flex-1 border rounded-lg py-2">
                        Batal
                    </button>
                    <button type="submit"
                        class="flex-1 bg-indigo-600 text-white rounded-lg py-2">
                        Kirim
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<script>
function showFormIzin() {
    document.getElementById('modalFormIzin').classList.remove('hidden');
}
function hideFormIzin() {
    document.getElementById('modalFormIzin').classList.add('hidden');
}
</script>


    <!-- Overlay -->
    <div id="sidebarOverlay" class="hidden fixed inset-0 bg-black/50 z-20 lg:hidden"></div>

    <script>
        // Sidebar Toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // Close sidebar when overlay clicked
        document.getElementById('sidebarOverlay').addEventListener('click', toggleSidebar);

        // Profile Modal
        function showProfile() {
            document.getElementById('modalProfile').classList.remove('hidden');
        }

        function hideProfile() {
            document.getElementById('modalProfile').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('modalProfile').addEventListener('click', function(e) {
            if (e.target === this) hideProfile();
        });

        // Form Izin Modal
        function showFormIzin() {
            document.getElementById('modalFormIzin').classList.remove('hidden');
        }

        function hideFormIzin() {
            document.getElementById('modalFormIzin').classList.add('hidden');
            document.getElementById('tanggalIzin').value = '';
            document.getElementById('alasanIzin').value = '';
            document.getElementById('keteranganIzin').value = '';
        }

        // Close modal when clicking outside
        document.getElementById('modalFormIzin').addEventListener('click', function(e) {
            if (e.target === this) hideFormIzin();
        });

        // Submit Izin
        function submitIzin() {
            const tanggal = document.getElementById('tanggalIzin').value;
            const alasan = document.getElementById('alasanIzin').value;
            const keterangan = document.getElementById('keteranganIzin').value;

            if (!tanggal || !alasan || !keterangan) {
                alert('Mohon lengkapi semua field');
                return;
            }

            // Add to table
            const tbody = document.getElementById('tableBody');
            const newRow = `
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-4 text-sm text-slate-800"></td>
                    <td class="px-6 py-4 text-sm text-slate-600">${tanggal}</td>
                    <td class="px-6 py-4 text-sm text-slate-600">${alasan}</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700">
                            Menunggu
                        </span>
                    </td>
                </tr>
            `;
            tbody.insertAdjacentHTML('afterbegin', newRow);

            // Update stats
            const totalIzin = parseInt(document.getElementById('totalIzin').textContent);
            const menunggu = parseInt(document.getElementById('menunggu').textContent);
            document.getElementById('totalIzin').textContent = totalIzin + 1;
            document.getElementById('menunggu').textContent = menunggu + 1;

            hideFormIzin();
            alert('Surat izin berhasil diajukan!');
        }
    </script>
</body>

</html>
