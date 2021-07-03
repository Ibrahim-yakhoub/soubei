<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
use \App;
/**
 * 
 */
class MatiereController extends AppController
{
	
	function __construct()
	{
		parent::__construct();
		$this->loadModel('Matiere');
	}
	public function index(){
		$liste = $this->Matiere->all();
		$this->render('admin.matiere.index', compact('liste'));
	}
	public function add(){
		if(!empty($_POST)){
			$res = $this->Matiere->create(['nom' => $_POST['nom']]);
			if($res){
				header('Location: index.php?p=admin.matiere.edit&id='.App::getInstances()->getDb()->lastInsertId());
			}
			
		}
		$form = new BootstrapForm($_POST);
        $this->render('admin.matiere.add', compact('form'));
	}

	public function edit(){
		if(!empty($_POST)){
			$res = $this->Matiere->update($_GET['id'], ['nom' => $_POST['nom']]);
		}
		$list = $this->Matiere->find($_GET['id']);
		$form = new BootstrapForm($list);
		$this->render('admin.matiere.edit', compact('form'));
	}
	public function delete(){
		$res = $this->Matiere->delete($_GET['id']);
		if($res){
			header('Location: index.php?p=admin.matiere.index');
		}
	}
}