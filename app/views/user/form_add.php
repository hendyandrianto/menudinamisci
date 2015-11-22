<link href="<?php echo base_url();?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/plugins/parsley/dist/parsley.js"></script>
<div class="row">
    <div class="col-md-12">
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
		    <div class="panel-heading">
		        <div class="panel-heading-btn">
		            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
		            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		        </div>
		        <h4 class="panel-title"><?php echo $halaman;?></h4>
		    </div>
		    <div class="panel-body panel-form">
		        <form class="form-horizontal form-bordered" action="<?php echo $action;?>" method="post" data-parsley-validate="true">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Kode * :</label>
						<div class="col-md-2 col-sm-2">
							<input class="form-control" type="text" id="kode" readonly="readonly" minlength="2" name="kode" value="<?php echo set_value('kode',isset($default['kode']) ? $default['kode'] : ''); ?>" data-type="kode" data-parsley-required="true" data-parsley-minlength="2"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Nama * :</label>
						<div class="col-md-3 col-sm-3">
							<input class="form-control" type="text" id="nama" minlength="2" name="nama" value="<?php echo set_value('nama',isset($default['nama']) ? $default['nama'] : ''); ?>" data-type="nama" placeholder="Masukan Nama User" data-parsley-required="true" data-parsley-minlength="2"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Password * :</label>
						<div class="col-md-2 col-sm-2">
							<input class="form-control" type="password" id="pass" minlength="2" name="pass" value="<?php echo set_value('pass',isset($default['pass']) ? $default['nama'] : ''); ?>" data-type="pass" placeholder="Masukan Password" <?php if($cek=="add"){ echo 'data-parsley-required="true"';};?> data-parsley-minlength="2"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Hak Akses * :</label>
						<div class="col-md-3 col-sm-3">
							<span class="field">
                                <?php
                                  if(!empty($menunya)){
                                     $idmenu = explode("|", $menunya);
                                     $idmenux = explode("|", $submenu);
                                  }
                                  $i=0;
                                  $mutama = $this->db->query("SELECT * FROM tbl_menu WHERE status = '1' ORDER BY urutan")->result();
                                  foreach ($mutama as $key ) {
                                    $i++;
                                    echo '<li><strong>' . $key->nama_menu . "</strong></li>". "\n";
                                    $smenu = $this->db->get_where('tbl_submenu',array('parent'=>$key->menu_id,'level'=>'1','sstatus'=>'1'))->result();
                                    echo '<ul style="list-style-type:none;padding-bottom:10px">' . "\n";
                                    foreach ($smenu as $keys) {
                                        echo '<li><input type="checkbox" class="submenu" name="submenu[]" id="submenu'. $i .'" value="'. $keys->smenu_id . '"';
                                        if(!empty($menunya)){
                                          for($i=0;$i<count($idmenu);$i++){
                                            if($idmenu[$i]==$keys->smenu_id){
                                              echo " checked";
                                            }
                                          }
                                        }
                                        echo '>&nbsp;&nbsp;' . $keys->nama_smenu . "</li>" . "\n";
                                  $xx = 0;
                                  $smenux = $this->db->query("SELECT * FROM tbl_submenux WHERE parentx = '$keys->smenu_id' AND levelx = '1' AND sstatusx = '1' ORDER BY urut")->result();
                                  echo '<ul style="list-style-type:none;padding-bottom:10px">' . "\n";
                                  foreach ($smenux as $keysz) {
                                    $xx++;
                                    echo '<li><input type="checkbox" class="submenux" name="submenux[]" id="submenux'. $xx .'" value="'. $keysz->smenu_id . '"';
                                    if(!empty($menunya)){
                                      for($xx=0;$xx<count($idmenux);$xx++){
                                        if($idmenux[$xx]==$keysz->smenu_id){
                                          echo " checked";
                                        }
                                      }
                                    }
                                    echo '>&nbsp;&nbsp;' . $keysz->nama_smenux . "</li>" . "\n";
                                  }
                                  echo "</ul>" . "\n";
                                    }
                                    echo "</ul>" . "\n";
                                  }
                                ?>
                           </span>  
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3"></label>
						<div class="col-md-3 col-sm-3">
							<button type="submit" class="btn btn-success btn-sm"><?php echo $tombolsimpan;?></button>
                      		<button type="button" onclick="history.go(-1)" class="btn btn-info btn-sm"><?php echo $tombolbatal ; ?></button>
						</div>
					</div>
		        </form>
		    </div>
		</div>
	</div>
</div>
