<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Buat Kriteria Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/kriteria" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                        <input type="text" class="form-control" placeholder="Nama Kriteria" name="nama_kriteria" id="nama_kriteria">
                    </div>
                    @error('nama_kriteria')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="bobot_kriteria" class="form-label">Bobot Kriteria (0-100)</label>
                        <input type="number" class="form-control" placeholder="Bobot Kriteria" name="bobot_kriteria" id="create_bobot_kriteria" min="0" max="100">
                    </div>
                    @error('bobot_kriteria')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Buat</button>
                </div>
            </form>
        </div>
    </div>
</div>