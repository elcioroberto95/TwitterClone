<?php

namespace App;
use MF\Init\bootstrap;



class Route extends bootstrap 
{

					protected function initRoute()
					{
							$routes['home'] = array
							(
								'route'=>'/',
								'controller' => 'indexController',
								'action' => 'index'
							);

							$routes['inscrever'] = array
							(
								'route'=>'/inscreverse',
								'controller' => 'indexController',
								'action' => 'inscreverse'
							);

							$routes['registrar'] = array
							(
								'route'=>'/registrar',
								'controller' => 'indexController',
								'action' => 'registrar'
							);

							$routes['autenticar'] = array
							(
								'route'=>'/autenticar',
								'controller' => 'AuthController',
								'action' => 'autenticar'
							);
							
							$routes['timeline'] = array
							(
								'route'=>'/timeline',
								'controller' => 'AppController',
								'action' => 'timeline'
							);

							$routes['sair'] = array
							(
								'route'=>'/sair',
								'controller' => 'AuthController',
								'action' => 'sair'
							);
							$routes['tweet'] = array
							(
								'route'=>'/tweet',
								'controller' => 'AppController',
								'action' => 'tweet'
							);

							$routes['quem_seguir'] = array
							(
								'route'=>'/quem_seguir',
								'controller' => 'AppController',
								'action' => 'quemSeguir'
							);
							$routes['acao'] = array
							(
								'route'=>'/acao',
								'controller' => 'AppController',
								'action' => 'acao'
							);
							$routes['remover_tweet'] = array(
						    'route' => '/remover_tweet',
						    'controller' => 'AppController',
						    'action' => 'removerTweet'
);

							

							$this->setRoutes($routes);
					}
						
}
			
?>