<h3 class="box-title m-b-0">Form Bidang Profesi Personel</h3>
<hr> 
<form method="post" id="formbidangbidangprofesipers" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="table-repsonsive">
        <span id="errorbidang"></span>
        <div style="overflow-x:auto;">
            <center>
            <table class="table" id="tabelbidangprofesi"  style="table-layout: auto; width: 100%">
                <tr>
                    <th width="50%">Kode Profesi Pers</th>
                    <th width="50%">Bidang Profesi</th>
                    <th width="50%">
                        <button type="button" name="tambahbidangpers" class="btn btn-success btn-sm tambahbidangpers">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </th>
                </tr>
            </table>
            </center>
        </div>
        <div align="center">
            <input type="submit" name="submit" class="btn btn-outline-success" value="Simpan" />

        </div>
    </div>
</form>