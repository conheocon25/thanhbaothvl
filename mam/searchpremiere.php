<?PHP
include "include/config.php";
    
	//search information
	$menu="";
	$password="";
	$username="";
	$searchcontent="";
	$collection="";
	$tulieu="";
	$bophan="";
	$chuyenmuc="";
	$theloai="";
	$searchdate="";
	if (isset($_POST['menu'])) $menu = $_POST['menu'];
	if (isset($_POST['username'])) $username = $_POST['username'];
	if (isset($_POST['password'])) $password = $_POST['password'];
    if (isset($_POST['searchcontent'])) $searchcontent = $_POST['searchcontent'];
	if (isset($_POST['collection'])) $collection = $_POST['collection'];
	if (isset($_POST['tulieu'])) $tulieu = $_POST['tulieu'];
	if (isset($_POST['bophan'])) $bophan = $_POST['bophan'];
	if (isset($_POST['chuyenmuc']))$chuyenmuc = $_POST['chuyenmuc'];
	if (isset($_POST['theloai'])) $theloai = $_POST['theloai'];
	if (isset($_POST['searchdate'])) $searchdate =$_POST['searchdate'];
	if ($tulieu == "Kiểu tư liệu")
	{
		$tulieu = "";
	}
	if ($bophan == "Bộ phận")
	{
		$bophan = "";
	}
	if ($chuyenmuc == "Chuyên mục")
	{
		$chuyenmuc = "";
	}
	if ($theloai == "Thể loại")
	{
		$theloai = "";
	}
	//mysql
	$link= mysql_connect($mysql_server,$mysql_username,$mysql_password);
mysql_select_db($mysql_db);
if ($menu == "true")
{
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	echo "<menu>\n";
	//dang nhap
	$dangnhap_ok = false;
	$password = substr( md5("RS".$username.$password),0,32);
	$query0 = "SELECT * FROM `user` where `user`.username='".$username."' and `user`.`password`='".$password."'";
	$result0 = mysql_query($query0);
	while ($line0=mysql_fetch_assoc($result0))
	{
	echo "<dangnhap>OK</dangnhap>\n";
	$dangnhap_ok = true;
	}
	if($dangnhap_ok==false)
	{
	echo "<dangnhap>notok</dangnhap>\n";
	}
	//resource type
	$query = "SELECT resource_type.name FROM resource_type";
	$result = mysql_query($query);
	while ($line=mysql_fetch_assoc($result))
	{
	echo "<type>".$line["name"]."</type>\n";
	}
	//bophan
	$query1 = "SELECT resource_type_field.options FROM resource_type_field where ref = 97";
	$result1 = mysql_query($query1);
	while ($line1=mysql_fetch_assoc($result1))
	{
	$pieces = explode("\n", $line1["options"]);
	$cntpieces = count($pieces);
	for ($x=0; $x<$cntpieces; $x++) 
	{
		if(strpos($pieces[$x],",0,")>0)
		{
		echo "<bophan>".substr($pieces[$x],strrpos($pieces[$x],",")+1)."</bophan>\n";
		}
	} 	
	}
	//chuyen muc
	$query2 = "SELECT resource_type_field.options FROM resource_type_field where ref = 82";
	$result2 = mysql_query($query2);
	while ($line2=mysql_fetch_assoc($result2))
	{
	$pieces2 = explode("\n", $line2["options"]);
	$cntpieces2 = count($pieces2);
	for ($x2=0; $x2<$cntpieces2; $x2++) 
	{
		if(strpos($pieces2[$x2],",0,")>0)
		{
		echo "<chuyenmuc>".substr($pieces2[$x2],strrpos($pieces2[$x2],",")+1)."</chuyenmuc>\n";
		}
	} 	
	}
	//the loai
	$query3 = "SELECT resource_type_field.options FROM resource_type_field where ref = 83";
	$result3 = mysql_query($query3);
	while ($line3=mysql_fetch_assoc($result3))
	{
	$pieces3 = explode(",", $line3["options"]);
	$cntpieces3 = count($pieces3);
	for ($x3=0; $x3<$cntpieces3; $x3++) 
	{
		
		echo "<theloai>".substr($pieces3[$x3],strrpos($pieces3[$x3],"-")+1)."</theloai>\n";
		
	} 
	for ($x=0; $x<count($storage_original); $x++) 
	{
		echo "<storage_original>".$storage_original[$x]."</storage_original>\n";
	} 	
		echo "<scramble_key>".$scramble_key."</scramble_key>\n";
		echo "<baseurl>".$baseurl."</baseurl>\n";
	}
	
	echo "</menu>";	
}
if ($collection == "true")
{
$query = "SELECT
collection.ref,
collection.name,
`user`.username,
resource.ref as id,
resource.field51,
collection.created,
resource.file_extension
FROM
collection
Inner Join collection_resource ON collection.ref = collection_resource.collection
Inner Join `user` ON collection.`user` = `user`.ref
Inner Join resource ON collection_resource.resource = resource.ref
where resource.archive<>3 and collection.created like '$searchdate%' and ( collection.name like '%$searchcontent%' or `user`.username like '%$searchcontent%')
order by collection.created  desc
";
$result = mysql_query($query);
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<results>\n";
$collectionnreftemp = 0;
while ($line=mysql_fetch_assoc($result))
{
	if ($collectionnreftemp == $line["ref"])
	{
	echo "<id>".$line["id"]."</id>\n";
	for ($x=0; $x<count($storage_proxy); $x++) 
	{
		$count_image=0;
		$path_temp ="";
		$filename_temp =substr(md5($line["id"]."pre".$scramble_key),0,15);
		$folder_temp =substr(md5($line["id"]."_".$scramble_key),0,15);
		for($z=0;$z<strlen($line["id"])-1;$z++)
		{
		$path_temp=$path_temp."/".substr($line["id"],$z,1);
		}
		$path_temp=$path_temp."/".substr($line["id"],strlen($line["id"])-1,1)."_".$folder_temp."/".$line["id"]."pre_".$filename_temp.".jpg";
		if(file_exists($storage_proxy[$x].$path_temp))
		{
			echo "<image_path>".$storageurl_proxy[$x].$path_temp."</image_path>";
			break;
		}
		else		
		{
		$count_image++;		
		}
		if($count_image==count($storage_proxy))
		{
		echo "<image_path>"."imagenotfound.jpg"."</image_path>";
		}
	} 
	echo "<collectionid>".$line["ref"]."</collectionid>\n";
	echo "<videoname>".$line["field51"]."</videoname>\n";
	echo "<file_extension>".$line["file_extension"]."</file_extension>\n";
	}
	else
	{
	echo "<collectionref>".$line["ref"]."</collectionref>\n";
	echo "<collectionname>".$line["name"]."</collectionname>\n";
	echo "<username>".$line["username"]."</username>\n";
	echo "<created>".$line["created"]."</created>\n";
	echo "<id>".$line["id"]."</id>\n";
	for ($x=0; $x<count($storage_proxy); $x++) 
	{
		$count_image=0;
		$path_temp ="";
		$filename_temp =substr(md5($line["id"]."pre".$scramble_key),0,15);
		$folder_temp =substr(md5($line["id"]."_".$scramble_key),0,15);
		for($z=0;$z<strlen($line["id"])-1;$z++)
		{
		$path_temp=$path_temp."/".substr($line["id"],$z,1);
		}
		$path_temp=$path_temp."/".substr($line["id"],strlen($line["id"])-1,1)."_".$folder_temp."/".$line["id"]."pre_".$filename_temp.".jpg";
		if(file_exists($storage_proxy[$x].$path_temp))
		{
			echo "<image_path>".$storageurl_proxy[$x].$path_temp."</image_path>";
			break;
		}
		else		
		{
		$count_image++;		
		}
		if($count_image==count($storage_proxy))
		{
		echo "<image_path>"."imagenotfound.jpg"."</image_path>";
		}
	} 
	echo "<collectionid>".$line["ref"]."</collectionid>\n";
	echo "<videoname>".$line["field51"]."</videoname>\n";
	echo "<file_extension>".$line["file_extension"]."</file_extension>\n";
	}
	$collectionnreftemp=$line["ref"];
	
}
echo "</results>";
}
if ($collection == "false")
{
$query = "SELECT DISTINCT
resource.ref,
resource.creation_date ,
resource.field51,
resource.file_extension
FROM 
resource_data 
Inner Join resource ON resource.ref = resource_data.resource 
Inner Join resource_type ON resource.resource_type = resource_type.ref 
Inner Join `user` ON resource.created_by = `user`.ref 
left Join resource_scene ON resource_scene.resource = resource.ref
where resource.ref>0 and resource.archive<>3 and  resource_type.name like '%$tulieu%'
and resource.creation_date like '$searchdate%' and (resource.ref like '%$searchcontent%' or resource_scene.`key` like '%$searchcontent%' or resource.field51 like '%$searchcontent%' or user.username like '%$searchcontent%' or resource_data.value like '%$searchcontent%')
order by resource.ref desc
";
$result = mysql_query($query);
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<results>\n";
while ($line=mysql_fetch_assoc($result))
{	
	$display = true;
	$display1 = true;
	$display2 = true;
	$bophantemp="";
	$theloaitemp="";
	$chuyenmuctemp="";
	$tieudetemp="";
	$id =$line["ref"];
	
	$query1 = "SELECT
resource_data.resource_type_field,
resource_data.value
FROM
resource_data
where resource_data.resource =$id
";
	$result1 = mysql_query($query1);
	while ($line1 = mysql_fetch_assoc($result1))
	{
	$field = $line1["resource_type_field"];
	$value =  $line1["value"];
	
	switch ( $field )
	{
	case 97:
	if ($bophan !=="")
	{
        if (strpos($value ,$bophan) == false)
		{
		$display = false;
		
		}
		else
		{
		$display = true;
		
		}
		
	}
	$bophantemp=$value ;
        break;
    case 83:
	if ($theloai !=="")
	{
        if (strpos($value ,$theloai) == false)
		{
		$display1 = false;
		
		}
		else
		{
		$display1 = true;
		
		}	
		
	}
	$theloaitemp=$value ;
        break;
    case 82:
	if ($chuyenmuc !=="")
	{
       	 if (strpos($value ,$chuyenmuc) == false)
		{
		$display2 = false;
		
		}
		else
		{
		$display2 = true;
		
		}	
		
	}
	$chuyenmuctemp=$value ;
        break;
	case 8:
		$tieudetemp =$value ;	
        break;
	}	
	}
	if ($display == true and $display1 == true and $display2 == true)
	{
	echo "<id>".$line["ref"]."</id>\n";	
	for ($x=0; $x<count($storage_proxy); $x++) 
	{
		$count_image=0;
		$path_temp ="";
		$filename_temp =substr(md5($line["ref"]."pre".$scramble_key),0,15);
		$folder_temp =substr(md5($line["ref"]."_".$scramble_key),0,15);
		for($z=0;$z<strlen($line["ref"])-1;$z++)
		{
		$path_temp=$path_temp."/".substr($line["ref"],$z,1);
		}
		$path_temp=$path_temp."/".substr($line["ref"],strlen($line["ref"])-1,1)."_".$folder_temp."/".$line["ref"]."pre_".$filename_temp.".jpg";
		if(file_exists($storage_proxy[$x].$path_temp))
		{
			echo "<image_path>".$storageurl_proxy[$x].$path_temp."</image_path>";
			break;
		}
		else		
		{
		$count_image++;		
		}
		if($count_image==count($storage_proxy))
		{
		echo "<image_path>"."imagenotfound.jpg"."</image_path>";
		}
	} 
	echo "<videoname>".$line["field51"]."</videoname>\n";	
	echo "<creation_date>".$line["creation_date"]."</creation_date>\n";	
	echo "<file_extension>".$line["file_extension"]."</file_extension>\n";
	echo "<bophan>".$bophantemp."</bophan>\n";	
	echo "<theloai>".$theloaitemp."</theloai>\n";	
	echo "<chuyenmuc>".$chuyenmuctemp."</chuyenmuc>\n";	
	echo "<tieude>".$tieudetemp."</tieude>\n";	
	
	}
}
echo "</results>";
}
mysql_close($link);
?>