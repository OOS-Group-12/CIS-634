<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
                  <?php
            $parse1 = parse_ini_file('footer1.ini', FALSE, INI_SCANNER_RAW);
            $parse2 = parse_ini_file('footer2.ini', FALSE, INI_SCANNER_RAW);
            $parse3 = parse_ini_file('footer3.ini', FALSE, INI_SCANNER_RAW);
            $parse4 = parse_ini_file('footer4.ini', FALSE, INI_SCANNER_RAW);
          $title1 = $parse1['tag1'];
          $title2 = $parse2['tag2'];
          $title3 = $parse3['link'];
          $title4 = $parse4['name'];
          ?>

        <b><?php echo strtoupper($title1); ?></b>
      </div>
      <strong><?php echo strtoupper($title2); ?><a href="<?php echo strtoupper($title3); ?>" target="_blank"> <?php echo strtoupper($title4); ?></a></strong>
    </div>
    <!-- /.container -->
</footer>