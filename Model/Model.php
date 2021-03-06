<?php
	include_once('Database/DAO/MovieDAO.php');
	include_once('Database/DAO/CustomerDAO.php');
	include_once('Database/DAO/CommentDAO.php');
	include_once('Database/DAO/TransactionDAO.php');
	include_once('Database/DAO/AdministratorDAO.php');
	
	/**
	 * Model
	 * 
	 *
	 */
	class Model {
		private $movie_dao = null;
		private $customer_dao = null;
		private $comment_dao = null;
		private $transaction_dao = null;
		private $administrator_dao = null;
		
		/**
		 * __construct
		 * 
		 * 
		 */
		public function __construct() {
			$this->movie_dao = new MovieDAO();
			$this->customer_dao = new CustomerDAO();
			$this->comment_dao = new CommentDAO();
			$this->transaction_dao = new TransactionDAO();
			$this->administrator_dao = new AdministratorDAO();
		}
		
		/**
		 * getAllMovies
		 * 
		 * 
		 */
		public function getAllMovies() {
			return $this->movie_dao->getAllMovies();
		}
		
		/**
		 * getMoviesByTitle
		 * 
		 * 
		 * @param string $title
		 */
		public function getMoviesByTitle($title) {
			return $this->movie_dao->getMoviesByTitle($title);
		}
		
		/**
		 * getMovies
		 * 
		 * 
		 */
		public function getMovies() {
			return $this->movie_dao->getMovies();
		}
		
		/**
		 * 
		 * getCustomerByUserName
		 * 
		 * 
		 * @param String $username
		 * 
		 * @return Customer
		 */
		public function getCustomerByUserName($username) {
			return $this->customer_dao->getCustomerByUserName($username);
		}
		
		/**
		 * 
		 * insertCustomer
		 * 
		 * 
		 * 
		 * @param string $username
		 * @param string $password
		 * @param string $email
		 * 
		 * @return Customer
		 */
		public function insertCustomer($username, $password, $email) {
			return $this->customer_dao->insertCustomer($username, $password, $email);
		}
		
		/**
		 * 
		 * getAllCommentByMovieID
		 * 
		 * 
		 * 
		 * @param unknown $id
		 */
		public function getAllCommentsByMovieID($id) {
			return $this->comment_dao->getAllCommentsByMovieID($id);
		}
		
		/**
		 * 
		 * insertNewComment
		 * 
		 * 
		 * @param int $movie_id
		 * @param int $customer_id
		 * @param int $star
		 * @param string $content
		 */
		public function insertNewComment($movie_id, $customer_id, $star, $content) {
			$this->comment_dao->insertNewComment($movie_id, $customer_id, $star, $content);
		}
		
		/**
		 * 
		 * getCustomerByID
		 * 
		 * 
		 * 
		 * @param unknown $id
		 */
		public function getCustomerByID($id) {
			return $this->customer_dao->getCustomerByID($id);
		}
		
		/**
		 * 
		 * insertNewTransaction
		 * 
		 * @param int $movie_id
		 * @param int $user_id
		 * @param float $cost
		 */
		public function insertNewTransaction($movie_id, $user_id, $cost) {
			return $this->transaction_dao->insertNewTransaction($movie_id, $user_id, $cost);
		}
		
		public function getTransactionsByUserID($user_id) {
			return $this->transaction_dao->getTransactionsByUserID($user_id);
		}
		
		public function getMoviesByMovieID($id) {
			return $this->movie_dao->getMoviesByMovieID($id);
		}
		
		public function getAdministratorByUserName($username) {
			return $this->administrator_dao->getAdministratorByUserName($username);
		}
		
		public function insertNewMovie($title, $genre, $price, $cover, $duration, $url) {
			return $this->movie_dao->insertNewMovie($title, $genre, $price, $cover, $duration, $url);
		}
	}
?>