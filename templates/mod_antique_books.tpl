
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


<?php
	$value = $col['raw'];
	$mtw = deserialize($value, TRUE);
	$classes = array('even', 'odd');
	$counter = 1;
	foreach ($mtw as $mt)
	{
		if (is_array($mt))
		{
			echo $classes[$counter % 2];
			echo $counter. ' - ';
			echo $mt[0]. ' - ';
			echo $mt[1]. ' - ';
			echo $mt[2]. ' - ';
			echo $mt[3]. ' - ';
			echo $mt[4]. ' - ';
			echo $mt[5]. ' - ';
			echo $mt[6];
			echo '<br />';
			$counter++;
		}
	}
?>