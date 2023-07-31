<div class="modal fade" id="edit{{ $n->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Nilai {{ $n->user->nama }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/nilai/{{ $n->id }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_anggota" class="form-label">Nama Anggota</label>
                        <select class="form-select" name="user_id" id="nama_anggota">
                            <option value="">-- Pilih --</option>
                            @foreach($users as $u)
                                <option value="{{ $u->id }}" {{ $n->user_id == $u->id ? 'selected' : ''  }}>{{ $u->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('nama_anggota')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                    @foreach ($kriterias as $k)
                        <div class="mb-3">
                            <label for="{{ strtolower($k->nama_kriteria) }}" class="form-label">{{ $k->nama_kriteria }} (0-100)</label>
                            @php
                                $t = strtolower($k->nama_kriteria);
                                $b = $n->$t;
                            @endphp
                            <input type="number" class="form-control" placeholder="{{ $k->nama_kriteria }}" name="{{ strtolower($k->nama_kriteria) }}" id="create_{{ strtolower($k->nama_kriteria) }}" min="0" max="100" value="{{ $b }}">
                        </div>
                        @error('{{ strtolower($k->nama_kriteria) }}')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mr-auto" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>