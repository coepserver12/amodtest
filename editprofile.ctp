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
<script>
$(document).ready(function(){
    $("#state_id").change(function(){
	selectedState = $("#state_id").val();
    $.ajax({
		  url: '/leavesystem/DistrictMaster/getDistrict/'+selectedState,
		  success: function( data ) {
              $('#district_id').html(data);
		  },
		  error: function( req, status, err ) {
			console.log( 'something went wrong', status, err );
		  }
		});
	});
});
</script>
<div class="container">
    <?= $this->Form->create($user,['url'=>['controller' => 'Users','action' => 'editprofile', $user->e_id]]) ?>
      <div class="col-md-10 col-md-offset-1">
      <div class="well">
          <strong class="showprofile"><h2 class="modal-title" style="text-align:center; ">नोंदणी अर्ज</h2></strong><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">स्वतःचे पूर्ण नाव:</label>
                        <div class="col-md-7">
                            <?= $this->Form->text('ename',['class'=>'form-control','required'=>'required'])?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">जन्म दिनांक आणि साल :</label>
                        <div class="col-md-7">
                            <?= $this->Form->text('dob', ['type'=>'text','class' => 'form-control','label'=>false,'pattern'=>'\d{1,2}/\d{1,2}/\d{4}','placeholder'=>'DD/MM/YYYY','required'=>'required'] )?>
                        </div>
                    </div>
                </div>
            </div><br>
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5"> विभाग:</label>
                        <div class="col-md-7">
                           <select name="section_id" class="form-control"  style="width:100%; float: right;" required='required'>
                                
                                <option value="<?= $section->section_id; ?>" selected><?= $section->section_name ; ?></option> 
                                 
                               <?php    foreach ($section_data as $row): ?>
                                <option value="<?= $row['section_id']; ?>"><?= $row['section_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
              <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">आधार नंबर :</label>
                        <div class="col-md-7">
                            <?= $this->Form->text('adhar_no', ['class' => 'form-control','pattern'=>'[0-9]{12}','title'=>'Aadhar no. must be 12 digits.','maxlength'=>'12','label'=>false,'required'=>'required'])?>
                        </div>
                    </div>
                </div>
          </div><br>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">धारण केलेले पद:</label>
                        <div class="col-md-7">
							<select name="designation_id" class="form-control"  style="width:100%; float: right;" required='required'>
                                <?php if($user->registration_status == 1)
                                {
                                ?>
                                <option value="<?= $designation->designation_id; ?>" selected><?= $designation->designation_name ; ?></option><?php } 
                                
                                else
                                {
                                ?>
                                 <option value="" selected>-- Select Option---</option>
                               <?php }   foreach ($designation_data as $row): ?>
                                <option value="<?= $row['designation_id']; ?>"><?= $row['designation_name']; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">सेवार्थ नंबर :</label>
                        <div class="col-md-7">
                            <?= $this->Form->text('sevarth_no', ['class' => 'form-control','label'=>false,'required'=>'required'])?>
                        </div>
                    </div>
               </div>
          </div><br>     
        <div class="row">
             <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">वर्ग :</label>
                        <div class="col-md-7">
                            
                                <select name="class_id" class="form-control"  style="width:100%; float: right;" required='required'>
                                    
                                <?php if($user->registration_status == 1)
                                {
                                ?>
                                <option value="<?= $class2->class_id; ?>" selected><?= $class2->class_name ; ?></option><?php } 
                                
                                else
                                {
                                ?>
                                 <option value="" selected>-- Select Option---</option>
                               <?php }    foreach ($class1_data as $row): ?>
                                <option value="<?= $row['class_id']; ?>"><?= $row['class_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
			<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">धर्म:</label>
                        <div class="col-md-7">
                        <select name="religion_id" class="form-control"  style="width:100%; float: right;" required='required'>
                                <?php if($user->registration_status == 1)
                                {
                                ?>
                               <option value="<?= $religion->religion_id; ?>" selected><?= $religion->religion_name ; ?></option><?php } 
                                
                                else
                                {
                                ?>
                                 <option value="" selected>-- Select Option---</option>
                               <?php }  foreach ($religion_data as $row): ?>
                                <option value="<?= $row['religion_id']; ?>"><?= $row['religion_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

          </div><br>     
        <div class="row">
			  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">संवर्ग/प्रवर्ग :</label>
                        <div class="col-md-7">
                            <select name="cast_id" class="form-control"  style="width:100%; float: right;" required='required'>
                                 
                                <?php if($user->registration_status == 1)
                                {
                                ?>
                                <option value="<?= $cast->cast_id; ?>" selected><?= $cast->cast_name ; ?></option><?php } 
                                
                                else
                                
                                {
                                ?>
                                 <option value="" selected>-- Select Option---</option>
                               <?php } foreach ($cast_data as $row): ?>
                                <option value="<?= $row['cast_id']; ?>"><?= $row['cast_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
			  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">जात :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('subcast',['class' => 'form-control','required'=>'required']) ?>
                        </div>
                    </div>
                </div>

              </div><br>
        <div class="row">
               <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">सध्याचा पत्ता:</label>
                        <div class="col-md-7">
                            <?= $this->Form->input('current_address', array('class'=>'txtArea','label'=>false,'required'=>'required'))?>
                        </div>
                    </div>
                </div>  
            <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">नियुक्तीची तारीख :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('Appointment_date',['type'=>'text','class' => 'form-control','label'=>false,'pattern'=>'\d{1,2}/\d{1,2}/\d{4}','placeholder'=>'DD/MM/YYYY','required'=>'required']) ?>
                        </div>
                    </div>
                </div>
			
            </div><br> 
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">राज्य :</label>
                        <div class="col-md-7">
                            <select name="state_id" id="state_id" class="form-control"  style="width:100%; float: right;" required='required'>
                               
                                <?php if($user->registration_status == 1)
                                {
                                ?>
                                <option value="<?= $state->state_id; ?>" selected><?= $state->state_name ; ?></option><?php } 
                                else
                                {
                                ?>
                                 <option value="" selected>-- Select Option---</option>
                               <?php }
                                 foreach ($state_data as $row): ?>
                                <option value="<?= $row['state_id']; ?>"><?= $row['state_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
			<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">कामावर रुजू होण्याची तारीख :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('joining_date',['type'=>'text','class' => 'form-control','label'=>false,'pattern'=>'\d{1,2}/\d{1,2}/\d{4}','placeholder'=>'DD/MM/YYYY','required'=>'required']) ?>
                        </div>
                    </div>
                </div>
               
                </div><br> 
        <div class="row">

           <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5">जिल्हा:</label>
                            <div class="col-md-7">
                                        
                           <?php if($user->registration_status == 1)
                            {
                            ?>
                         <select name="district_id" id="district_id" class="form-control"  style="width:100%; float: right;" required='required'>
                           <option value="<?= $district->district_id; ?>" selected><?= $district->district_name ; ?></option> </select>
                            <?php 
                            } 
                            else
                            {
                            ?>
                            <select name="district_id" id="district_id" class="form-control"  style="width:100%; float: right;" required='required'>

                            </select>
                           <?php } ?>  
                                
                        </div>
                    </div>
                </div>
			<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">सेवानिवृत्तीची तारीख:</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('retirement_date',['type'=>'text','class' => 'form-control','label'=>false,'pattern'=>'\d{1,2}/\d{1,2}/\d{4}','placeholder'=>'DD/MM/YYYY','required'=>'required']) ?>
                        </div>
                    </div>
                </div>
              
        </div><br> 
        <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">मोबाईल नंबर:</label>
                        <div class="col-md-7">
                            <?= $this->Form->text('mobile', ['class' => 'form-control','pattern'=>'[789][0-9]{9}','title'=>'Mobile no. must be 10 digits and start with 7,8,9.','maxlength'=>'10','required'=>'required'])?>
                        </div>
                    </div>
                </div> 
                 <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">ईमेल :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('username',['type'=>'email','class' => 'form-control','required'=>'required']) ?>
                        </div>
                    </div>
            </div>
            </div><br>
           <div class="row">
			 <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">मूळचा पत्ता:</label>
                        <div class="col-md-7">
                           <?= $this->Form->input('permanent_address',array('class'=>'txtArea','label'=>false,'required'=>'required')) ?>
                        </div>
                    </div>
                </div>
        
          </div><br>
		 
		  <div class="well" style="text-align:center;" > <b> वेतन </b></div>
          <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">बेसिक पे :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('basic_salary',['class' => 'form-control','id' => 'basic_salary','required'=>'required']) ?>
                        </div>
                    </div>
            </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">ग्रेड पे :</label>
                        <div class="col-md-7">
                        <?= $this->Form->text('gred_salary', ['id' => 'gred_salary','class' => 'form-control','required'=>'required'])?>
                        </div>
                    </div>
                </div>
        </div><br>
		  <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">घरभाडे भत्ता :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('room_allownce',['class' => 'form-control','id' => 'room_allownce','required'=>'required']) ?>
                        </div>
                    </div>
            </div>
                 <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">इतर पूरक भत्ते :</label>
                        <div class="col-md-7">
                        <?= $this->Form->text('other_allownce', ['class' => 'form-control','required'=>'required'])?>
                        </div>
                    </div>
                </div>
        </div><br>  
		  <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">महागाई भत्ता :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('dearness_allowance',['class' => 'form-control','required'=>'required']) ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">प्रवास भत्ता :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('travelling_allowance',['class' => 'form-control','required'=>'required']) ?>
                        </div>
                    </div>
            </div>  
              
        </div><br>
        <h2 class="modal-title" style="text-align:center; ">
    <?= $this->Form->button('जतन करा',['class' => 'btn btn-primary']) ?>
    <br>
    </h2>
    <?= $this->Form->end() ?>
    </div>
    </div>
</div>
