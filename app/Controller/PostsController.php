<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class PostsController extends Controller {
	public $uses = array('Post', 'Category');

	public function index() {
		$posts = $this->Post->find('all');
		$this->set('posts', $posts);

	}

	public function add() {
		if ($this->request->is('post')) {
			$post = $this->request->data;
			$post['Post']['slug'] = $this->to_slug($post['Post']['title']);

			if ($this->Post->save($post)) {
				$this->redirect('index');
			}
			
		}
        $categories = $this->Category->generateTreeList(null, null, null, '');
		$this->set('categories', $categories);
	}

	public function edit($id) {
		if ($this->request->is('post')) {
			$post = $this->request->data;
			$post['Post']['id'] = $id;
			$post['Post']['slug'] = $this->to_slug($post['Post']['title']);

			if ($this->Post->save($post)) {
				$this->redirect('index');
			}
		}
		$post = $this->Post->findByid($id);
		$this->set('post', $post);

		$categories = $this->Category->generateTreeList(null, null, null, '');
		$this->set('categories', $categories);
	}

	public function delete($id) {
		if ($this->request->is('post')) {
			$this->Post->delete($id);
			$this->redirect('index');
		}
		
	}

	public function view($slug) {
		die(var_dump($slug));
	}

	// Convert title -> slug
	private function to_slug($str) {
		$str = trim ( mb_strtolower ( $str ) );
		$str = preg_replace ( '/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str );
		$str = preg_replace ( '/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str );
		$str = preg_replace ( '/(ì|í|ị|ỉ|ĩ)/', 'i', $str );
		$str = preg_replace ( '/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str );
		$str = preg_replace ( '/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str );
		$str = preg_replace ( '/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str );
		$str = preg_replace ( '/(đ)/', 'd', $str );
		$str = preg_replace ( '/[^a-z0-9-\s]/', '', $str );
		$str = preg_replace ( '/([\s]+)/', '-', $str );
		return $str;
	}
}
