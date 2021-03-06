<?php
session_start();
include("../functions.inc.php");

if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) {
if (validate_admin($_SESSION['helpdesk_user_id'])) {
   include("../inc/head.inc.php");
   include("../inc/navbar.inc.php");
   
  

?>
<style>
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
padding: 3px;
}
</style>


<div class="container">
<div class="page-header" style="margin-top: -15px;">
<div class="row">
         <div class="col-md-6"> <h3><i class="fa fa-sitemap"></i> <?=lang('DEPS_title');?></h3></div><div class="col-md-6"> 
         
         <h4> <div class="input-group">
      <input type="text" class="form-control input-sm ui-autocomplete-input" id="deps_text" placeholder="<?=lang('DEPS_name');?>" autocomplete="off">
      <span class="input-group-btn">
        <button id="deps_add" class="btn btn-default btn-sm" type="submit"><?=lang('DEPS_add');?></button>
      </span>
    </div></h4></div>
         
</div>
 </div>
        

<div class="row" id="content_deps">

      
      
      
<?php 
	
		$results = mysql_query("select id, name from deps where id!='0';");
	
	
	
	
	
?>      
      
      
      
<table class="table table-bordered table-hover" style=" font-size: 14px; " id="">
        <thead>
          <tr>
          	<th><center>ID</center></th>
            <th><center><?=lang('DEPS_n');?></center></th>
            <th><center><?=lang('DEPS_action');?></center></th>
          </tr>
        </thead>
		<tbody>		
		<?php while ($row = mysql_fetch_assoc($results)) {?>
		<tr id="tr_<?=$row['id'];?>">
		
		
		<td><small><center><?=$row['id'];?></center></small></td>
		<td><small><?=$row['name'];?></small></td>
<td><small><center><button id="deps_del" type="button" class="btn btn-danger btn-xs" value="<?=$row['id'];?>">del</button></center></small></td>
		</tr>
				<?php } ?>
		
		
			
		</tbody>
</table>
      <br>
      <?php
      
       ?>
     
      
      
</div>
      
      
      
      
<br>
</div>
<?php
 include("../inc/footer.inc.php");
?>

<?php
	}
	}
else {
    include '../auth.php';
}
?>