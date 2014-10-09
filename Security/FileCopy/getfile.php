<?php
  	$dir = get_param("dir")?get_param("dir"): (dirname(__FILE__) . "\\upload");
	$dir = str_replace("\\\\","\\",$dir);
    $root_dir = get_param("root_dir")?urldecode(get_param("root_dir")): dirname(__FILE__);
    $root_dir = str_replace("\\\\","\\",$root_dir);
    $current_file = $_SERVER['PHP_SELF'] ."?root_dir=" . urlencode($root_dir);
	
	//echo $current_file;
	
	$deep = (get_param("deep"))?get_param("deep"):"0";
		
	 $file_display = new FileDisplay($root_dir);
	 
	
	 $file_display->ShowDirContent();
	 
class FileDisplay {
	var $root_dir;
	var $file_arr;
	var $cb_arr;
	var $max_level;
	var $level_arr;
	var $max;
	var $tmp_arr;
	var $total;


	function FileDisplay($source="C:\\")
	{
		while ($source[strlen($source) - 1] == "\\") $source = substr($source,0,-1);
		$this->root_dir  = $source;
		$this->file_arr = array();
	}

	function GetDirContent($path, $level=0, $parent=-1)
	{ $arr = array();

	    if ($handle = opendir($path)) {

	        /* This is the correct way to loop over the directory. */
	        while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {

				  if ($level > $this->max_level) $this->max_level = $level;

				  if (is_dir($path . "\\" . $file)) {
					$this->file_arr[] = array(
						"fullname" 	=> $path . "\\" . $file,
						"filename" 	=> $file,
						"is_dir" 	=> 1,
						"level" 	=> $level,
						"parent"	=> $parent);

					//$this->GetDirContent($path . "\\" . $file, $level+1, count($this->file_arr)-1);
				  }
				  else {
					$this->file_arr[] = array(
						"fullname" 	=> $path . "\\" . $file,
						"filename" 	=> $file,
						"is_dir" 	=> 0,
						"level" 	=> $level,
						"parent"	=> $parent);

				  }

				}

	        }

	       closedir($handle);
	    }

	}
	function ShowListFile()
	{ global $cb_arr, $deep;

		$block = 0;
		for ($i=0,$max=count($this->file_arr); $i < $max; $i++) {

		/*	if ($this->file_arr[$i]["level"] > $block) {
				//echo "<a style=\"text-decoration:none\" href=\"\" onClick=\"document.getElementById('div_$i').style.display='block';return false\">+</a><br> \n";
				echo "&nbsp;&nbsp;&nbsp;";
				echo "<a style=\"text-decoration:none\" href=\"\" onClick=\"document.getElementById('div_$i').style.display='none';return false\">---</a><br> \n";

                echo "<div id=\"div_$i\" style=\"display:none\"><BLOCKQUOTE> \n";
                $block++;
            }
            elseif ($this->file_arr[$i]["level"] < $block) {
				for($j = $this->file_arr[$i]["level"]; $j < $block;$j++)
                	echo "</BLOCKQUOTE></div>\n";
                $block = $this->file_arr[$i]["level"] ;
            }

			$level = "<input type=checkbox name=\"cb_arr[]\" value=\"" .$this->file_arr[$i]["fullname"] . "\">" ;
			if ($this->file_arr[$i]["is_dir"]) {
				echo $level . "\n <a style=\"text-decoration:none\" href=\"\" onClick=\"document.getElementById('div_" . ($i+1) ."').style.display='block'; ajaxRead('getfile.php?root_dir=" . urlencode($this->file_arr[$i]["fullname"]) ."','div_" . ($i+1) . "'); return false\">
								 <b>" . $this->file_arr[$i]["filename"] ."</b></a> \n";
			}
			else echo $level . $this->file_arr[$i]["filename"] . "<br>\n";  ;*/
			
			$this->file_arr[$i]["fullname"] = str_replace("\\\\", "\\", $this->file_arr[$i]["fullname"]);
			
			$level = "<input type=checkbox name=\"cb_arr[]\" value=\"" . $this->file_arr[$i]["fullname"] . "\">";
			if ($this->file_arr[$i]["is_dir"]) {
				echo "<div>" . $level . "<span onClick=\"obj=document.getElementById('block_" . $deep . "_" . $i ."'); if (obj.style.display=='block') { obj.style.display='none'; } else { obj.style.display='block'; if (obj.innerHTML == '' ) ajaxRead('getfile.php?root_dir=" . urlencode($this->file_arr[$i]["fullname"]) ."&deep=" . $deep . "_" . $i . "','block_" . $deep . "_" . $i . "'); }\" style=\"cursor:pointer\">"  . "<b>"  . $this->file_arr[$i]["filename"] . "</b></span><BLOCKQUOTE id=\"block_" . $deep . "_" . $i . "\" style=\"display:none\" ></BLOCKQUOTE></div>";								
			}
			else echo $level . $this->file_arr[$i]["filename"] . "<br>\n";
		}
	}

	function cmp_obj($a, $b)
	{
		if ($this->file_arr[$a]["is_dir"] > $this->file_arr[$b]["is_dir"])
			return -1;
		elseif ($this->file_arr[$a]["is_dir"] < $this->file_arr[$b]["is_dir"])
			return +1;
		else{
	        $al = strtolower($this->file_arr[$a]["filename"]);
	        $bl = strtolower($this->file_arr[$b]["filename"]);
	         if ($al == $bl) {
	             $value = 0;

	         }
	         else $value = ($al > $bl) ? +1 : -1;

	         return $value;
        }

	}

	function SortFile()
	{
		$this->tmp_arr = array();


		for ($i=0,$max=count($this->file_arr); $i < $max; $i++)	{
			if (!isset($this->tmp_arr[$this->file_arr[$i]["parent"]]))
				$this->tmp_arr[$this->file_arr[$i]["parent"]] = array();
			$this->tmp_arr[$this->file_arr[$i]["parent"]][] = $i;
		}


		foreach($this->tmp_arr as $key=>$value)
	    	usort($this->tmp_arr[$key], array($this,"cmp_obj"));

        $pos = array();
		$list_arr = array();
		$check_arr = array_fill(0,count($this->file_arr),0);

		$i=-1; $j=0;
		$b = true;

		while($b){
	 			if (!$check_arr[$this->tmp_arr[$i][$j]]) {
	        	$list_arr[] = $this->file_arr[$this->tmp_arr[$i][$j]];
	            $check_arr[$this->tmp_arr[$i][$j]] = 1;

	 			if (isset($this->tmp_arr[$this->tmp_arr[$i][$j]]) && is_array($this->tmp_arr[$this->tmp_arr[$i][$j]])) {
	                array_push($pos,array($i,$j));
	                $i = $this->tmp_arr[$i][$j];
	                $j = 0;
	            }
	            else {
	                $j++;
	                if ($j >= count($this->tmp_arr[$i])) {
	                    $b = false;
	                    foreach ($check_arr as $key=>$value) {
	                        if (!$value) {
	                            $b = true;
	                            $tmp = array_pop($pos);
	                            $i = $tmp[0];
	                            $j = $tmp[1];
	                            break;
	                        }
	                    }
	                }
	            }
			}
			else {
				$j++;
				if ($j >= count($this->tmp_arr[$i])) {
					$b = false;
					foreach ($check_arr as $key=>$value) {
						if (!$value) {
							$b = true;
							$tmp = array_pop($pos);
							$i = $tmp[0];
	                        $j = $tmp[1];
							break;
						}
	                }
				}
			}
		}

		$this->file_arr = $list_arr;
	}

	function ShowDirContent()
	{
		$this->GetDirContent($this->root_dir);
		$this->SortFile();
		$this->ShowListFile();
	}


}

function get_param($param_name)
{
  global $HTTP_POST_VARS;
  global $HTTP_GET_VARS;

  $param_value = "";
  if(isset($HTTP_POST_VARS[$param_name]))
    $param_value = $HTTP_POST_VARS[$param_name];
  else if(isset($HTTP_GET_VARS[$param_name]))
    $param_value = $HTTP_GET_VARS[$param_name];

  return $param_value;
}
?>