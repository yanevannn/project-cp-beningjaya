<x-main-layout>
    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Galeri</h5>
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <button type="button" class="btn btn-success active mb-2" data-bs-toggle="modal"
                data-bs-target="#uploadPhotoModal">
                Upload Photo
            </button>
            </ul>
            <div>

                @if (!$data->count())
                    <div class="card mb-2">
                        <div class="text-center p-4">
                            <i class="bx bx-image" style="font-size: 50px;"></i>
                            <h5 class="mt-2">Tidak ada gambar saat ini.</h5>
                        </div>
                    </div>
                @endif
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    @foreach ($data as $item)
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top  p-1" src="{{ asset('storage/' . $item->photo) }}"
                                    alt="Gallery Photo" style="height: 300px;">
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-center">

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmDeleteModal-{{ $item->id }}">
                                            {{-- ID modal unik --}}
                                            <i class="bx bx-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-info ms-2" data-bs-toggle="modal"
                                            data-bs-target="#imagePreviewModal-{{ $item->id }}">
                                            {{-- ID modal preview unik --}}
                                            <i class="bx bx-show"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Modal untuk upload foto --}}
    <div class="modal fade" id="uploadPhotoModal" tabindex="-1" aria-labelledby="uploadPhotoModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadPhotoModalTitle">Upload Gambar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="productPhoto" class="form-label">Pilih Gambar</label>
                            <input type="file" id="productPhoto" name="photo" class="form-control"
                                accept="image/*">
                            <div class="form-text">
                                Ukuran file maksimum: 2MB. Format yang diizinkan: JPG, PNG, GIF.
                            </div>
                            @error('photo')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button type="submit" class="btn btn-primary">Upload Gambar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($data as $item)
        <div class="modal fade" id="confirmDeleteModal-{{ $item->id }}" tabindex="-1"
            aria-labelledby="confirmDeleteModalLabel-{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel-{{ $item->id }}">
                            Konfirmasi Penghapusan Gambar
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah kamu yakin untuk menghapus gambar ini?</p>
                        <p class="text-danger">Setelah dihapus data tidak dapat dikembalikan</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <form method="POST" action="{{ route('gallery.delete', $item->id) }}"> {{-- Action langsung diisi --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL PREVIEW GAMBAR UNIK UNTUK SETIAP ITEM (DITEMPATKAN DI DALAM LOOP) --}}
        <div class="modal fade" id="imagePreviewModal-{{ $item->id }}" tabindex="-1"
            aria-labelledby="imagePreviewModalLabel-{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imagePreviewModalLabel-{{ $item->id }}">Preview:
                            {{ $item->name ?? 'Image' }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ '/storage/' . $item->photo }}" alt="{{ $item->name ?? 'Preview Image' }}"
                            class="img-fluid" style="max-height: 80vh;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    </x-main-laout>
