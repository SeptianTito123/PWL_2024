@empty($barang)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data yang anda cari tidak ditemukan
                </div>
                <a href="{{ url('/user') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
@else
    <form action="{{ url('/barang/' . $barang->barang_id . '/update_ajax') }}" method="POST" id="form-edit">
        @csrf
        @method('PUT')
        <div id="modal-master" class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                <option value="">- Pilih Kategori -</option>
                                @foreach($kategori as $l)
                                    <option value="{{ $l->kategori_id }}" {{ $barang->kategori_id == $l->kategori_id ? 'selected' : '' }}>
                                        {{ $l->kategori_nama }}
                                    </option>
                                @endforeach
                            </select>                            
                            <small id="error-level_id" class="error-text form-text text-danger"></small>
                        </div>
        
                        <div class="form-group">
                            <label>Barang Kode</label>
                            <input type="text" value="{{$barang->barang_kode}}" name="barang_kode" id="barang_kode" class="form-control" required>
                            <small id="error-username" class="error-text form-text text-danger"></small>
                        </div>
        
                        <div class="form-group">
                            <label>Barang Nama</label>
                            <input type="text" value="{{$barang->barang_nama}}" name="barang_nama" id="barang_nama" class="form-control" required>
                            <small id="error-name" class="error-text form-text text-danger"></small>
                        </div>
        
                        <div class="form-group">
                            <label>Harga Beli</label>
                            <input type="text" value="{{$barang->harga_beli}}" name="harga_beli" id="harga_beli" class="form-control" required>
                            <small id="error-password" class="error-text form-text text-danger"></small>
                        </div>
        
                        <div class="form-group">
                            <label>Harga Jual</label>
                            <input type="text" value="{{$barang->harga_jual}}" name="harga_jual" id="harga_jual" class="form-control" required>
                            <small id="error-password" class="error-text form-text text-danger"></small>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
    </form>

    <script>
        $(document).ready(function () {
            $("#form-edit").validate({
                rules: {
                kategori_id: {
                    required: true,
                    number: true
                },
                barang_kode: {
                    required: true,
                    minlength: 3
                },
                barang_nama: {
                    required: true,
                    minlength: 3
                },
                harga_beli: {
                    required: true,
                    number: true,
                    min: 0
                },
                harga_jual: {
                    required: true,
                    number: true,
                    min: 0
                }
            },
                submitHandler: function (form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function (response) {
                            if (response.status) {
                                $('#myModal').modal('hide');
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message
                                });
                                dataUser.ajax.reload();
                            } else {
                                $('.error-text').text('');
                                $.each(response.msgField, function (prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi Kesalahan',
                                    text: response.message
                                });
                            }
                        }
                    });
                    return false;
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endempty
