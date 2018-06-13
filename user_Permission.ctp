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
<div class="container">
       <div class="well">
        <h2 style="text-align:center">Permission </h2>
        <table class="table table-bordered" data-paging="true" data-filtering="true" data-show-toggle="true" >
            <thead>

                
                 <tr>
					<th>अ.क्र.</th>
					<th>अर्जदाराचे नाव</th>
	<!--                <th data-breakpoints="xs sm">अर्जदाराचे पदनाव</th>-->
					<th>परवानगी देणे</th><th>परवानगी देणे</th> 
                </tr>
            </thead>

           <tbody>
               <?php
               $sn_count = 1;
			  
               if(!empty($reg_status)){
				   foreach ($reg_status as $regsts)
			   {
                ?>
            <tr>
                <td class="serial-number"><?= $sn_count; ?></td>
				<?php if($regsts['role_id'] == 1){
					?>
				<td><?= $this->Html->link(__($regsts->ename), ['action' => 'viewprofile', $regsts->e_id],['style'=>'color:black !important']) ?></td>
				<td>	
				<?php }else{
					
				?>
                <td><?= $this->Html->link(__($regsts->ename), ['action' => 'viewco', $regsts->e_id],['style'=>'color:black !important']) ?></td>
				<td>
					<?php } ?>
                <div class="col-md-8">
				<div class="col-md-6">
				<?php echo $this->Html->link('मंजूर',['controller' => 'Users','action' => 'registrationstatus', $regsts->e_id],['class'=>'btn btn-success'],['escape' => false]) ?>
               </div>
				<div class="col-md-6 ">
			
                    
<!--                <button type="button" class="btn btn-info button_click" data-toggle="modal" data-target="#myModal2">नामंजूर</button>    -->
                    
                    
				</div>
               </div>
                
				</td>
				<td><?= $this->Form->create($regsts,['url'=>['controller' => 'Users' ,'action' => 'registatus']]) ?>
					
					 <?php echo $this->Form->text('e_id', ['class'=>'eid','value'=>$regsts->e_id,'type' =>'hidden']); ?>
					
				<button type="button" class="btn btn-info button_click" data-toggle="modal" data-target="#myModal2">नामंजूर</button>
					
				<?= $this->Form->end() ?>
				</td>
               </tr>
                 <?php $sn_count++; ?>
                  <?php
				   }
			   }
              ?>	

               </tbody>  
            </table>
           
           <!-- Modal start -->
             <div id="myModal2" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">नामंजुरीचे कारण लिहा.</h4>
                  </div>
                    <?= $this->Form->create($regsts,['url'=>['controller' => 'Users' ,'action' => 'registatus']]) ?>
                  <div class="modal-body">
                      
					 <input type="hidden" id="leaveId" name="e_id">
					<?php echo $this->Form->text('rejection_reason', ['type'=>'textarea','class'=>'form-control namanjur','required'=>'required']); ?>
                  
                  </div>
                  <div class="modal-footer">
                      <?= $this->Form->button(__('नामंजूर'), ['class'=>'btn btn-primary namanjur2']); ?>
				
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                    	
				<?= $this->Form->end() ?>
                </div>

              </div>
            </div>
        <!-- Modal End  -->
           
        </div>
        </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	jQuery(function(){
        
		$(".table").footable();
	});
	
	
</script>
<script>

    $(document).on( "click", '.button_click',function(e) { 
		           
                    var x = $(this).parents('td').find('.eid').val();
                     $('#leaveId').val(x);
						$('.namanjur').val('');                  
                });  

     </script>
