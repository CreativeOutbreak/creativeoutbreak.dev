<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('profiles/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->linkTo(array('profiles/create', 'Create profiles', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v106548314056646710051iterated = false; ?><?php $v106548314056646710051iterator = $page->items; $v106548314056646710051incr = 0; $v106548314056646710051loop = new stdClass(); $v106548314056646710051loop->length = count($v106548314056646710051iterator); $v106548314056646710051loop->index = 1; $v106548314056646710051loop->index0 = 1; $v106548314056646710051loop->revindex = $v106548314056646710051loop->length; $v106548314056646710051loop->revindex0 = $v106548314056646710051loop->length - 1; ?><?php foreach ($v106548314056646710051iterator as $profile) { ?><?php $v106548314056646710051loop->first = ($v106548314056646710051incr == 0); $v106548314056646710051loop->index = $v106548314056646710051incr + 1; $v106548314056646710051loop->index0 = $v106548314056646710051incr; $v106548314056646710051loop->revindex = $v106548314056646710051loop->length - $v106548314056646710051incr; $v106548314056646710051loop->revindex0 = $v106548314056646710051loop->length - ($v106548314056646710051incr + 1); $v106548314056646710051loop->last = ($v106548314056646710051incr == ($v106548314056646710051loop->length - 1)); ?><?php $v106548314056646710051iterated = true; ?>
<?php if ($v106548314056646710051loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Active?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $profile->id; ?></td>
            <td><?php echo $profile->name; ?></td>
            <td><?php echo ($profile->active == 'Y' ? 'Yes' : 'No'); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('profiles/edit/' . $profile->id, '<i class="icon-pencil"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('profiles/delete/' . $profile->id, '<i class="icon-remove"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v106548314056646710051loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo $this->tag->linkTo(array('profiles/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('profiles/search?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo $this->tag->linkTo(array('profiles/search?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('profiles/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v106548314056646710051incr++; } if (!$v106548314056646710051iterated) { ?>
    No profiles are recorded
<?php } ?>
