<?php
class FileCopy {
	var $dir;
	var $target_dir;
	
	function FileCopy() {
		
		$this->dir = $this->get_param("dir")?$this->get_param("dir"): (dirname(__FILE__) . "\\upload");
		$this->dir = str_replace("\\\\","\\",$this->dir);
	    $this->root_dir = $this->get_param("root_dir")?urldecode($this->get_param("root_dir")): dirname(__FILE__);
	    $this->root_dir = str_replace("\\\\","\\",$this->root_dir);
	    $this->cb_arr = $this->get_param("cb_arr"); 
	    
	    $current_file = $_SERVER['PHP_SELF'] ."?root_dir=" . urlencode($this->root_dir);	 
	   	
	   	while($this->root_dir[strlen($this->root_dir)-1] == "\\") $this->root_dir = substr($this->root_dir,0,-1);	
	   	while($this->dir[strlen($this->dir)-1] == "\\") $this->dir = substr($this->dir,0,-1);	
	   	 		  
		include "phptrasher.class.php";
    		
		$this->phptrasher = new phptrasher ();
		// initialize the class
		$this->phptrasher->initialize ();
		// setup the class
		$this->phptrasher->removecomments = true;
		$this->phptrasher->removelinebreaks = true;
		$this->phptrasher->obfuscateclass = false;
		$this->phptrasher->obfuscatefunction = false;
		$this->phptrasher->obfuscatevariable = false;	 
	}
	
	function Process($op="main") {
		
		switch($op) {
			case "doCopy"	:	$this->doCopy($this->root_dir, $this->dir, $this->cb_arr);
								echo "<p>Copy Successful!</p>";
								break;
			case "doRemove"	:	$this->doCopy($this->root_dir, $this->dir, $this->cb_arr, 1);
								echo "<p>Delete Successful!</p>";
								break;
			default			:	$this->Display($this->root_dir, $this->dir, $this->cb_arr);
		}
				
	}
	
	function Display($root_dir, $dir, $cb_arr) {
		
		 $current_file = $_SERVER['PHP_SELF'] ."?root_dir=" . urlencode($root_dir);
		 
		 while($root_dir[strlen($root_dir)-1] == "\\") $root_dir = substr($root_dir,0,-1);	
		 	echo "<iframe id='main_frame' name='main_frame' width='100%' height='30x' frameborder=0 frame_url='about:blank'></iframe>";
		 	
			echo "<p><a href=\"" . $current_file . "\">Reset</a></p>";
		    echo "<form action=\"" . $current_file . "\" method=\"post\" name=Mainfrm target='main_frame'>\n";
		    echo "<input type=hidden value=\"\" name=op >";
		    echo "Root dir: <input type=text size=80 value=\"" . $root_dir  . "\" name=root_dir >";
		    echo "<input type=submit value=\"Change Dir\" onClick=\"this.form.target='_self'; this.form.op.value='changeDir'\"><br/>";
		    echo "Copy dir: <input type=text size=80 value=\"" .$dir . "\" name=dir ><br/>";
		    echo "<br><label for=\"obfucate\"><input type=checkbox value=\"1\" name=\"obfucate\" id=\"obfucate\" >Obfucate</label>";
		    echo " &nbsp; &nbsp;<label for=\"uncomment\"><input type=checkbox value=\"1\" name=\"uncomment\" id=\"uncomment\">Remove comment</label><br/><br>";
		
		    echo "<input type=submit value=\"Copy\" onClick=\"this.form.op.value='doCopy'\">
		    	  <input type=submit value=\"Delete\" onClick=\"this.form.op.value='doRemove'; return confirm ('Are you sure?');\">
		    	  <br><br>";
			echo "<div id=\"result\"></div>";
			if ($op!="doCopy" || $op != "doRemove") {
				
				echo "<script langiage=\"javascript\" src=\"ajax.js\"></script>";
				echo "<script langiage=\"javascript\" >				
						ajaxRead('getfile.php?dir=" . urlencode($dir) . "&root_dir=" . urlencode($root_dir) ."','result');
				     </script>";
			}
		
		    echo "</form>\n";
	}
	
	function get_param($param_name)	{
		
		$param_value = "";
		if(isset($_POST[$param_name]))
		$param_value = $_POST[$param_name];
		else if(isset($_GET[$param_name]))
		$param_value = $_GET[$param_name];
		
		return $param_value;
	}
	
	function CopyFile($source,$dest, $level=0, $remove=0) {
	
	    $dir_dest = dirname($dest);
	    if (!file_exists($dir_dest)) $this->CopyFile($source, $dir_dest, $level + 1, $remove);
	    if (!file_exists($dest) && $level) mkdir($dest);
	
	    if (!$level) {
	
	    	//copy($source,$dest);
	    	if ($this->get_param("uncomment") && strrchr($source, ".")== ".php") {
	    		
	    	}
	    	if ($this->get_param("obfucate") && strrchr($source, ".")== ".php") {
	    		// get the obfuscated code
				$output = $this->phptrasher->trash ($source);
				
	    		$f = fopen($dest, "w");
	    		fwrite($f, $output);
	    		fclose($f);
	    		
	    	}else copy($source,$dest);
	    	
	    	if ($remove) unlink($source);
	    }
	
	}
	
	function CopyDir($source,$dest, $level=0, $remove=0) { 		
		if (!file_exists($source)) return;
	
		if (is_file($source)) $this->CopyFile($source,$dest,0, $remove);	
		else {
	 		if ($handle = opendir($source)) {
	
		        /* This is the correct way to loop over the directory. */
		        while (false !== ($file = readdir($handle))) {
					if ($file != "." && $file != "..") {
						$this->CopyDir($source . "\\" . $file,$dest . "\\" . $file, 0, $remove);										
					}
					else if (($file == ".") && (!file_exists($dest)) && !$remove) @mkdir($dest);
				}
			}
			
			if ($remove){				
				closedir($handle);
				rmdir($source);
			}
		}
		
	}
	
	function DoCopy($root_dir, $dir, $cb_arr, $remove = 0) { 
								 
		$length = strlen($root_dir);
	//	echo $dir;
	
	    if (is_dir($dir)) {
			$i = 1;
		   	$new_dir = $dir . "1";
	    	while (is_dir($new_dir)) {
				$new_dir .= (++$i);
	
		    }
			rename($dir,$new_dir);
	    	mkdir($dir);
	    }
	
	    if (is_array($cb_arr)) {
		    foreach ($cb_arr as $key=>$value) {
		    	$value = str_replace("\\\\","\\",$value);
		        if (is_dir($value)) $this->CopyDir($value,$dir . substr($value,$length), 0 , $remove);
		        else { $this->CopyFile($value,$dir . substr($value,$length), 0, $remove);}
		    }
		}
	}

}
?>