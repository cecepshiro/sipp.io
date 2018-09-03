<h3 class="box-title m-b-0">Form Pengembangan Profesional Personel</h3>
<hr>
<form method="post" id="formpengembanganpro" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="table-repsonsive">
        <span id="error3"></span>
        <div style="overflow-x:auto;">
            <table class="table table-bordered" id="tabelpengembanganpro">
                <tr>
                    <th>Kegiatan</th>
                    <th>Tempat</th>
                    <th>Tahun</th>
                    <th>
                        <center><button type="button" name="tambah2" class="btn btn-success btn-sm tambah2">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button></center>
                    </th>
                </tr>
            </table>
        </div>
        <div align="center">
            <input type="submit" name="submit" class="btn btn-info" value="Simpan" />

        </div>
    </div>
</form>