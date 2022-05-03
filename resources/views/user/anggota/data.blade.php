<div class="box">
    <div class="box-header with-border">
        <h4 class="box-title">Data Anggota</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Penduduk</th>
                        <th>Nama </th>
                        <th>Pendidikan </th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_penduduk }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->pendidikan }}</td>
                            <td align="center">
                                <a href="{{ route('anggotaUser.show', $item->id) }}"><button type="submit"
                                        class="waves-effect waves-light btn btn-outline btn-success mb-5">Detail</button></a>

                                @if ($item->user_id == Auth::user()->id)
                                    <form action="{{ route('anggotaUser.destroy', $item->id) }}" method="post"
                                        id="formHapus" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="waves-effect waves-light btn btn-outline btn-danger mb-5"
                                            onclick="return confirm('Anda Yakin Menghapus Data Ini? ')">Hapus</button>
                                    </form>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No. Penduduk</th>
                        <th>Nama </th>
                        <th>Pendidikan </th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
