<div class="col-md-6">
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Add Data
    </div>
    <div class="panel-body">
    <form action="<?php base_url()?>national/addNational/" method="POST" role="form">
        <div class="form-group">
        <label for="">Nationality</label>
                <input type="text" class="form-control" id="national" name="national">
        </div>
        <div class="form-group">
            <label for="">Abbreviation</label>
                    <input type="text" class="form-control" id="abbr" name="abbr">
        </div>                                  
    </div>
    <div class="modal-footer">
    <input type="submit" class="btn btn-info" value="Save">
    </div>
    </form>

    </div>
</div>
<div class="col-md-6">
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Team Data
    </div>
    <div class="panel-body">
    <a class="btn btn-info btn-square-sm" data-toggle="modal" href='#tambah' style='margin-bottom:30px'>Add Team</a>  
		<table class="table table-striped datatabel">
			<thead>
    			<tr>
                    <th>Team Name</th>
                    <th>Abbreviation</th>
				</tr>
			</thead>
            <tbody>
                <?php if($count>0){
                foreach($national as $n):?>
                    <tr>
                        <td><?=$n->nationality?></td>
                        <td><?=$n->abbr?></td>
                        <td>
                    <a class="btn btn-info btn-square-sm" data-toggle="modal" href='#edit<?=$n->id_nat;?>'><span class="glyphicon glyphicon-edit"></span></a>
                    <a class="btn btn-danger btn-square-sm" data-toggle="modal" href='#hapus<?=$n->id_nat;?>'><span class="glyphicon glyphicon-trash"></span></a>
                </td>                    
                    </tr>
                    <div class="modal fade" id="edit<?=$n->id_nat;?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Edit Team</h4>
                                </div>
                                <div class="modal-body">                                 
                                    <form action="<?php base_url()?>national/editNational/<?=$n->id_nat?>" method="POST" role="form">
                                    <div class="form-group">
                                    <label for="">Nationality</label>
                                            <input type="text" class="form-control" id="national" name="national" value="<?=$n->nationality?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Abbreviation</label>
                                                <input type="text" class="form-control" id="abbr" name="abbr" value="<?=$n->abbr?>">
                                    </div>                                  
                                </div>
                                <div class="modal-footer">
                                <input type="submit" class="btn btn-info" value="Save">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="hapus<?=$n->id_nat?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Delete Data</h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete this?
                                </div>
                                <div class="modal-footer">
                                    <a href="<?php base_url()?>national/deleteNational/<?=$n->id_nat?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;}
                else{?>
                <tr>
                    <td colspan=6><center>Data Not Found</td>
                </tr>
                <?php };?>
            </tbody>
        </table>
    </div>
</div>
</div>