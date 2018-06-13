<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\User $user
*/
?>
<style>
body{
background-color: #dae4df;
}
</style>
<div class="container"> <br>
<strong class="showprofile"> प्रोफाइल पहा </strong><br/><hr/>
<div class="col-md-12">
<div class="well">
<h3 style="text-align:center; color:red;"><?= h($user->ename) ?> </h3>
<hr/>
<table class="table table-bordered">
<tr>
<th>नाव :</th>
<td> <?= h($user->ename) ?> </td>
<th>मोबाईल नंबर:</th>
<td><?= h($user->mobile) ?></td>
</tr>
<tr>
<th>विभाग:</th>
<td> <?= h($user->section_master->section_name) ?> </td>

<th>User Role:</th>
<td> <?= $user->user_role_master->user_role ?> </td>
<!--
<th>Digital Signature:</th>
<td>  <img src="/leavesystem/signature/<?= $sign;?> " alt="Sign"  hight="50px" width="80px"/> </td>
-->
</tr>

</table>

</div>
</div><hr/>
</div> 