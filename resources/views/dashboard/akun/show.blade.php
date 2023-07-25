<div class="modal fade" id="show{{ $u->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Akun {{ $u->username }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="{{ $u->nama }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" id="u" value="{{ $u->username }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" placeholder="NIM" name="nim" id="nim" value="{{ $u->nim }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" id="jurusan" value="{{ $u->jurusan }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" name="role" id="role" disabled>
                        <option value="pelatih" {{ $u->role == 'pelatih' ? 'selected' : ''}}>Pelatih</option>
                        <option value="anggota" {{ $u->role == 'anggota' ? 'selected' : ''}}>Anggota</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>