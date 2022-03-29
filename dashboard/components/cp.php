<section class="row content">
  <div class="col-md-2"></div>
<div class="col-md-8">
<!-- general form elements -->
<div class="box box-primary">
  <!-- form start -->
  <form role="form" method="POST" autocomplete="off">
    <div class="box-head">
    <?php new_user("admin"); ?>
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="curp">Current Password</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" id="curp" name="curp" class="form-control" placeholder=" " required>
        </div>
      </div>
      <div class="form-group">
        <label for="newp">New Password</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" id="newp" name="newp" class="form-control" placeholder="" required>
        </div>
      </div>
      <div class="form-group">
        <label for="conp">Confirm Password</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" id="conp" name="conp" class="form-control" placeholder="" required>
        </div>
      </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" name="btn_cp" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->
<div class="col-md-2"></div>
</div>
</section>