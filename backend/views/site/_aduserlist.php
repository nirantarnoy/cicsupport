<?php
?>
<div class="row">
    <div class="col-lg-12">
        <form action="<?=\yii\helpers\Url::to(['site/adddomainuser'],true)?>" method="post">
            <?php  for($i=0;$i< count($ad_users)-1;$i++):?>
                <input name="ad_user[]" type="checkbox" id="<?=$ad_users[$i]['samaccountname']?>" value="<?=$ad_users[$i]['samaccountname']?>"> <span><?=$ad_users[$i]['samaccountname']?></span><br />
            <?php endfor;?>
            <br/>
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
