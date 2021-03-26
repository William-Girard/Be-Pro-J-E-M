<?php 
class admin extends Controller {

	function example() {
		$this->loadModel('admin_model');
		$data = $this->admin_model->test();
		$this->set(["data" => $data]);
		$this->setContent([ "Content" => ["table","form"]]);
		$this->render('admin_page_example');
	}

	function index() {
		$this->render('admin');
	}

	function create() {
		$this->render('admin');
	}

	function listeUpdate() {
		$this->render('admin');
	}

	function listeDelete() {
		$this->render('admin');
	}

	function update() {

		$stateLoad = $this->load_files();
		if ($stateLoad['error'] == false){
			$data = $_POST;
			$data["pictures"] = $stateLoad['pictures'];
			print_r($data);
			$this->set($stateLoad);
			$this->render('admin_send');
		}
		else {
			$this->set($stateLoad);
			$this->render('admin_send');
		}
	}

	private function load_files($id = "") {
		$extList = ['jpg',"png","gif","svg"];
		if(empty($id)) {
			$this->loadModel('admin_model');
			$id = $this->admin_model->get_next_id("users");
		}
		foreach ($_FILES["pictures"]["error"] as $key => $error) {
		    if ($error == UPLOAD_ERR_OK) {
		        $tmp_name = $_FILES["pictures"]["tmp_name"][$key]; 
		        $ext = $this->get_extension($_FILES["pictures"]["name"][$key]);
		        if (!in_array($ext, $extList)) {
		        	return ['error' => true, 'message' => $this->set_error_code(9)];
		        }
		        $name = ROOT.'assets/images/products/product_'.$id.'_picture_'.$key;
		        $pictures[] = ["name" => $name, "ext" => $ext, "tmp_name" => $tmp_name];
		        $picturesSaved[$key+1]['name'] = $name.'.'.$ext;
		    }
		    elseif ($error == UPLOAD_ERR_NO_FILE) {

		    }
		    else {
		    	return ['error' => true, 'message' => $this->set_error_code($error)];
		    }
		}
		foreach ($pictures as $picture) {
			foreach (glob($picture['name'].'.*') as $file) {
	        	unlink($file);
	        }
	        if (move_uploaded_file($picture['tmp_name'], $picture['name'].'.'.$picture['ext'])) {
			   
			} else {
			    return ['error' => true, 'message' => $this->set_error_code(10)];
			}
		}

		return ['error' => false, 'message' => '' , "pictures" => $picturesSaved];

	}

	private function get_extension($filename){
		return pathinfo($filename, PATHINFO_EXTENSION);
	}

	private function set_error_code($code) {
		switch ($code) {
			case 9:
				$retour = "Un fichier de la liste n'est pas dans un format autoriser (jpg,png,gif,svg) ";
				break;
			case 10:
				$retour = "Une erreur est survenue durant le transfert des images";
				break;
			case 2:
				$retour = "La taille du fichier téléchargé excède la valeur";
				break;
			default:
				$retour = "Une erreur est survenue";
				break;
		}
		return $retour;
	}
}