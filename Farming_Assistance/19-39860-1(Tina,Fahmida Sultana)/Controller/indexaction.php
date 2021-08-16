<? php
$target =
$filename = $ $_FILES['attachment']['name'];
$temp = $_FILES ['attachment']['tmp_name'];

$res =move_uploaded_file($temp,$target);

var_dump($res);

if ($res) {
	echo "uploaded successfully";
} 
else {
echo "Error while uploading";
}
?>