<style>
#ff{
border: 2px solid #848484;
box-shadow: 0px 0px 0px 0px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
height:326px;
color: #3d3d3d;
width:420px;
font-size: 17px;
line-height: 20px;
overflow: auto;
margin-top:10px;
margin-left:-0px;
    font-family: "tahoma";
    font-size: 13px;
}
#ff hr {
color: #ccc;
width:380px;
}
#ff a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#ff a:link {

}
#ff a:hover {
text-decoration: underline;
}
</style>
<div id="ff"><?php
$host = "localhost";
$username = "root";
$password = "";
$database = "project";
$connect=mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database,$connect);
if($pilihdatabase){
	
}else{
echo "Tidak dapat connect ke database";
}
?>
<?php
	$commentquery	= mysql_query("SELECT * FROM komentar")or die .mysql_error();
	$commentNum		=mysql_num_rows($commentquery);
echo"<h4>"."Current comment(s)..."."</h4>";
echo"<b>".$commentNum."comment(s)so far. Leave a comment..."."</b>"."<br/>"."<br/>";	
echo"<hr>";
while($row=mysql_fetch_array($commentquery))
{
	echo"<b>".$row['nama']."</b>".""."|".""."<i>".$row['date']."</i>"."<br/>"."<br/>".$row['comment']."<br/>";
	echo"<hr>";

}
?></div>