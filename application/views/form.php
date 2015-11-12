<h2>Entry Form</h2>
<div class="divider"></div>
<br/>
       
<?php
if (isset($data)) {	} 
else {
	$data=0;
}

echo form_open('',array('name'=>'frm','id'=>'frmInsert'));
echo "<table>";

echo form_hidden('id', set_value('id', $data['id']));
echo form_hidden('created_at', set_value('created_at', $data['created_at']));

echo "<tr class='error'>";
echo "<td colspan=2>";
//echo validation_errors();
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Name <span style='color:red;'>(*)</span>:";
echo "</td>";
echo "<td>";
echo form_input(array('name'=>'name','class'=>'name'), set_value('name', $data['name']));
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Address:";
echo "</td>";
echo "<td>";
echo form_input('address', set_value('address', $data['address']));
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Phone:";
echo "</td>";
echo "<td>";
echo form_input('phone',set_value('phone', $data['phone']));
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Email <span style='color:red;'>(*)</span>:";
echo "</td>";
echo "<td>";
echo form_input('email', set_value('email',$data['email']));
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";

echo "</td>";
echo "<td>";

// echo form_submit('submit','save');
echo '<input type="button" value="save" name="submit">';

echo "</td>";

echo "</tr>";

echo "</table>";
?>
<script>

$(document).ready(function(){
	
	$("input[name='submit']").click(function(){
		
		var dulieu = $("#frmInsert").serialize();
		
		$.ajax({
			
		  	method: "POST",
		 	url: "<?php echo base_url('home/insertAjax');?>",
		  	data: dulieu
		  	
		})	
	   .done(function( msg ) {
			
		   msg = $.parseJSON(msg);

		   if(msg.code){
			   
			   $("tr.error td").html(msg.message);
			   $("#frmInsert").trigger("reset");
		   }
		   else{
			   $("tr.error td").html(msg.message);
		   }
		  
	   });
	   		  
	});
});

</script>
