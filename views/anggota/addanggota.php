
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive"align="center">
                        <h4>Tambah Data Anggota</h4>
                        <br>
                        <form action="model/anggota/prosesaddanggota.php"align="center" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama Anggota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_anggota" id="nama_anggota"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="l">Laki Laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="alamat" id="alamat" cols="10" rows="2"></textarea></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="nama_anggota"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>