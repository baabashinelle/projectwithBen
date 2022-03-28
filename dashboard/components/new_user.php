<section class="row content">
  <div class="col-md-2"></div>
<div class="col-md-8">
<!-- general form elements -->
<div class="box box-primary">
  <!-- form start -->
  <form role="form" method="POST" autocomplete="off">
    <div class="box-head">
    <?php new_user(); ?>
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" id="name" name="name" class="form-control" placeholder="eg.: John Doe " required>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" id="email" name="email" class="form-control" placeholder="eg.: doe@example.com" required>
        </div>
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="eg.: +1234567890" required>
        </div>
      </div>
      <div class="form-group" style="display: flex; justify-content: space-evenly; align-items:center ">
            <label>
                <input type="radio" name="user_type" class="flat-red" value="1" checked required>
                User
            </label>
            <label>
                <input type="radio" name="user_type" class="flat-red" value="3" required>
                Writer
            </label>
            <label>
                <input type="radio" name="user_type" class="flat-red" value="2" required>
                Admin
            </label>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" name="btn_add_user" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->
<div class="col-md-2"></div>
</div>
</section>
