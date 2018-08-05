<h3 class="box-title m-b-0">Form Pengalaman Praktik Profesi Personel</h3>
<hr>
<form method="post" id="formpraktik" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="table-repsonsive">
        <span id="error2"></span>
        <div style="overflow-x:auto;">
            <table class="table table-bordered" id="tabel_praktik">
                <tr>
                    <th>Tujuan Pemeriksaan</th>
                    <th>Tindakan Yang Dilakukan</th>
                    <th>Tahun Pelaksanaan</th>
                    <th>
                        <button type="button" name="tambah" class="btn btn-success btn-sm tambah">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </th>
                </tr>
            </table>
        </div>
        <div align="center">
            <input type="submit" name="simpan" class="btn btn-info" value="Simpan" />
        </div>
    </div>
</form>