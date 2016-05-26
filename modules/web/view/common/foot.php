<div class="panel-footer">
    <div class="container">
        <div class="copy-rights">
            Copyright (c) 890vip <a href="http://www.890vip.cn/" target="_blank" title="890vip">890vip</a> All rights reserved
        </div>
    </div>
</div>

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php foreach($this->js as $js): ?>
    <script  src="<?php echo $this->cdn($js);?>"></script>
<?php endforeach;?>
</body>
</html>