<section class="container-wrapper">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">A list of all Post records</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                  <th>Attachment</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php get_posts(); activate_post(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Attachment</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</section>
