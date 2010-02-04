
<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<table cellpadding="4" cellspacing="0" summary="My CD collection"><?php foreach ($this->cds as $cd): ?> 
  <tr>
    <td><img src="<?php echo $cd['src']; ?>" alt="<?php echo $cd['alt']; ?>" /></td>
    <td><strong><?php echo $cd['title']; ?></strong> (<?php echo $cd['artist']; ?>)<p><?php echo $cd['comment']; ?></p></td>
  </tr><?php endforeach; ?> 
</table>

</div>
