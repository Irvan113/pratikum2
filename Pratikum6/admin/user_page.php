<!DOCTYPE html >
< html >
< head >
< title > User Data </ title >
</ head >
< body >
<h3>User Data</h3>
< table width ="720" border="1" cellpadding ="5" cellspacing ="0">
<p><a href="user_tambah.php">+Tambah User</a></p>
<tr>
< th width ="30"> No. </ th >
< th width ="30"> Username </ th >
< th width ="30"> Password </ th >
< th width ="30"> Full Name </ th >
< th width ="30"> E-Mail </ th >
<th width = '150'>Kelola</th>
</tr>
<? php
include " config.php ";
$ sql = "SELECT user_name , user_password , user_fullname ,
user_email FROM user ORDER BY user_fullname ";
$result = mysqli_query ($ config , $ sql );
$ no = 1;
while ($data = mysqli_fetch_array ($result)){
?>
< tr >
< td ><? php echo $ no ; ?></ td >
< td ><? php echo $data[ ' user_name ' ] ; ?></ earlier >
< td ><? php echo $data[ ' user_password ' ] ; ?></ earlier
>
< td ><? php echo $data[ ' user_fullname ' ] ; ?></ earlier
>
< td ><? php echo $data[ ' user_email ' ] ; ?></ earlier >
<td align ="center">
    <a href="user_edit.php?user_nama=<?php echo 
    $data['user_nama'];?>">Edit</a> |
    <a href="user_hapus.php?user_nama=<?php echo 
    $data['user_nama'];?>">Hapus</a> 
</td>
</ tr >
<? php
$ no ++;
}
echo "</table> " ;
?>
</body>
</html>