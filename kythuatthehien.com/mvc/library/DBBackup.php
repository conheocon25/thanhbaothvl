<?php
Namespace MVC\Library;
class DBBackup {
	
        private $dbc;
        private $user;
        private $pass;
        private $dbname;
        private $host;
        private $filename;

        function __construct($host="localhost", $dbname="your_databse_name_here", $user="your_username", $pass="your_password"){
            $this->user = $user;
            $this->pass = $pass;
            $this->dbname = $dbname;
            $this->host = $host;
            $this->filename = '';
            $opt = array(
			\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 				
               \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
               \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
			   \PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
            );
            try{
                $this->dbc = new \PDO($this->host . $this->dbname.';charset=utf8', $user, $pass, $opt);				
            }
            catch(PDOException $e){
                 echo $e->getMessage();
                 echo "There was a problem with connection to db check credenctials";
            }
        } /*end function*/


        public function backup_tables($tables = '*'){  /* backup the db OR just a table */
            $host=$this->host;
            $user=$this->user;
            $pass=$this->pass;
            $dbname=$this->dbname;
            $data = "";
            //get all of the tables
            if($tables == '*')
            {
                $tables = array();
                $result = $this->dbc->prepare('SHOW TABLES'); 
                $result->execute();                         
                while($row = $result->fetch(\PDO::FETCH_NUM)) 
                { 
                    $tables[] = $row[0]; 
                }
            }
            else
            {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
            }
            //cycle through
            foreach($tables as $table)
            {
                $resultcount = $this->dbc->prepare('SELECT count(*) FROM '.$table);
                $resultcount->execute();
                $num_fields = $resultcount->fetch(\PDO::FETCH_NUM);
                $num_fields = $num_fields[0];

                $result = $this->dbc->prepare('SELECT * FROM '.$table);
                $result->execute();
                $data.= 'DROP TABLE '.$table.';';

                $result2 = $this->dbc->prepare('SHOW CREATE TABLE '.$table);    
                $result2->execute();                            
                $row2 = $result2->fetch(\PDO::FETCH_NUM);
                $data.= "\n\n".$row2[1].";\n\n";

                for ($i = 0; $i < $num_fields; $i++) 
                {
                    while($row = $result->fetch(\PDO::FETCH_NUM))
                    { 
                        $data.= 'INSERT INTO '.$table.' VALUES(';
                        for($j=0; $j<$num_fields; $j++) 
                        {
                            $row[$j] = addslashes($row[$j]); 
							
                            $row[$j] = str_replace("\n","\\n",$row[$j]);
							
                            if (isset($row[$j])) { $data.= '"'.$row[$j].'"' ; } else { $data.= '""'; }
                            if ($j<($num_fields-1)) { $data.= ','; }
                        }
                        $data.= ");\n";
                    }
                }
                $data.="\n\n\n";
            }
            //save filename '-'.(implode(",",$tables))
            $this->filename = '.\\data\\db-backup-'.time().'.sql';
            $this->writeUTF8filename($this->filename,$data);
        /*USE EXAMPLE
           $connection = new MySql(SERVERHOST,"your_db_name",DBUSER, DBPASS);
           $connection->backup_tables(); //OR backup_tables("posts");
           $connection->closeConnection();
        */
        } /*end function*/


        private function writeUTF8filename($filenamename,$content){  /* save as utf8 encoding */
            $f=fopen($filenamename,"w+"); 
            # Now UTF-8 - Add byte order mark 
            fwrite($f, pack("CCC",0xef,0xbb,0xbf)); 
            fwrite($f,$content); 
            fclose($f); 
        /*USE EXAMPLE this is only used by public function above...
            $this->writeUTF8filename($filename,$data);
        */
        } /*end function*/


        public function getFileNameBackup(){
			return $this->filename;
		}
		public function recoverDB($file_to_load){
            echo "write some code to load and proccedd .sql file in here ...";
        /*USE EXAMPLE this is only used by public function above...
            recoverDB("some_buck_up_file.sql");
        */
        } /*end function*/


        public function closeConnection(){
            $this->dbc = null;
        //EXAMPLE OF USE 
        /*$connection->closeConnection();*/
        }/*end function*/


	function runScriptRestore($SQLScriptFile) 
	{			
		$SQLScript = explode(";", $SQLScriptFile);
		$count = count($SQLScript);
		if ($count > 0)
		{
			for ($i=0; $i < $count ; $i++)
			{
				mysql_query($SQLScript[$i]);
			}
			return true;
		}
		else
		{
			return false;
		}
	}

 } /*END OF CLASS*/
	
?>