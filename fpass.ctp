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
     
     .well{
         border: 2px solid silver;
     }
</style>

<div class="container" style="margin-top:120px;">
    <?= $this->Form->create() ?>
      <div class="col-md-10 col-md-offset-1">
      <div class="well">
          <strong class="showprofile"><h2 class="modal-title" style="text-align:center; ">Change Password</h2></strong><br>
        
        <div class="row ">
         <div class=" col-md-8 col-md-offset-2">
			 <div class="col-md-12">
                    <div class="form-group">
                      <label class="col-md-5">Mobile No:</label>
                        <div class="col-md-7">
                        <?= $this->Form->text('mobile', ['class' => 'form-control','pattern'=>'[789][0-9]{9}','title'=>'Mobile no. must be 10 digits and start with 7,8,9.','maxlength'=>'10','required'=>'required','id' => 'mobileid'])?>
                        </div>
                    </div>
                </div><br><br>
               <div class="col-md-12">
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Select Role</label>
                            <div class="col-md-7">
                          <select name="role_id" class="form-control" id="role_Id" style="width:100%; float: right;" required>
                              <option value="" >--Select Role--</option>
                                <?php foreach ($role_name as $row): ?>
                                <option value="<?= $row['role_id']; ?>"><?= $row['user_role']; ?></option>
                                <?php endforeach; ?>
                            </select> 
                          </div>
                        </div>
                   </div>
			 <?php $pass =  rand(100000,999999)?>
          	<div class="col-md-12">
                    <div class="form-group">
<!--                      <label class="col-md-5">Password:</label>-->
                        <div class="col-md-7">
                        <?= $this->Form->text('newpassword', ['type'=>'hidden','class' => 'form-control','required'=>'required','id'=>'password','value'=> $pass ])?>
                        </div>
                    </div>
                </div>

             <br/> <br/>
             <span id="worng" class="col-md-offset-5" style="margin-top:10px;display:none;color:red;postion:absolute;" > Password Not match </span>
              <span id="correct" class="col-md-offset-5" style="margin-top:10px;display:none;color:green;postion:absolute;"> Congrats password matched</span><br/>
             
          </div>
          </div><br> 
  
	
            
        <h2 class="modal-title" style="text-align:center; ">
      <?= $this->Form->button('Change Password',['class' => 'btn btn-primary']) ?>

			
			<?= $this->html->link('Cancel',['controller' => 'Users', 'action' => 'login'],['class'=>'btn btn-primary']) ?>
	
    </h2>
    <?= $this->Form->end() ?>
    </div>
    </div>
</div>
