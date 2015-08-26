<script src="<?php echo asset_url();?>js/media/embedpano.js"></script>
<script src="<?php echo asset_url();?>js/media/krpano.js"></script>
 <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Visual Tour </strong></h3>
                </div>
           	</div>
<div id="pano" style="width:100%; height:500px;"></div>

<script>
  embedpano({ xml:"<?php echo asset_url();?>js/media/<?php echo $schId;?>.xml", target:"pano",html5:"prefer",mwheel:false});
</script>