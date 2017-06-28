<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/ideationPopular/skins/ideation/css/ideation.css--><?php $__tmp=array('widgets/ideationPopular/skins/ideation/css/ideation.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="popularSimple">
    <ul>
        <li class="active" onmouseover="jQuery(this).parent().find('li.active').removeClass('active');jQuery(this).addClass('active');return false;"><a href="#" onclick="return false;"><?php echo $__Context->lang->ip_newest_documents ?></a>
            <?php if($__Context->widget_info->newest_documents){ ?>
            <ul>
                <?php if($__Context->widget_info->newest_documents&&count($__Context->widget_info->newest_documents))foreach($__Context->widget_info->newest_documents as $__Context->k => $__Context->v){ ?>
                <li><a href="<?php echo $__Context->v->getPermanentUrl() ?>"><?php echo $__Context->v->getTitle($__Context->widget_info->subject_cut_size) ?></a></li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
        <li onmouseover="jQuery(this).parent().find('li.active').removeClass('active');jQuery(this).addClass('active');return false;"><a href="#" onclick="return false;"><?php echo $__Context->lang->ip_popular_documents ?></a>
            <?php if($__Context->widget_info->popular_documents){ ?>
            <ul>
                <?php if($__Context->widget_info->popular_documents&&count($__Context->widget_info->popular_documents))foreach($__Context->widget_info->popular_documents as $__Context->k => $__Context->v){ ?>
                <li><a href="<?php echo $__Context->v->getPermanentUrl() ?>"><?php echo $__Context->v->getTitle($__Context->widget_info->subject_cut_size) ?></a></li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
        <li onmouseover="jQuery(this).parent().find('li.active').removeClass('active');jQuery(this).addClass('active');return false;"><a href="#" onclick="return false;"><?php echo $__Context->lang->ip_newest_comments ?></a>
            <?php if($__Context->widget_info->newest_comments){ ?>
            <ul>
                <?php if($__Context->widget_info->newest_comments&&count($__Context->widget_info->newest_comments))foreach($__Context->widget_info->newest_comments as $__Context->k => $__Context->v){ ?>
                <li><a href="<?php echo $__Context->v->getPermanentUrl() ?>"><?php echo $__Context->v->getSummary($__Context->widget_info->subject_cut_size) ?></a></li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
    </ul>
</div>
