
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading"> <i class="fa fa-external-link-square"></i> Öğretmen
        <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a> <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a> <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a> <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
      </div>
      <div class="panel-body">
        <form role="form" class="form-horizontal" method="post" action="<?=$this->_action?>" autocomplete="off" enctype="multipart/form-data">
          <input type="hidden" name="submit" value="true">
          <div class="form-group">
            <label class="col-sm-2 control-label"> Fotoğraf </label>
            <div class="col-sm-3">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-group">
                  <div class="form-control uneditable-input"> <i class="fa fa-file fileupload-exists"></i> <span class="fileupload-preview"></span> </div>
                  <div class="input-group-btn">
                    <div class="btn btn-light-grey btn-file"> <span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Dosya Seçin</span> <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Değiştir</span>
                      <input type="file" name="image[]" class="file-input">
                    </div>
                    <a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload"> <i class="fa fa-times"></i> Sil </a> </div>
                </div>
              </div>
            </div>
            <?php if (isset($image)) { ?>
            <div class="col-sm-2"> <a class="btn btn-green" href="#static" data-toggle="modal"><i class="fa 
fa-external-link-square"></i></a> <a class="btn btn-bricky" href="<?=URL?>teacher/deleteimage/<?=$teacher->id?>"><i class="fa fa-times"></i></a> </div>
            <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
              <div class="modal-body">
                <p><img src="<?=$image?>" style="width:100%"></p>
              </div>
              <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default"> Tamam </button>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="first_name"> Adı </label>
            <div class="col-sm-9">
              <input type="text" name="first_name" id="first_name" class="form-control input-sm" value="<?php if (isset($teacher->first_name)) echo $teacher->first_name; ?>" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="last_name"> Soyadı </label>
            <div class="col-sm-9">
              <input type="text" name="last_name" id="last_name" class="form-control input-sm" value="<?php if (isset($teacher->last_name)) echo $teacher->last_name; ?>" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="birthday"> Doğum Tarihi </label>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" name="birthday" id="birthday" class="form-control input-mask-date input-sm" value="<?php if (isset($teacher->birthday)) echo $teacher->birthday; ?>">
                <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span></div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="gender_id"> Cinsiyet </label>
            <div class="col-sm-3">
              <select name="gender_id" id="gender_id" class="form-control input-sm" required="required">
                <option value="">Seçiniz</option>
                <?php foreach ($gender as $row) { ?>
                <option value="<?=$row->id;?>" <?php if ( isset($teacher->gender_id) && $teacher->gender_id == $row->id ) echo 'selected'; ?>><?=$row->name;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="blood_group_id"> Kan Grubu </label>
            <div class="col-sm-3">
              <select name="blood_group_id" id="blood_group_id" class="form-control input-sm" required="required">
                <option value="">Seçiniz</option>
                <?php foreach ($blood_group as $row) { ?>
                <option value="<?=$row->id;?>" <?php if ( isset($teacher->blood_group_id) && $teacher->blood_group_id == $row->id ) echo 'selected'; ?>><?=$row->name;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="email"> Email </label>
            <div class="col-sm-9">
              <input type="email" name="email" id="email" class="form-control input-sm" value="<?php if (isset($teacher->email)) echo $teacher->email; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="address"> Adres </label>
            <div class="col-sm-9">
              <input type="text" name="address" id="address" class="form-control input-sm" value="<?php if (isset($teacher->address)) echo $teacher->address; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="phone"> Telefon </label>
            <div class="col-sm-9">
              <input type="text" name="phone" id="phone" class="form-control input-sm" value="<?php if (isset($teacher->phone)) echo $teacher->phone; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="classroom_id"> Sınıf Öğretmeni </label>
            <div class="col-sm-3">
              <select name="classroom_id" id="classroom_id" class="form-control input-sm" required="required">
                <option value="">Seçiniz</option>
                <?php foreach ($classroom as $row) { ?>
                <option value="<?=$row->id;?>" <?php if ( isset($teacher->classroom_id) && $teacher->classroom_id == $row->id ) echo 'selected'; ?>><?=$row->name;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="classrooms"> Ders Verdiği Sınıflar </label>
            <div class="col-sm-9">
              <select multiple="multiple" name="classrooms[]" id="classrooms" class="form-control search-select">
                <?php foreach ($classroom as $row) { ?>
                <option value="<?=$row->id;?>" <?php if ( isset($teacher_to_classroom) && in_array($row->id, $teacher_to_classroom) ) echo 'selected'; ?>><?=$row->name;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-2">
              <input type="submit" value="Kaydet" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
