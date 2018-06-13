
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
        <h2> नियंत्रक अधिकाऱ्यांची यादी  </h2>
        <div class="table-responsive" style="overflow-x:auto;">
			<?php
			if($d == 4){ ?>		
    <table class="table table-striped table-bordered table-hover " data-paging="true" data-show-toggle="true" data-filtering="true" id="myTable">
             <thead>
                 <tr>
                     <th>अ.क्र.</th>
                     <th>नियंत्रक अधिकाऱ्यांचे नाव</th>  
                     <th>प्रोफाइल संपादित करा </th>                        
                </tr>
             </thead>
             <tbody>
                 <?php
                 $sn_count = 1;
                if(!empty($data)){
					foreach ($data as $user): ?>
                <tr>
                    <td class="serial-number"><?= $sn_count; ?></td>
                    <td> <?= $this->Html->link(__($user->ename), ['action' => 'viewco', $user->e_id],['style'=>'color:black !important']) ?></td> 
					<td> <?= $this->Html->link(__('संपादित करा'), ['action' => 'editco', $user->e_id],['class'=>'btn btn-primary','data-toggle'=>'modal']) ?></td> 

                <?php $sn_count++; ?>
               <?php endforeach; }
					?>
                </tr>
            </tbody>
            </table>
			
	</div>
	
	</div>
	</div>
<?php
			}
			?>
        
   <script>
	   $(document).on( "click", '.button_click',function(e) {                    
                    var x = $(this).parents('td').find('.leaveid').val();
                     $('.live_Id').val(x);         
                });       
     </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	jQuery(function(){        
		$(".table").footable();
	});
</script>
