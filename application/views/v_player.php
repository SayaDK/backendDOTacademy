<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Player Data
    </div>
    <div class="panel-body">
    <a class="btn btn-info btn-square-sm" data-toggle="modal" href='#tambah' style='margin-bottom:30px'>Add Player</a>  
		<table class="table table-striped datatabel">
			<thead>
    			<tr>
                    <th>No.</th>
                    <th>Player Name</th>
                    <th>Position</th>
                    <th>Nationality</th>
                    <th>Team</th>
                    <th>PPG</th>
                    <th>APG</th>
                    <th>RPG</th>
				</tr>
			</thead>
            <tbody>
                <?php if($count>0){
                foreach($player as $p):?>
                    <tr>
                        <td><?=$p->number?></td>
                        <td><?=$p->nama_player?></td>
                        <td><?=$p->abbr_pos?></td>
                        <td><?=$p->abbr_nat?></td>
                        <td><?=$p->abbr_team?></td>
                        <td><?=$p->ppg?></td>
                        <td><?=$p->apg?></td>
                        <td><?=$p->rpg?></td>
                        <td>
                    <a class="btn btn-info btn-square-sm" data-toggle="modal" href='#edit<?=$p->id_player;?>'><span class="glyphicon glyphicon-edit"></span></a>
                    <a class="btn btn-danger btn-square-sm" data-toggle="modal" href='#hapus<?=$p->id_player;?>'><span class="glyphicon glyphicon-trash"></span></a>
                </td>                    
                    </tr>
                    <div class="modal fade" id="edit<?=$p->id_player;?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Edit Player</h4>
                                </div>
                                <div class="modal-body">                                 
                                    <form action="<?php base_url()?>player/editPlayer/<?=$p->id_player?>" method="POST" role="form">
                                    <div class="form-group">
                                        <label for="">Player Number</label>
                                            <input type="number" class="form-control" id="number" name="number" value="<?=$p->number?>" maxlenght="2">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Player Name</label>
                                            <input type="text" class="form-control" id="player_name" name="player_name" value="<?=$p->nama_player?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Position</label>
                                        <select name="pos" id="pos" class="form-control">
                                        <?php foreach($position as $s):?>
                                        <option value="<?=$s->id_pos?>" <?php if($s->id_pos == $p->id_pos){echo "Selected";}?>><?=$s->abbr_pos?></option>
                                    <?php endforeach?>
                                    </select>
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="">Nationality</label>
                                        <select name="nat" id="nat" class="form-control">
                                        <?php foreach($national as $n):?>
                                        <option value="<?=$n->id_nat?>" <?php if($n->id_nat == $p->id_nat){echo "Selected";}?>><?=$n->abbr_nat?></option>
                                    <?php endforeach?>
                                    </select>
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="">Teams</label>
                                        <select name="team" id="team" class="form-control">
                                        <?php foreach($team as $t):?>
                                        <option value="<?=$t->id_team?>" <?php if($t->id_team == $p->id_team){echo "Selected";}?>><?=$t->abbr_team?></option>
                                    <?php endforeach?>
                                    </select>
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="">Point per Game</label>
                                                <input type="number" class="form-control" id="ppg" name="ppg" value="<?=$p->ppg?>">
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="">Assist per Game</label>
                                                <input type="number" class="form-control" id="apg" name="apg" value="<?=$p->apg?>">
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="">Rebound per Game</label>
                                                <input type="number" class="form-control" id="rpg" name="rpg" value="<?=$p->rpg?>">
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
                                    <h4 class="modal-title">Hapus Data</h4>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda Yakin Ingin Menghapus Data Ini?
                                </div>
                                <div class="modal-footer">
                                    <a href="<?php base_url()?>player/deletePlayer/<?=$p->id_player?>" class="btn btn-danger">Hapus</a>
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
                <h4 class="modal-title">Add Player</h4>
            </div>
            <div class="modal-body">
            <form action="<?php base_url()?>player/addPlayer" method="POST" role="form">
            <div class="form-group">
                <label for="">Player Number</label>
                    <input type="number" class="form-control" id="number" name="number" maxlenght="2">
            </div>
            <div class="form-group">
                <label for="">Player Name</label>
                    <input type="text" class="form-control" id="player_name" name="player_name">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <select name="pos" id="pos" class="form-control">
                <?php foreach($position as $s):?>
                <option value="<?=$s->id_pos?>"><?=$s->abbr_pos?></option>
            <?php endforeach?>
            </select>
            </div>                                  
            <div class="form-group">
                <label for="">Nationality</label>
                <select name="nat" id="nat" class="form-control">
                <?php foreach($national as $n):?>
                <option value="<?=$n->id_nat?>"><?=$n->abbr_nat?></option>
            <?php endforeach?>
            </select>
            </div>                                  
            <div class="form-group">
                <label for="">Teams</label>
                <select name="team" id="team" class="form-control">
                <?php foreach($team as $t):?>
                <option value="<?=$t->id_team?>"><?=$t->abbr_team?></option>
            <?php endforeach?>
            </select>
            </div>                                  
            <div class="form-group">
                <label for="">Point per Game</label>
                        <input type="number" class="form-control" id="ppg" name="ppg">
            </div>                                  
            <div class="form-group">
                <label for="">Assist per Game</label>
                        <input type="number" class="form-control" id="apg" name="apg">
            </div>                                  
            <div class="form-group">
                <label for="">Rebound per Game</label>
                        <input type="number" class="form-control" id="rpg" name="rpg">
            </div>                                  
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-info" value="Simpan Data">
            </div>
            </form>
        </div>
    </div>
</div>