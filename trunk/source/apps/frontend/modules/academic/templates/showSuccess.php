<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:17:12
?>
<div class="page">
	<h3>Academic Details</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php if($academics): ?>
		<div class="oddRow">
			<div class="acadCol1"><b>Year</b></div>
			<div class="acadCol2"><b>Degree</b></div>
			<div class="acadCol3"><b>Branch</b></div>
			<div class="acadCol4"><b>Institute</b></div>
		</div>
		<?php $i=1; foreach ($academics as $academic): $i++;?>
			<div class="<?php if($i%2 == 0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
				<div class="acadCol1" title="<?php sfConfig::get('app_privacytitle_'.$academic->getYearflag()); ?>"><?php echo $academic->getYear() ?></div>
				<div class="acadCol2" title="<?php sfConfig::get('app_privacytitle_'.$academic->getDegreeflag()); ?>"><?php echo $academic->getDegree() ?></div>
				<div class="acadCol3" title="<?php sfConfig::get('app_privacytitle_'.$academic->getDepartmentflag()); ?>"><?php echo $academic->getDepartment() ?></div>
				<div class="acadCol4" title="<?php sfConfig::get('app_privacytitle_'.$academic->getInstituteflag()); ?>"><?php echo $academic->getInstitute() ?></div>
				<div class="acadCol5">
					<a href="#"><img src="/images/pencil.png" alt="edit" title="edit"></a>
					<a href="#"><img src="/images/del2.png" alt="edit" title="edit"></a>
				</div>
			</div><a href="academic/edit/id/<?php echo $academic->getId(); ?>"> </a>
		<?php endforeach; ?>
	<?php endif; ?>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"></div>
	<div class="vspacer20">&nbsp;</div>
</div>
