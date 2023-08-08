<div class="modal fade" id="edit{{ $p->user_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Akun {{ $p->user->username }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/hasil/{{ $p->user_id }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="{{ $p->user->nama }}" disabled>
                        <input type="hidden" name="user_id" value="{{ $p->user_id }}">
                    </div>
                    <div class="mb-3">
                        <label for="hasil" class="form-label">Hasil</label>
                        <select class="form-select" name="hasil" id="hasil">
                            <option value="tidak lulus" {{ $p->user->hasil == 'tidak lulus' ? 'selected' : ''}}>tidak lulus</option>
                            <option value="lulus" {{ $p->user->hasil == 'lulus' ? 'selected' : ''}}>lulus</option>
                        </select>
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