<x-main-layout>
    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Testimoni</h5>

    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            </ul>
            <div class="card mb-2">
                <h5 class="card-header">Tabel Testimoni</h5>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama</th>
                                <th>Rating</th>
                                <th>Pesan</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!$data->count())
                                <tr>
                                    <td colspan="10" class="text-center">Tidak ada data saat ini.</td>
                                </tr>
                            @endif
                            @foreach ($data as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="{{ $item->photo ? asset('storage/' . $item->photo) : 'https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png' }}" alt="Gambar"
                                            style="width: 100px; height: 100px;">
                                    </td>
                                    <td>{{ $item->review }}</td>
                                    <td>
                                        @if ($item->status == 'active')
                                            <span class="badge bg-label-success">Active</span>
                                        @else
                                            <span class="badge bg-label-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center gap-1">
                                        {{-- Tombol untuk mengedit testimoni --}}
                                        @if ($item->status == 'active')
                                            {{-- Tombol untuk mengubah status menjadi 'inactive' --}}
                                            <form action="{{ route('testimoni.update', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="inactive">
                                                <button type="submit" class="btn btn-warning">
                                                    <svg width="24" height="24" fill="currentColor"
                                                        viewBox="0 0 24 24" transform="" id="injected-svg">
                                                        <!-- Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free -->
                                                        <path
                                                            d="M12 17c-5.35 0-7.42-3.84-7.93-5 .2-.46.65-1.34 1.45-2.23l-1.4-1.4c-1.49 1.65-2.06 3.28-2.08 3.31-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68.91 0 1.73-.1 2.49-.26l-1.77-1.77c-.24.02-.47.03-.72.03ZM21.95 12.32c.07-.21.07-.43 0-.63-.02-.07-2.32-6.68-9.95-6.68-1.84 0-3.36.39-4.61.97L2.71 1.29 1.3 2.7l4.32 4.32 1.42 1.42 2.27 2.27 3.98 3.98 1.8 1.8 1.53 1.53 4.68 4.68 1.41-1.41-4.32-4.32c2.61-1.95 3.55-4.61 3.56-4.65m-7.25.97c.19-.39.3-.83.3-1.29 0-1.64-1.36-3-3-3-.46 0-.89.11-1.29.3l-1.8-1.8c.88-.31 1.9-.5 3.08-.5 5.35 0 7.42 3.85 7.93 5-.3.69-1.18 2.33-2.96 3.55z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        @else
                                            {{-- Tombol untuk mengubah status menjadi 'active' --}}
                                            <form action="{{ route('testimoni.update', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="active">
                                                <button type="submit" class="btn btn-success"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                                        <path
                                                            d="M12 5c-7.63 0-9.93 6.62-9.95 6.68-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68s9.93-6.62 9.95-6.68c.07-.21.07-.43 0-.63C21.93 11.61 19.63 5 12 5m0 12c-5.35 0-7.42-3.84-7.93-5 .5-1.16 2.58-5 7.93-5s7.42 3.85 7.93 5c-.5 1.16-2.58 5-7.93 5">
                                                        </path>
                                                        <path
                                                            d="M13.5 12c-.83 0-1.5-.67-1.5-1.5 0-.6.36-1.12.87-1.35-.28-.09-.56-.15-.87-.15-1.64 0-3 1.36-3 3s1.36 3 3 3 3-1.36 3-3c0-.3-.06-.59-.15-.87-.24.51-.75.87-1.35.87">
                                                        </path>
                                                    </svg></button>
                                            </form>
                                        @endif
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmDeleteModal-{{ $item->id }}">
                                            {{-- ID modal unik --}}
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @foreach ($data as $item)
        <div class="modal fade" id="confirmDeleteModal-{{ $item->id }}" tabindex="-1"
            aria-labelledby="confirmDeleteModalLabel-{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel-{{ $item->id }}">Konfirmasi Penghapusan Testimoni
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- Pastikan $item->name sesuai dengan kolom nama di tabel testimoni Anda --}}
                        <p>Apakah kamu ingin menghapus testimoni dari: **<span>{{ $item->name }}</span>**?</p>
                        <p class="text-danger">Setelah dihapus data tidak dapat dikembalikan.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        {{-- Route telah diubah ke 'testimoni.delete' --}}
                        <form method="POST" action="{{ route('testimoni.delete', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </x-main-laout>
