<?php 
// echo "<pre>";print_r($query);exit; 
?>
<script>
	$(document).ready(function() {
    $('#datatable').DataTable({
        "order": [[ 1, "desc" ]]
    } );
} );

</script>
<h2>Display Data</h2>
        <div class="divider"></div>
        <br/>
	<?php
	echo "<table id='datatable' class='display' cellspacing='0' width='100%'>";
	$head="<thead>
        <tr>
            <th>No</th>
        	<th>ID</th>
            <th>Name</th>
            <th>Email</th>
			<th>Created</th>
			<th>Updated</th>
            <th>Action</th>
        </tr>
    </thead>";
	
	$foot="<tfoot>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
			<th>Created</th>
			<th>Updated</th>
            <th>Action</th>
        </tr>
    </tfoot>";
	echo $head;
	echo $foot;
	echo "<tbody>";
 $k = 1;   
 foreach($query as $row)
 {
 		echo "<tr class='row_".$row->id."'>";
		echo "<td align='center'>".$k++."</td>";
 		echo "<td>";
 		echo $row->id;
		echo "</td><td>";
	 	echo $row->name;
	 	echo "</td>";	
	 	echo "</td><td>";
	 	echo $row->email;
	 	echo "</td>";
	 	echo "<td align='center'>".date("Y-m-d H:i:s",strtotime($row->created_at))."</td>";
	 	echo "<td align='center'>".date("Y-m-d H:i:s",strtotime($row->updated_at))."</td>";
	 	echo "<td>";
	 	echo "<a href='".base_url('home/editstudent').'/'.$row->id."'>Edit</a> | <a style='cursor:pointer;' onclick='return deleteAjax(".$row->id.")' class='deletedRecord' rel='".$row->id."'>Delete</a>";
	 	echo "</tr>";
 }
 echo "</tbody>";
 echo "</table>";
?>

<script>

function deleteAjax(id){
	
	r = confirm('Are you sure delete ?');
	if(r){
		
		$.ajax({
			
		  	method: "POST",
		 	url: "<?php echo base_url('home/deleteAjax');?>",
		  	data: "id="+id,
		  	
		})	
	   .done(function( msg ) {
		   
			
			msg = $.parseJSON(msg);

		   if(msg.code){
			   
			   $("tr.row_"+id).remove();
			   alert(msg.message);
		   }
		   else{
			  alert(msg.message);
		   }

	   });
		   
	}
	else{
		return false;
	}	
}


</script>





