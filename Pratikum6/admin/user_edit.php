<!DOCTYPE html >
< html >
< head >
< title >Change Data Page</ title >
</ head >
< body >
<? php
include " config.php ";
$ user = $_GET[' user_name '];
$ sql = "SELECT * FROM users WHERE user_name ='$ user '";
$result = mysqli_query ($ config , $ sql );
$data = mysqli_fetch_assoc ($result);
?>
<h3>Change Username Data </h3>
< form method ="POST" action =" user_edit_action.php ">
< table >
< tr >
< td > Username </ td >
< td >:</ td >
< td >
< input type =" text " value =" <? php echo $data[
' user_name ' ]?>" disabled >
< input type =" text " name =" username " value
="<? php echo $data[ ' user_name ' ]?>" hidden >
</ td >
</ tr >
< tr >
< td > Password </ td >
< td > : </ td >
< td >
< input type =" text " name =" password " value
="<? php echo $data[ ' user_password ' ]?>">
</ td >
</ tr >
< tr >
< td >Full Name</ td >
< td > : </ td >
< td >
< input type =" text " name =" fullname " value
="<? php echo $data[ ' user_fullname ' ]?>">
</ td >
</ tr >
< td >Email</ td >
< td > : </ td >
< td >
< input type ="email" name =" email " value ="<?
php echo $data[ ' user_email ' ]?>">
</ td >
</ tr >
< tr >
< td colspan =2>
< input type =" submit " name =" change " value ="

Save">

< input type ="reset" value ="Cancel">
</ td >
</ tr >
</table>
</ form >
</body>
</html>