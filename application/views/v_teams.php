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
                    <th>Conference</th>
				</tr>
			</thead>
            <tbody>
                <?php if($count>0){
                foreach($teams as $t):?>
                    <tr>
                        <td><?=$t->nama_team?></td>
                        <td><?=$t->abbr_team?></td>
                        <td><?=$t->conference?></td>
                        <td>
                    <a class="btn btn-info btn-square-sm" data-toggle="modal" href='#edit<?=$t->id_team;?>'><span class="glyphicon glyphicon-edit"></span></a>
                    <a class="btn btn-danger btn-square-sm" data-toggle="modal" href='#hapus<?=$t->id_team;?>'><span class="glyphicon glyphicon-trash"></span></a>
                </td>                    
                    </tr>
                    <div class="modal fade" id="edit<?=$t->id_team;?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Edit Team</h4>
                                </div>
                                <div class="modal-body">                                 
                                    <form action="<?php base_url()?>teams/editTeam/<?=$t->id_team?>" method="POST" role="form">
                                    <div class="form-group">
                                    <label for="">Team Name</label>
                                            <input type="text" class="form-control" id="team_name" name="team_name" value="<?=$t->nama_team?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Abbreviation</label>
                                                <input type="text" class="form-control" id="abbr" name="abbr" value="<?=$t->abbr_team?>">
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="">Conference</label>
                                        <select name="conf" id="conf" class="form-control">
                                        <?php foreach($conf as $c):?>
                                        <option value="<?=$c->id_conf?>" <?php if($c->id_conf == $t->id_conf){echo "Selected";}?>><?=$c->conference?></option>
                                    <?php endforeach?>
                                    </select>
                                    </div>                                  
                                </div>
                                <div class="modal-footer">
                                <input type="submit" class="btn btn-info" value="Save">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="hapus<?=$t->id_team?>">
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
                                    <a href="<?php base_url()?>teams/deleteTeam/<?=$t->id_team?>" class="btn btn-danger">Hapus</a>
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

<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Team</h4>
            </div>
            <div class="modal-body">
            <form action="<?php base_url()?>teams/addTeam/<?=$t->id_team?>" method="POST" role="form">
                <div class="form-group">
                <label for="">Team Name</label>
                        <input type="text" class="form-control" id="team_name" name="team_name" value="<?=$t->nama_team?>">
                </div>
                <div class="form-group">
                    <label for="">Abbreviation</label>
                            <input type="text" class="form-control" id="abbr" name="abbr" value="<?=$t->abbr_team?>">
                </div>                                  
                <div class="form-group">
                    <label for="">Conference</label>
                    <select name="conf" id="conf" class="form-control">
                    <?php foreach($conf as $c):?>
                    <option value="<?=$c->id_conf?>" <?php if($c->id_conf == $t->id_conf){echo "Selected";}?>><?=$c->conference?></option>
                <?php endforeach?>
                </select>
                </div>                                  
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-info" value="Save">
            </div>
            </form>
        </div>
    </div>
</div>