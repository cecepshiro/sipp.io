<h3 class="box-title m-b-0">Form Riwayat Pendidikan Personel</h3>
<hr>
<form method="post" id="formpendidikan" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="table-repsonsive">
        <span id="error4"></span>
        <div style="overflow-x:auto;">
            <table class="table table-bordered" id="tabelpendidikan"  style="table-layout: auto; width: 100%">
                <tr>
                    <th>Kode Jenjang</th>
                    <th>Nama Perguruan</th>
                    <th>Kota</th>
                    <th>Bidang Ilmu</th>
                    <th>Tahun Lulus</th>
                    <th>
                        <button type="button" name="tambah3" class="btn btn-success btn-sm tambah3">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </th>
                </tr>
            </table>
        </div>
        <div align="center">
            <input type="submit" name="submit" class="btn btn-info" value="Simpan" />

        </div>
    </div>
</form>