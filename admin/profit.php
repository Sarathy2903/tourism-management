<?php 
extract($_POST);
if(isset($save))
{
	if($sp>$cp)
	{
	$p=$sp-$cp;
	$pp=($p*100)/$cp;
	$res= "Profit=".$p;
	$res.= ", Profit % =".$pp."";
	}
	else
	{
	$l=$cp-$sp;
	$lp=($l*100)/$cp;
	$res= "Loss=".$l;
	$res.= ", Loss % =".$lp."";
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profit and Loss</title>
		
	</head>
	<body>
		<form method="post">
		<table border="2" align="center" width="500" height="500">
			<tr>
				<th>Your Output</th>
				<th><textarea readonly="readonly" disabled="disabled"><?php echo @$res;?></textarea></th>
			</tr> 
			<tr>
				<th>Enter your Cost Price</th>
				<th><input type="number" name="cp" value="<?php  echo @$cp;?>"/></th>
			</tr> 
			<tr>
				<th>Enter your Selling Price</th>
				<th><input type="number" name="sp" value="<?php  echo @$sp;?>"/></th>
			</tr>
			<tr>
				
				<th colspan="7">
				<input type="submit" 
				name="save" value="Check"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>