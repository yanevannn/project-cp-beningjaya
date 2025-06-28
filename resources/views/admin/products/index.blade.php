

    <x-main-layout>
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Layanan</h5>
      
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a class="btn btn-success active mb-2" href="{{ route('products.create') }}">Tambah Data</a>
                </ul>
                <div class="card mb-2">
                    <h5 class="card-header">Tabel Layanan</h5>
                    <div class="table-responsive ">
                        <table class="table table-borderless" >
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Layanan</th>
                                    <th>Gambar</th>
                                    <th>Deksripsi</th>
                                    <th>Aksi</th>
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
                                        <td class="text-center">
                                            <img src="{{asset('storage/' . $item->photo)}}" alt="Gambar"
                                                style="width: 100px; height: 100px;">
                                        </td>
                                        <td>{{ $item->description }}</td>
                                        <td class="d-flex justify-content-center align-items-center gap-1">
                                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning"><i
                                                    class="bx bx-edit"></i></a>
      
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
                            <h5 class="modal-title" id="confirmDeleteModalLabel-{{ $item->id }}">Konfirmasi Penghapusan Layanan
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah kamu yakin menghapus layanan: **<span>{{ $item->name }}</span>**?</p>
                            <p class="text-danger">Setelah dilakukan data tidak bisa dikembalikan.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <form method="POST" action="{{ route('products.delete', $item->id) }}"> {{-- Action langsung diisi --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Iya, Hapus!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </x-main-laout>
      
      