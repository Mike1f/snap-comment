<?php
class comment {
	public $commentSaltiness;
	public $commentText;
	public $commentUsername;

	/**
	 * @return mixed
	 */
	public function getCommentSaltiness() {
		return $this->commentSaltiness;
}

	/**
	 * @param $commentSaltiness
	 * @return string
	 */
	public function setCommentSaltiness($commentSaltiness): float {
		$this->commentSaltiness = $commentSaltiness;
}

	/**
	 * @return mixed
	 */
	public function getCommentText(){
		return $this->commentText;
}

	/**
	 * @param $commentText
	 * @return float
	 */
	public function setCommentText($commentText): float {
		$this->commentText = $commentText;
}

	/**
	 * @return mixed
	 */
	public function getCommentUsername() {
		return $this->commentUsername;
}

	/**
	 * @param $setCommentUsername
	 * @return float
	 */
	public function setCommentUsername($setCommentUsername): float {
		$this->commentUsername;
}

}