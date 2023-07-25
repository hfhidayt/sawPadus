<div class="modal fade" id="edit{{ $k->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Kriteria {{ $k->nama_kriteria }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/kriteria/{{ $k->id }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                        <input type="text" class="form-control" placeholder="Nama Kriteria" name="nama_kriteria" id="nama_kriteria" value="{{ $k->nama_kriteria }}">
                    </div>
                    <div class="mb-3">
                        <label for="bobot_kriteria" class="form-label">Bobot Kriteria (0-100)</label>
                        <input type="number" class="form-control" placeholder="Bobot Kriteria" name="bobot_kriteria" id="edit_bobot_kriteria" value="{{ $k->bobot_kriteria }}" min="0" max="100">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>