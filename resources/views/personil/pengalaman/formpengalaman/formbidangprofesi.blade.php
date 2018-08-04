<h3 class="box-title m-b-0">Form Bidang Profesi Personel</h3>
                                    <hr>
                                    <form method="POST" class="form-horizontal" action="{{ route('bidang.store') }}"  enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                        <label for="exampleInputname" class="col-sm-3 control-label"><br>Bidang Profesi*</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                        <table class="table" id="dynamic_field">  
                                                            <tr>  
                                                                <td><input type="text" name="bidangprofesi[]" placeholder="Masukkan Nama Bidang" class="form-control" /></td>  
                                                                <td><button type="button" name="add" id="add" class="btn btn-success">Tambah</button></td>  
                                                            </tr>  
                                                        </table>  
                                                </div>
                                            </div>
                                        </div>
                                    </form>