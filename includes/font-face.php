@font-face {
  font-family: '<?php echo $font_family ?>';
  font-weight: <?php echo $font_weight ?>;
  font-style: <?php echo $font_style ?>;
  src: <?php foreach ( $font_urls as $format => $url ): ?>url('<?php echo $url ?>') format(<?php echo $format ?>), <?php endforeach; ?> local('<?php echo $font_family ?>');
}
