<table border="1" width="50%" align="center" style="background: #FDFDFD;padding: 10px;" cellpadding="10px">
	<tr>
		<td>Sno</td>
		<td>Original Image</td>
		<td>Thumbnail Image</td>
	</tr>
<?php 

foreach (glob("images/thumbs/*") as $filename) {
	$thum[] = $filename;
}
 

	$i=1;
foreach (glob("images/fullsized/*") as $key =>  $filename) {
  		$thumn= ' ';
		if(isset($thum[$key])){
			$thumn = '<a  href="'.$thum[$key].'"  target="_blank"><img src="'.$thum[$key].'" width="100" height="100"></img>View Thumbnail Image</a>';	
		
		
     echo "<tr>";

     echo '<td>'.$i++.'</td><td><a  href="'.$filename.'"  target="_blank"><img src="'.$filename.'" width="100" height="100">
     		</img>View Large Image</a>
     		</td>
     		<td>'.$thumn.'</td>';
     echo '</tr>'; 

     }
} 

foreach (glob("files/*") as $filename) {
	$files[] = $filename;
}
 
?>
 
</table>
<center><a href="upload.html">Go Back and upload more </a></center>

<p> <b>
	List of all uploaded files </b> </p>
<ul>
<?php
	foreach ($files as $key => $value) {
		echo  '<li><a href="'.$value.'">'.ltrim($value,'files/').'</a></li>';
	}

 
$pdf = 'http://localhostt/upload/files/pdf.pdf';

$imagick = new Imagick('files/pdf.pdf[0]');
$imagick->setImageFormat('jpg');
file_put_contents('files', $imagick);


		 
?>
</ul>

