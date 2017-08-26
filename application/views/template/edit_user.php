<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <form id="frm_tambah_user" enctype="multipart/form-data" method="POST" action="<?=base_url()?>admin/tambahAdmin">
            	<div class="ibox-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>User</h3>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger" style="float: right;"><i class="fa fa-save"></i>  Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="notifUser"></div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="hidden" name="id"/>
                        <input type="text" name="username" class="form-control" required />
                    </div>
            		<div class="form-group">
            			<label>Nama:</label>
            			<input type="text" name="nama" class="form-control" required />
            		</div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password:</label>
                        <input type="password" name="konfirmasipassword" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Level:</label>
                        <select name="level" class="form-control" required >
                            <option value="">--pilih--</option>
                            <option value="guest">guest</option>
                            <option value="admin">admin</option>
                            <option value="master">master</option>
                        </select>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
