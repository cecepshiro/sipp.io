<h3 class="box-title m-b-0">Form Pengalaman Praktik Profesi Personel</h3>
<hr>
<form method="post" id="formpraktik" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="table-repsonsive">
        <span id="error2"></span>
        <div style="overflow-x:auto;">
            <table class="table table-bordered" id="tabel_praktik">
                <tr>
                    <th>Kode Praktik</th>
                    <th>Tujuan Pemeriksaan</th>
                    <th>Tindakan Yang Dilakukan</th>
                    <th>Tahun Pelaksanaan</th>
                    <th>
                        <center><button type="button" name="tambah" class="btn btn-success btn-sm tambah">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button></center>
                    </th>
                </tr>
            </table>
        </div>
        <div align="center">
        <input type="submit" name="submit" class="btn btn-outline-success" value="Simpan" />
        </div>
    </div>
</form>