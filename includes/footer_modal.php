<!-- Footer -->
<div class="modal fade" id="footer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Footer</b></h4>
            </div>
            <div class="modal-body">
              <div class="text-center">
                <?php
                  $parse = parse_ini_file('footer1.ini', FALSE, INI_SCANNER_RAW);
                  $parse1 = parse_ini_file('footer2.ini', FALSE, INI_SCANNER_RAW);
                  $parse2 = parse_ini_file('footer3.ini', FALSE, INI_SCANNER_RAW);
                  $parse3 = parse_ini_file('footer4.ini', FALSE, INI_SCANNER_RAW);
                  $tag1 = $parse['tag1'];
                  $tag2 = $parse1['tag2'];
                  $link = $parse2['link'];
                  $name = $parse3['name'];
                ?>
                <form class="form-horizontal" method="POST" action="footer_save.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>">
                  <div class="form-group">
                    <label for="tag1" class="col-sm-3 control-label">Tag1</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tag1" name="tag1" value="<?php echo $tag1; ?>">
                    </div>
                    <label for="tag2" class="col-sm-3 control-label">Tag2</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tag2" name="tag2" value="<?php echo $tag2; ?>">
                    </div>
                    <label for="link" class="col-sm-3 control-label">Link</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="link" name="link" value="<?php echo $link; ?>">
                    </div>
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                    </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="save1"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>