		<?php 
		 //config -->
		$config['base_url'] = 'http://localhost/move/user/nana';
		
		$config['num_links']= 5;
		 
		//style
		$config['full_tag_open']= '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']= '</ul></nav>';
		//pagination awal
		$confi['first_link']= 'First';
		$config['first_tag_open']= '<li class="page-item">';
		$config['first_tag_close']= '</li>';
		//pagination keri
		$confi['last_link']= 'Last';
		$config['last_tag_open']= '<li class="page-item">';
		$config['last_tag_close']= '</li>';

		$confi['next_link']= '&raquo';
		$config['next_tag_open']= '<li class="page-item">';
		$config['next_tag_close']= '</li>';

		$confi['prev_link']= '&laquo';
		$config['prev_tag_open']= '<li class="page-item">';
		$config['prev_tag_close']= '</li>';

		$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close']= '</a></li>';

		$config['num_tag_open']= '<li class="page-item">';
		$config['num_tag_close']= '</li>';

		// Produces: class="myclass"
		$config['attributes'] = array('class' => 'page-link');