<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Email</th>
            <th>JK</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($murid as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->user->email ?? '-' }}</td>
                <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>
                    <a href="{{ route('murid.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('murid.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')"
                            class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
