<?php

// include the ROOT_DIRECTORY path var
require_once('../index.php');

if ($_POST["comment"])
{
		//log results of the poll
		$log = new CommentLogging($_POST["name"], $_POST["comment"], $_POST["user_id"], $_POST["url"]);
		$log->WriteToFile();
}

class CommentLogging
{
		//define instance variables
		private $ipAddress, $currTime, $name, $comment, $user_id;

		function __construct($name, $comment, $user_id, $url)
		{
				//set instance variables
				$this->user_id = $user_id;
				$this->url = $url;
				$this->ipAddress = $this->get_the_ip();
				$this->currTime = date("m/d/Y g:i:s A",time()-18000);
				$this->name = str_replace("|", "&#124;", filter_var($name, FILTER_SANITIZE_STRING));
				$this->comment = str_replace("|", "&#124;", filter_var($comment, FILTER_SANITIZE_STRING));
				$this->rootDir = ROOT_DIRECTORY;
		}


		function WriteToFile() {
			$logPath = array(
							$this->rootDir . "/logs/".$this->url.".csv",
							$this->rootDir . "/logs/".$this->url.".txt"
						);

			//loop through log files
			foreach($logPath as $log) {
			  //open file with append
				$logFile = fopen($log, 'a') or die("A problem has occurred. Please contact administrator.");

				$logText = $this->user_id . "|" . $this->ipAddress . "|" . $this->currTime . "|" . $this->name . "|" . $this->comment . "\n";

				//write to file
				fwrite($logFile, $logText);

				//close file
				fclose($logFile);
			}
		}

		function get_the_ip() {
			//Just get the headers if we can or else use the SERVER global
			if ( function_exists( 'apache_request_headers' ) ) {
				$headers = apache_request_headers();
			} else {
				$headers = $_SERVER;
			}
			//Get the forwarded IP if it exists
			if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
				$the_ip = $headers['X-Forwarded-For'];
			} elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )) {
				$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
			} else {
				$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
			}
			if(!empty($the_ip)){
				return $the_ip;
			} else {
				return false;
			}
		}
}

?>
