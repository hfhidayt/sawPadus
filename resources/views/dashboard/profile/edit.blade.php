<div class="modal fade" id="edit{{ auth()->user()->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Akun {{ auth()->user()->nama }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/profil/{{ auth()->user()->id }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="{{ auth()->user()->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" id="u" value="{{ auth()->user()->username }}">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" placeholder="NIM" name="nim" id="nim" value="{{ auth()->user()->nim }}">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" id="jurusan" value="{{ auth()->user()->jurusan }}">
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