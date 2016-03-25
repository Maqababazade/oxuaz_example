<?php 

	/**
	* DATABASE CONNECTION CLASS
	*/
	class Database
	{
		public $server;
		public $username;
		public $password;
		public $db;
		public $connection;
		
		function __construct($server,$username,$password,$db)
		{
			$this->server 	= $server;
			$this->username = $username;
			$this->password = $password;
			$this->db 		= $db;

			$this->connect_db();

		}

		public function connect_db(){
			$this->connection = new mysqli($this->server,$this->username,$this->password,$this->db);

			if($this->connection->connect_error){
				die('Connection error: '.$this->connection->connect_error);
			}
			else{
				echo "Connected";
			}

		}
	}

	class News extends Database {
		public $news_title;
		public $news_date;
		public $news_desc;
		public $news_img;
		public $news_status;
		public $news_text;
		public $connection;
		// FOR UPLOAD
		public $fileName;
		public $fileExtention;
		public $fileDir;
		public $filePath;
		public $fullPath;
		public $data;
		public $root = 'C:\xampp\htdocs\php\oxuaz\/';
		
		public function __construct($connection){

			
			$this->connection 	= $connection;
			

		}

		public function uploadFile($newsImage){
			$this->news_img 	= $newsImage;
			$this->fileName = $this->news_img['name'];
			$this->fileExtention = end(explode(".",$this->fileName));
			$this->filePath = $this->news_img['tmp_name'];
			$this->fileDir = "upload/";
			$this->fullPath = $this->fileDir.Rand().".".$this->fileExtention;
			move_uploaded_file($this->filePath, $this->root.$this->fullPath);

		}

		public function insertNews($newsTitle,$newsDate,$newsText,$newsDesc,$newsStatus){

			$this->news_title 	= $newsTitle;
			$this->news_date 	= $newsDate;
			$this->news_text 	= $newsText;
			$this->news_desc 	= $newsDesc;
			$this->news_status 	= $newsStatus;
			
			
			$sql = "INSERT INTO news (news_title,news_desc,news_text,status,news_date,news_img_full) VALUES ('$this->news_title','$this->news_desc','$this->news_text','$this->news_status','$this->news_date','$this->fullPath')";


			if($this->connection->query($sql)){
				echo "Add olundu!";
			}
			else {
				echo "Error! Not added!";
			}

			$this->connection->close();

		}

		public function selectNews(){
			$sql = "SELECT * FROM news WHERE status=1";
			$result = $this->connection->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			$this->data = $result;
			 
			    
			} else {
			    echo "0 results";
			}
			$this->connection->close();
		}

	}
 ?>