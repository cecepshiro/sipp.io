<h3 class="box-title m-b-0">Form Pengalaman Pekerjaan Personel</h3>
<hr>
<form method="post" id="insert_form" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="table-repsonsive">
        <span id="error"></span>
        <div style="overflow-x:auto;">
            <table class="table table-bordered" id="item_table">
                <tr>
                    <th>Nama Lembaga</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Pekerjaan</th>
                    <th>Dari</th>
                    <th>Sampai</th>
                    <th>
                        <button type="button" name="add" class="btn btn-success btn-sm add">
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