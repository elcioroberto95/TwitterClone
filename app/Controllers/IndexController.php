<?php
	
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;



class IndexController extends Action 
{



			public function index() 
			{
				$this->view->login = isset($_GET['login']) ? $_GET['login'] : '' ;
				$this->render('index');
			}

			
			public function inscreverse()
			{
				$this->view->usuario = array
									('nome' =>'',
									'email' => '',
									'senha' => '',
									);
				$this->view->errorCadastro = false;
				$this->render('inscreverse');
			}


			public function registrar()
			{	$usuario = Container::getModel('Usuario');
				$usuario->__set('nome',$_POST['name']);
				$usuario->__set('email',$_POST['email']);
				$usuario->__set('senha',md5($_POST['senha']));

						if($usuario->validar() && count($usuario->getUsuarioPorEmail())== 0)
						{
						
							$usuario->salvar();

							$this->render('cadastro');
						}


						else
							{
								$this->view->usuario = array
									('nome' => $_POST['name'],
									'email' => $_POST['email'],
									'senha' => $_POST['senha'],
									);

									$this->view->errorCadastro = true;
									$this->render('inscreverse');
							}
			}
}


?>