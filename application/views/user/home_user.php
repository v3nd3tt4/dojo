<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
        	<div class="ibox-title">
                <div class="row">
                    <div class="col-md-10">
                        <h3>User</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="<?=base_url()?>admin/pageAddUser" class="btn btn-danger" style="float: right;"><i class="fa fa-plus"></i>  Tambah</a>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Level</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($row->result() as $data){
                        ?>
                        <tr>
                            <td><?=$no?>.</td>
                            <td><?=$data->username?></td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->level?></td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>  Hapus</button> <a href="<?=base_url()?>admin/pageEditUser?id_user=<?=$data->id_user?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  Edit</a>
                            </td>
                        </tr>
                        <?php $no++;}?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>