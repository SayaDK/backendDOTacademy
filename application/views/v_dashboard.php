<!-- Jumbotron -->
<div class="jumbotron" style="height: 100px; padding: 15px 0 0 30px;">
	<h2>Hello, <?=$this->session->userdata('nama')?></h2>
</div>
<!-- End Jumbotron -->
<!-- Point Per Game Table -->
<div class="col-md-4">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Point per Game</h3>
		</div>
		<div class="panel-body">
		<table class="table table-striped datatabel">
			<thead>
    			<tr>
                    <th>Name</th>
                    <th>PPG</th>
				</tr>
			</thead>
            <tbody>
                <?php if($count>0){
                foreach($ppg as $p):?>
                    <tr>
                        <td><?=$p->nama_player?></td>
                        <td><?=$p->ppg?></td>
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
<!-- END Point Per Game Table -->
<!-- Assist Per Game Table -->
<div class="col-md-4">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Assist per Game</h3>
		</div>
		<div class="panel-body">
		<table class="table table-striped datatabel">
			<thead>
    			<tr>
                    <th>Name</th>
                    <th>APG</th>
				</tr>
			</thead>
            <tbody>
                <?php if($count>0){
                foreach($apg as $a):?>
                    <tr>
                        <td><?=$a->nama_player?></td>
                        <td><?=$a->apg?></td>
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
<!-- END Assist Per Game Table -->
<!-- Rebound Per Game Table -->
<div class="col-md-4">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Rebound per Game</h3>
		</div>
		<div class="panel-body">
		<table class="table table-striped datatabel">
			<thead>
    			<tr>
                    <th>Name</th>
                    <th>RPG</th>
				</tr>
			</thead>
            <tbody>
                <?php if($count>0){
                foreach($rpg as $r):?>
                    <tr>
                        <td><?=$r->nama_player?></td>
                        <td><?=$r->rpg?></td>
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
<!-- END Rebound Per Game Table -->
