<?php 
	require_once ("../Config/define_path.php");
	require_once (__PARENT_PATH.__CONFIG_PATH."define_database.php");

	/**
	* @author  		TNT Team
	* @copyright   	Copyright (c) 2016
	* @since       	Version 1.0
	* @filesource  models/model_user.php
	*/
	class User {

		private $connect;

		/**
	     * connect function
	     * 
	     * @desc 	connect to database
	     */
		public function connectDB () {
			// Create connection
			$this->connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			// Check connection
			if ($this->connect->connect_error) {
			    die("Connection failed: " . $this->connect->connect_error);
			}
			$this->connect->query("SET NAMES 'utf8'");
			$this->connect->query("SET CHARACTER SET utf8");
			$this->connect->query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
		}

		/**
	     * 
	     * @desc 	Close connection to database
	     *
	     */
		public function closeDB () {
			$this->connect->close();
		}

		/**
	     * Signup function
	     * 
	     * @desc 	insert into table user  
	     * @param 	$user: array
	     */
		public function signUp ($user) {
			$email = $this->connect->real_escape_string($user['email']);
			$password = md5($this->connect->real_escape_string($user['password']));
			$firstname = $this->connect->real_escape_string($user['firstname']);
			$lastname = $this->connect->real_escape_string($user['lastname']);
			$gender = $this->connect->real_escape_string($user['gender']);

			$statement = " INSERT INTO users(email, password, firstname, lastname, gender) VALUES ('$email', '$password', '$firstname', '$lastname', '$gender') ";
			return $this->connect->query($statement);
		}

		/**
	     * Get users by email 
	     * 
	     * @desc 	check email exist in table users  
	     * @param 	$email: variable
	     */
		public function check_user_by_email ($email) {
			$email = $this->connect->real_escape_string($email);
			$statement = " SELECT * FROM users WHERE email = '$email' ";
			$result = $this->connect->query($statement);
			return $result->num_rows ;
		}

		/**
	     * Check login function
	     * 
	     * @desc 	check login and return user if exist  
	     * @param 	$email, $password: variable
	     */
		public function check_login ($email, $password) {
			$email = $this->connect->real_escape_string($email);
			$password = md5($this->connect->real_escape_string($password));

			$statement = " SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$result = $this->connect->query($statement);
			
			if ($rows = $result->fetch_assoc()) {
				return $rows;
			}
			else {
				return 0;
			}
			
		}
	}
?>