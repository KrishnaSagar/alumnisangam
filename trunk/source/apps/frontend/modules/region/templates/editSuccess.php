<?php include_component('home', 'leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:18:10
?>
<?php use_helper('Object') ?>

<?php echo form_tag('region/update') ?>

<?php echo object_input_hidden_tag($region, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Name:</th>
  <td><?php echo object_input_tag($region, 'getName', array (
  'size' => 50,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($region->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'region/delete?id='.$region->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'region/show?id='.$region->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'region/list') ?>
<?php endif; ?>
</form>
