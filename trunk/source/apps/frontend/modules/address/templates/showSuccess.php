<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:16:21
?>
<table class="showprofile">
<tbody>
<tr>
<!--<th>Id: </th>
<td><?php echo $address->getId() ?></td>
</tr>
<tr>
<th>User: </th>
<td><?php echo $address->getUserId() ?></td>
</tr>
-->

<tr>
<th>Address: </th>
<td><?php echo $address->getAddress() ?></td>

<th>Visible to: </th>
<td><?php if($address->getAddressflag()  == 1): echo "None"; elseif($address->getAddressflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>

</tr>

<tr>
<th>City: </th>
<td><?php echo $address->getCity() ?></td>

<th>Visible to: </th>
<td><?php if($address->getCityflag()  == 1): echo "None"; elseif($address->getCityflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>


</tr>

<tr>
<th>State: </th>
<td><?php echo $address->getState() ?></td>

<th>Visible to: </th>
<td><?php if($address->getStateflag()  == 1): echo "None"; elseif($address->getStateflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>

</tr>

<tr>
<th>Country: </th>
<td><?php echo $address->getCountry() ?></td>

<th>Visible to: </th>
<td><?php if($address->getCountryflag()  == 1): echo "None"; elseif($address->getCountryflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>

</tr>

<tr>
<th>Postalcode: </th>
<td><?php echo $address->getPostalcode() ?></td>
<th>Visible to: </th>
<td><?php if($address->getPostalcodeflag()  == 1): echo "None"; elseif($address->getPostalcodeflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>


</tr>

<tr>
<th>Phone1: </th>
<td><?php echo $address->getPhone1() ?></td>
<th>Visible to: </th>
<td><?php if($address->getPhone1flag()  == 1): echo "None"; elseif($address->getPhone1flag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>


</tr>

<tr>
<th>Phone2: </th>
<td><?php echo $address->getPhone2() ?></td>

<th>Visible to: </th>
<td><?php if($address->getPhone2flag()  == 1): echo "None"; elseif($address->getPhone2flag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>

</tr>

<tr>
<th>Cellphone: </th>
<td><?php echo $address->getCellphone() ?></td>

<th>Visible to: </th>
<td><?php if($address->getCellphoneflag()  == 1): echo "None"; elseif($address->getCellphoneflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>

</tr>

<tr>
<th>Fax: </th>
<td><?php echo $address->getFax() ?></td>
<th>Visible to: </th>
<td><?php if($address->getFaxflag()  == 1): echo "None"; elseif($address->getFaxflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>


</tr>

<tr>
<th>Type: </th>
<td><?php echo $address->getType() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'address/edit?id='.$address->getId()) ?>
<!--

&nbsp;<?php echo link_to('list', 'address/list') ?>
-->