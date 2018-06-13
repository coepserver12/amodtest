
<style>
    body{
        background-color: #dad2d2;
    }
</style>
<style>
	.pagination>li>a, .pagination>li>span{
		    color: black !important;
	}
	
</style>
<div class="container container2">
    <div class="well">
        <h2> सर्व कर्मचाऱ्यांची यादी </h2>
        <div class="table-responsive" style="overflow-x:auto;">
			<?php
			if($d == 5 || $d == 3){ ?>
         <table class="table table-striped table-bordered table-hover" data-paging="true" data-show-toggle="true" data-filtering="true"  id="myTable">
             <thead>
                 <tr>
                     <th >अ.क्र.</th>
                     <th>कर्मचाऱ्याचे नाव</th>
                     <th data-breakpoints="xs sm">चालू वर्षातील  <br/> घेतलेल्या रजा </th>
                     <th data-breakpoints="xs sm">आतापर्यंतच्या <br/> घेतलेल्या रजा</th>
			     </tr>
             </thead>
             <tbody>
                 <?php
                 $sn_count = 1;
                
				    if(!empty($data)){
                  foreach ($data as $user): ?>
                <tr>
                    <td class="serial-number"><?= $sn_count; ?></td>
                    <td> <?= $this->Html->link(__($user->ename), ['action' => 'viewprofile', $user->e_id],['style'=>'color:black !important']) ?></td> 
					<td> <?= $this->Html->link(__('चालू वर्षातील रजा '), ['action' => 'usersyl', $user->e_id],['class'=>'btn btn-primary '],['style'=>'color:black !important']) ?></td>
					<td> <?= $this->Html->link(__('आतापर्यंतच्या रजा'), ['action' => 'userstotalyl', $user->e_id],['class'=>'btn btn-info '],['style'=>'color:black !important']) ?></td>
                    
                <?php $sn_count++; ?>
               <?php endforeach; } ?>
                </tr>
            </tbody>
            </table>
			<?php }
			else{
				
			?>
     <ul class="nav nav-tabs">
  		<li class=" col-md-offset-5" ><a data-toggle="tab" href="#ao1">सध्याचे कर्मचारी </a></li>
  		<li><a data-toggle="tab" href="#ao2">ब्लॉक कर्मचारी </a></li>  		
    </ul>
	
<div class="tab-content">
	 <div id="ao1" class="tab-pane fade in active">
			     <table class="table table-striped table-bordered table-hover " data-paging="true" data-show-toggle="true"  data-filtering="true" id="myTable">
             <thead>
                 <tr>
                     <th>अ.क्र.</th>
                     <th>कर्मचाऱ्याचे नाव</th>
                     <th>चालू वर्षातील <br/> घेतलेल्या रजा </th>
                     <th>आतापर्यंतच्या <br/> घेतलेल्या रजा</th>
                     <th>परमिशन रद्द  करा </th>
                 	 <th>रजा वाटप करा </th>
                                       
                </tr>
             </thead>
             <tbody>
                 <?php
                 $sn_count = 1;
                if(!empty($data)){
					foreach ($data as $user): ?>
                <tr>
                    <td class="serial-number"><?= $sn_count; ?></td>
                    <td> <?= $this->Html->link(__($user->ename), ['action' => 'viewprofile', $user->e_id],['style'=>'color:black !important']) ?></td> 
					<td> <?= $this->Html->link(__('चालू वर्षातील रजा '), ['action' => 'usersyl', $user->e_id],['class'=>'btn btn-info ']) ?></td>
					<td> <?= $this->Html->link(__('आतापर्यंतच्या रजा'), ['action' => 'userstotalyl', $user->e_id],['class'=>'btn btn-info ']) ?></td>
                   
							<td>
					<?= $this->Form->create($user,['url'=>['controller' => 'Users' ,'action' => 'blockuser',$user->e_id]]) ?>
					
					 <?php echo $this->Form->text('e_id', ['class'=>'leaveid','value'=>$user->e_id,'type' =>'hidden']); ?>
					
					<button type="button" class="btn btn-danger button_click" data-toggle="modal" data-target="#myModal4">परमिशन रद्द करा </button>
					
				<?= $this->Form->end() ?></td>
	
					<td>
                    <?= $this->Html->link(__('रजा वाटप करा'), ['controller' => 'Users' ,'action' => 'addleave', $user->e_id],['class'=>'btn btn-primary','data-toggle'=>'modal']) ?>
					</td>
<!--
					<td>
                    <?= $this->Html->link(__('रजा संपादित करा'), ['controller' => 'Users' ,'action' => 'addleave', $user->e_id],['class'=>'btn btn-primary','data-toggle'=>'modal']) ?>
					</td>
-->
                <?php $sn_count++; ?>
               <?php endforeach; }
					?>
                </tr>
            </tbody>
            </table>
			 <!-- Modal start -->
             <div id="myModal4" class="modal fade" role="dialog"  data-keyboard="false" data-backdrop="static">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">परवानगी रद्द करण्याचे कारण लिहा.</h4>
                  </div>
                   <?= $this->Form->create($user,['url'=>['controller' => 'Users' ,'action' => 'blockuser']]) ?>
                  <div class="modal-body">
                    	 <input type="hidden" id="leaveId" name="e_id">
				<?php echo $this->Form->text('block_user_reason', ['type'=>'textarea','class'=>'form-control namanjur','required'=>'required']); ?>
                  	
                  </div>
                  <div class="modal-footer">
				
                      <?= $this->Form->button(__('परमिशन रद्द करा'), ['class'=>'btn btn-Danger']); ?>
				
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                    	
				<?= $this->Form->end() ?>
                </div>

              </div>
            </div>
        <!-- Modal End  -->
	</div>
			
	 <div id="ao2" class="tab-pane">
			              <table class="table table-striped table-bordered table-hover" data-paging="true" data-filtering="true"  data-show-toggle="true" id="myTable1">

             <thead>
                 <tr>
                     <th>अ.क्र.</th>
                     <th>कर्मचाऱ्याचे नाव</th>
                     <th>चालू वर्षातील <br/> घेतलेल्या रजा </th>
                     <th>आतापर्यंतच्या <br/> घेतलेल्या रजा</th>
                      <th>परमिशन रद्द करा </th>
                 	 
                                       
                </tr>
             </thead>
             <tbody>
                 <?php
                 $sn_count = 1;
                
				  if(!empty($data1)){
                  foreach ($data1 as $user): ?>
                <tr>
                    <td class="serial-number"><?= $sn_count; ?></td>
                    <td> <?= $this->Html->link(__($user->ename), ['action' => 'viewprofile', $user->e_id],['style'=>'color:black !important']) ?></td> 
					<td> <?= $this->Html->link(__('चालू वर्षातील रजा '), ['action' => 'usersyl', $user->e_id],['class'=>'btn btn-info ']) ?></td>
					<td> <?= $this->Html->link(__('आतापर्यंतच्या रजा'), ['action' => 'userstotalyl', $user->e_id],['class'=>'btn btn-info ']) ?></td>
                    <td><?= $this->Html->link('unblock ',['action' => 'unblockuser', $user->e_id],['class'=>'btn btn-Danger'],['escape' => false]) ?></td>
   
					
                <?php $sn_count++; ?>
               <?php endforeach; } ?>
                </tr>
            </tbody>
            </table>
			<?php
			}
			?>
	</div>
	</div>
	</div>
        </div>
    </div>
 <script>

    $(document).on( "click", '.button_click',function(e) { 
		           
                    var x = $(this).parents('td').find('.leaveid').val();
                     $('#leaveId').val(x);
						$('.namanjur').val('');                  
                });  

     </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	jQuery(function(){        
		$(".table").footable();
	});
</script>
<script>
    $(document).ready(function(){

	 $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            console.log(activeTab);

            if (activeTab) {
               $('a[href="' + activeTab + '"]').tab('show');
            }
        });	
	      
	
</script>