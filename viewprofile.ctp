<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    body{
        background-color: #dad2d2;
    }
</style>
<div class="container"> <br>
	  <strong class="showprofile"> प्रोफाइल पहा  </strong>
	<?php
			if($d == 4 ){
	if($user['registration_status'] == 1 ) {?>
   
	<span><?= $this->Html->link(__('संपादित करा'), ['action' => 'editprofile', $user->e_id],['class'=>'btn btn-primary  col-md-offset-8'],['style'=>'color:black !important']) ?></span>

 <hr/>
	<?php }
			}
            ?>
<div class="col-md-12">
<div class="well">
<h3 style="text-align:center; color:red;"><?= h($user->ename) ?> </h3>
<br/>
<table border="2" class="table">
<tr>
<th>नाव :</th>
<td> <?= h($user->ename) ?> </td>
<th>जन्म दिनांक आणि साल :</th>
<td><?= h($user->dob) ?> </td>
</tr>
<tr>
<th>विभाग:</th>
<td> <?= h($user->section_master->section_name) ?> </td>
<th>आधार नंबर :</th>
<td><?= h($user->adhar_no) ?></td>
</tr>
<tr>
<th>धारण केलेले पद:</th>
<td> <?= h($user->designation_master->designation_name) ?> </td>
<th>सेवार्थ नंबर :</th>
<td><?= h($user->sevarth_no) ?></td>
</tr>
<tr>
<th>वर्ग:</th>
<td> <?= $user->class_master->class_name ?></td>
<th>नियुक्तीची तारीख :</th>
<td><?= h($user->Appointment_date) ?></td>
</tr>
<tr>
<th>धर्म :</th>
<td> <?= $user->religion_master->religion_name ?></td>
<th>कामावर रुजू होण्याची तारीख:</th>
<td><?= h($user->joining_date) ?></td>
</tr>
<tr>
<th>संवर्ग/प्रवर्ग :</th>
<td>  <?= h($user->cast_master->cast_name ) ?></td>
<th>सेवानिवृत्तीची तारीख:</th>
<td><?= h($user->retirement_date) ?></td>
</tr>
<tr>
<th>जात :</th>
<td> <?= h($user->subcast) ?></td>
<th>मोबाईल नंबर:</th>
<td><?= h($user->mobile) ?></td>
</tr>
<tr>
<th>सध्याचा पत्ता:</th>
<td><?= $this->Text->autoParagraph(h($user->current_address)); ?></td>
<th>वाढीव वेतन :</th>
<td><?= (h($user->gred_salary)); ?></td>
</tr>
<tr>
<th>राज्य:</th>
<td><?= $user->state_master->state_name ?></td>
<th>इतर पूरक भत्ते :</th>
<td><?= h($user->other_allownce) ?></td>
</tr>
<tr>
<th>जिल्हा: </th>
<td> <?= $user->district_master->district_name ?></td>
<th>मूळचा पत्ता : </th>
<td> <?= $this->Text->autoParagraph(h($user->permanent_address)); ?></td>
</tr> 
<tr>
<th>मूळ वेतन : </th>
<td> <?= h($user->basic_salary) ?> </td>
<th>घरभाडे भत्ता : </th>
<td> <?= h($user->room_allownce) ?> </td>
</tr> 
<tr>
<th>महागाई भत्ता : </th>
<td> <?= h($user->dearness_allowance) ?> </td>
<th>प्रवास भत्ता : </th>
<td> <?= $user->travelling_allowance ?> </td>
</tr>

</table>

</div>
</div><hr/>
</div> 