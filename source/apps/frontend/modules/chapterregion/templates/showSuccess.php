<?php include_component('home', 'leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:18:30
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $chapterregion->getId() ?></td>
</tr>
<tr>
<th>Chapter: </th>
<td><?php echo $chapterregion->getChapterId() ?></td>
</tr>
<tr>
<th>Region: </th>
<td><?php echo $chapterregion->getRegionId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'chapterregion/edit?id='.$chapterregion->getId()) ?>
&nbsp;<?php echo link_to('list', 'chapterregion/list') ?>