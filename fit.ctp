
<style>
	@media print {
  .btn {
    display: none;
  }
        
         #google_translate_element{
        display: none;
    }
}
	</style>

<?php 
if($data == 2){?>
	
<?php } ?>
 &nbsp;&nbsp;  
<?= $this->Html->link(__('Back'),['controller' => 'LeavesApplications' ,'action' => 'leavepermission'],['class' => 'btn btn-primary '],['onclick'=>'window.print()']); ?>
<br>
<div class="well">
	<br>
	<pre>
	<h4><b><center>दवाखान्याची प्रमाणपत्रे</center></b></h4>
	<img src="/leavesystem/medicalfiles/<?= $medfile1;?> " alt="medfile"  height="450px" width="980px"/>

    <?= h(ucfirst($leavesApplication->medfile1));?>
 
</pre>
</div> 

