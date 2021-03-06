
 <style>
      p{
        display: none;
    }
    
     @media only screen and (max-width: 600px) {
    h3 {
        display: none;
    }
    p {
        display: block;
    }
}
     .well{
		 border:2px solid silver;
         background-color: #FFF;
	 }
     
    #abc{
        color:#fff;
    }
    .heading{
/*         background-image: url('/leavesystem/img/sky-blue.jpg');*/
         background-size: 100% 100%;
         background-color: #FFF;
         margin-top: -20px;
    }
    .navbar{
        background-color: #563d7c; 
    }
    body{
        background-color: #E3ECFB;
        }
    #logo{
        background-image: url('/leavesystem/img/ganesh1.png');
        background-size: 100% 100%;
        height: 100px;
    }
/*
    #name{
        background-image: url('/leavesystem/img/name.jpg');
        background-size: 100% 100%;
        height: 80px;
    }
*/
    #logo1{
        background-image: url('/leavesystem/img/emblem1.png');
        background-size: 100% 100%;
        height: 100px;
    }
    #mainImg{
        background-image: url('/leavesystem/img/first.jpg');
        background-size: 100% 100%;
    }
</style>


  
    <div class="row">
    <?= $this->Form->create($user) ?>
<!-- ['type' => 'file']-->
      <div class="col-md-10 col-md-offset-1">
      <div class="well">
          <strong class="showprofile"><h2 class="modal-title" style="text-align:center; ">नोंदणी अर्ज</h2></strong><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">स्वतःचे पूर्ण नाव:</label>
                        <div class="col-md-7">
                            <?= $this->Form->text('ename',['class'=>'form-control','pattern'=>'[a-zA-Z\s]+','title'=>' Name should be in letters.' , 'required'=>'required'])?>
                        </div>
                    </div>
                </div>
             <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">मोबाईल नंबर:</label>
                        <div class="col-md-7">
                            <?= $this->Form->text('mobile', ['class' => 'form-control','pattern'=>'[789][0-9]{9}','title'=>'Mobile no. must be 10 digits and start with 7,8,9.','maxlength'=>'10','required'=>'required'])?>
                        </div>
                    </div>
                </div> 
		    </div><br>

        <div class="row">

			 <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">वापरकर्तानाव :</label>
                        <div class="col-md-7">
                           <?= $this->Form->text('uname',['class' => 'form-control','required'=>'required']) ?>
                        </div>
                    </div>
            	</div>
				<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">Role</label>
                        <div class="col-md-7"> 
                           <select name="role_id" class="form-control"  style="width:100%; float: right;" required='required'>
							   <option value="<?= $role->role_id; ?>" selected><?= $role->user_role; ?></option> 
                                 
                               <?php    foreach ($role_name as $row): ?>
                                <option value="<?= $row['role_id']; ?>"><?= $row['user_role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
            </div>
          </div><br> 
  
		  <div class="row">
			          <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">पासवर्ड :</label>
                        <div class="col-md-7">
                        <?= $this->Form->text('password', ['type'=>'password','class' => 'form-control','required'=>'required','maxlength'=>'10'])?>
                        </div>
                    </div>
                </div>
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
          
            </div><br> 
            <div class="row">
		
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5">Select CO:</label>
                        <div class="col-md-7">
                           <select name="parent_id" class="form-control"  style="width:100%; float: right;" required='required'>
							   <option value="<?= $co_role->e_id; ?>" selected><?= $co_role->ename; ?></option> 
                                 
                               <?php foreach ($data as $row1): ?>
                                <option value="<?= $row1['e_id']; ?>"><?= $row1['ename']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>     
        </div><br>
        <h2 class="modal-title" style="text-align:center; ">
      <?= $this->Form->button('जतन करा',['class' => 'btn btn-primary']) ?>
     
    </h2>
    <?= $this->Form->end() ?>
    </div>
    </div>
</div>
