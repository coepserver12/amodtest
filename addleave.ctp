
<style>
    body{
        background-color: #dad2d2;
    }
    .error{
        color:red;
    }
</style>
<script>
    $(function(){
            $('#argitraja-error-message').hide();
            $('#naimetickraja-error-message').hide();
            $('#medicalraja-error-message').hide(); 
           
            var error_argitraja = false; 
            var error_naimetickraja = false; 
            var error_medicalraja = false; 
          
            
             $("#argitraja").focusout(function(){
                 check_argitraja();
              });
              $("#naimetickraja").focusout(function(){
                 check_naimetickraja();
              });
              $("#medicalraja").focusout(function(){
                 check_medicalraja();
              });
             
                  function check_argitraja(){
                     
                      var argitraja = $("#argitraja").val();
                      var datacount = $("#earned_levesh").val();
					  var TotalCount = +argitraja + +datacount;
					  
					  
                    	
                      if(argitraja == ""){
                       $("#argitraja-error-message").html(" This field is required.");
                        $("#argitraja-error-message").show();
                         error_argitraja = true;
						   }
                          
//                     else if(isNaN(argitraja)){
//                            $("#argitraja-error-message").html(" charecter is not allowed. "); 
//                          $("#argitraja-error-message").show();
//                         error_argitraja = true;
//                         }
						  else if( TotalCount > 300){
                       $("#argitraja-error-message").html("your earned leaves limit exceeds " +TotalCount)
                        $("#argitraja-error-message").show();
                        
                         error_argitraja = true;
                      }else{
                        $("#argitraja-error-message").hide();  
                      }
                  }
                  
                function check_naimetickraja(){
                 
                    var naimetickraja = $("#naimetickraja").val();
                  
                    
                    if(naimetickraja == ""){
                     $("#naimetickraja-error-message").html(" This field is required. ");
                    $("#naimetickraja-error-message").show();
                         error_naimetickraja = true;
                    }else if(isNaN(naimetickraja)){
                             $("#naimetickraja-error-message").html(" Only Charecter value are Allowed. ");
                    $("#naimetickraja-error-message").show();
                         error_naimetickraja = true;
                             }else{
                    $("#naimetickraja-error-message").hide();
                    }
                }
        
                function check_medicalraja(){
                    var medicalraja = $("#medicalraja").val();
                    
                    if(medicalraja == ""){
                        $("#medicalraja-error-message").html(" This field is required. ");
                    $("#medicalraja-error-message").show();
                         error_medicalraja = true;
                    }else if(isNaN(medicalraja)){
                             $("#medicalraja-error-message").html(" Only Charecter value are Allowed. ");
                    $("#medicalraja-error-message").show();
                         error_medicalraja = true;
                             }else{
                         $("#medicalraja-error-message").hide();
                    }
                        
                }
                 
              
                  $("#FirstTabform").click(function(){
                          error_argitraja = false; 
                          error_naimetickraja = false; 
                          error_medicalraja = false;
                      
                         
                          check_argitraja();                          
                          check_naimetickraja();
                          check_medicalraja();
                         
                      
     if(error_argitraja == false && error_naimetickraja == false &&  error_medicalraja == false ){
                          
                          
                          return true;
                          
                      }else{    
						  return false;
                          alert("false box exicuted ");
                        
                      }
                          
                      
                  });
                  
             });
</script>
<div class="contanaiter">
    <div class="col-md-10 col-md-offset-1">
        <div class="well">
            <?= $this->Form->create($user) ?>
            <h4 style="text-align:center;"> रजा वाटप करा </h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>अर्जित रजा</th>
                        <th>नैमित्तिक/किरकोळ रजा </th>
                        <th>वैद्यकीय रजा</th>
                    </tr>
				</thead>
				<?= $this->Html->link(__('मागे'), ['controller' => 'Users' ,'action' => 'employeelist'],['class'=>'btn btn-primary pull-right']) ?><br><br>
				
                <tbody>
                   <tr>
                        <?php echo $this->Form->text('e_id', ['type'=>'hidden','value' => $user_data->e_id]);?>  
						<?php echo $this->Form->text('earned_leaves', ['type'=>'hidden','id'=>'earned_levesh','value' => $user_data->earned_leaves]);?>  
                        <?php if($user_data->earned_leaves<300){
							?>
                        <td>
							 <span id="msg">शिल्लक रजा <?php echo $user_data->earned_leaves; ?>  </span>
                            <?= $this->Form->text('earned_leaves',['class' => 'form-control','id'=>'argitraja'])?>
                            <span class="error" id="argitraja-error-message"></span>
                            
                        </td>
						<?php }else{
	
						?>
						  <td>
							  <span id="msg">शिल्लक रजा <?php echo $user_data->earned_leaves; ?>  </span>
                            <?= $this->Form->text('earned',['class' => 'form-control','id'=>'argitraja1','readonly'=>'readonly','value' =>'0'])?>
                            <span class="error" id="argitraja-error-message"></span>
                            
                        </td>
						<?php
                          }
						?>
                        <td>
						  <span id="msg"> <span id="msg">शिल्लक रजा <?php echo $user_data->casual_leaves; ?>  </span>  </span>
                            <?= $this->Form->text('casual_leaves', ['class' => 'form-control','id'=>'naimetickraja'])?>
                             <span class="error" id="naimetickraja-error-message"></span>
                        </td>
                        <td>
							 <span id="msg">शिल्लक रजा <?php echo $user_data->medical_leaves; ?>  </span>
                            <?= $this->Form->text('medical_leaves', ['class' => 'form-control','id'=>'medicalraja',])?>
                            <span class="error" id="medicalraja-error-message"></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <span style="float:right">  
<!--                <?= $this->Form->button('जतन करा',['class' => 'btn btn-primary','id'=>'FirstTabform']) ?>-->
                    <input type="submit" value="जतन करा" id="FirstTabform" class="btn btn-primary"/>
                </span>
               <?= $this->Form->end() ?><br/>
        </div>
    </div>
</div>