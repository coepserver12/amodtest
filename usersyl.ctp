<style>
    body{
        background-color: #dad2d2;
    }
h2{
		text-align: center;
	}
	.pagination>li>a, .pagination>li>span{
		    color: black !important;
	}
</style>
<script>
$(document).ready(function(){
    $("#namelist1").change(function(){
	searchleave1 = $("#namelist1").val();
	eid = $("#eid").val();
    $.ajax({
		  url: '/leavesystem/Users/searchleaveuyl/',
		data: { leavetypeid : searchleave1, userid: eid },
		  success: function( data ) {
			  $('#OLdTbale').css('display','none');
              $('#district_id').html(data);
			   var rowCount = $('#district_id').find('.table tr').length;
			  
			     if(rowCount < 2){
					 $('#district_id').html("<h2>No Record Found </h2>");
				 }
		  },
		  error: function( req, status, err ) {
			console.log( 'something went wrong', status, err );
		  }
		});
	});
	
	
	
});
</script>
<div class="container">
    <div class="well">
             <h2> चालू वर्षातील घेतलेल्या रजा </h2>
             <span class="aa">नैमित्तिक / किरकोळ रजा:</span>
             <span class="badge shownotification"><?= h($user->cl_taken) ?></span>
             <span class="aa">अर्जित रजा:</span>
             <span class="badge shownotification"><?= h($user->el_taken) ?></span>
             <span class="aa">वैद्यकीय रजा:</span>
             <span class="badge shownotification"><?= h($user->ml_taken) ?></span>
             <br/><br/>
		     <div class="col-md-12 col-lg-12 well">
			 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			    अर्जदाराचे नाव :  <strong><?= h($user->ename) ?></strong>
			</div>
				 <div class="col-xs-10 col-sm-6 col-md-4 col-lg-4 pull-right">
			 		 <?php echo $this->Form->text('e_id', [ 'id'=>'eid','type'=>'hidden','value' => $user->e_id]); ?>
                                 <select name="namelist1" id="namelist1" class="form-control" style="text-align:center;" >
									 <option selected="selected" disabled ="disabled"> --- रजेचे स्वरूप निवडा ---</option>
                                            <?php foreach ($leave_data as $row): ?>
									 
                                            <option value="<?= $row['leaves_type_id']; ?>"><?= $row['leaves_name']; ?></option>
                                            <?php endforeach; 
                                     ?></select>
                          
			</div>
		</div>
        <table  class="table table-bordered" id="OLdTbale" data-paging="true" data-show-toggle="true" >
             <thead>

                 <tr>
                     <th>अ.क्र.</th>
                     <th>अर्ज केलेली तारीख</th>
                     <th>रजेचे स्वरूप</th>
                     <th>रजेचा कालावधी</th>
					  <th>रजेचे कारण </th>
                     <th>रजेचा कालावधी या तारखे पासून</th>
                     <th>रजेचा कालावधी या तारखे पर्यंत</th>
					
                     <th>सुट्टीची परवानगी तारीख</th>
                </tr>
             </thead>
            <tbody>                
                <?php
			
                 $sn_count = 1;
                 ?>
           <?php
				 if(!empty($yearly_leave)){
             foreach ($yearly_leave as $yl): 
					$start=$yl->leave_application_date;
					$old_date = strtotime($start);
					$date1 = date('d/m/Y', $old_date);  
					 
					$startdate=$yl->leave_startdate;
					$start_date = strtotime($startdate);
					$startdate1 = date('d/m/Y', $start_date);  
					 
					$enddate=$yl->leave_enddate;
					$end_date = strtotime($enddate);
					$enddate1 = date('d/m/Y', $end_date); 
					 
					$permission_date=$yl->leave_permission_date;
					$permission_date = strtotime($permission_date);
					$permissiondate1 = date('d/m/Y', $permission_date);  
					 
					 
				?>
				
                 <tr>
                     <td><?= $sn_count;?></td>
                     <td><?php echo $date1;?></td>
                     <td><?= $yl->LeavesMaster['leaves_name']  ?></td>
                     <td><?= $yl->leave_days ?></td>
					 <td><?= $yl->LeaveReasonMaster['reason_name'] ?></td>
                     <td><?php echo $startdate1; ?></td>
					 <?php if($yl->half_day == 'मध्यान्हपूर्व' || $yl->half_day == 'मध्यानहोत्तर' )
				{ ?>
                <td><?php echo $startdate1; ?></td>
				<?php }else{
					
					   ?>
               <td><?php echo $enddate1; ?></td>
                 <?php } ?>  
                     <td><?php echo $permissiondate1; ?></td>
                 </tr>
                 <?php $sn_count++; ?>
               <?php endforeach; 
				 }
               ?>
                   
             </tbody>
			
         </table>
		    <div id="district_id"></div>
			</div>
        </div>
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	jQuery(function(){        
		$(".table").footable();
	});
</script>
