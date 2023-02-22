
        <div class="table-responsive col-lg-12">
            <table class="table table-striped table-sm" id="tblData">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Keterangan Singkat</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($aspirasis as $aspirasi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $aspirasi->nik }}</td>
                    <td>{{ $aspirasi->keterangan_singkat }}</td>
                    <td>{{ $aspirasi->lokasi }}</td>
                    <td>{{ $aspirasi->kategori->kategori }}</td>
                    <td>{{ $aspirasi->status }}</td>
                    <td>
                        <form action="/aspirasi/view" method="post" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{ $aspirasi->id }}">
                            <button class="badge bg-info border-0"><i class="bi bi-eye"></i></button>
                        </form>
                        <form action="/aspirasi/{{ $aspirasi->id }}" method="post" class="d-inline">
                            @method('put')
                            @csrf
                            <input type="hidden" name="proses" value="true">
                            <button class="badge bg-warning border-0" onclick="return confirm('Ubah status proses?')"><i class="bi bi-gear"></i></button>
                        </form>
                        <form action="/aspirasi/{{ $aspirasi->id }}" method="post" class="d-inline">
                            @method('put')
                            @csrf
                            <input type="hidden" name="selesai" value="true">
                            <button class="badge bg-success border-0" onclick="return confirm('Ubah status selesai?')"><i class="bi bi-check2-circle"></i></button>
                        </form>
                        <form action="/aspirasi/{{ $aspirasi->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>