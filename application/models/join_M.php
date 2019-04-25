<?php 

	class join_M extends CI_model {
		public function add()
		{
			$data = [
				"email" => $this->input->post('email', true),
				"password" => $this->input->post('password', true),
				"billing_name" => $this->input->post('billing_name'),
				"billing_address" => $this->input->post('billing_address'),
				"billing_city" => $this->input->post('billing_city'),
				"billing_country" => $this->input->post('billing_country'),
				"billing_telephone" => $this->input->post('billing_telephone'),
			];
			$this->db->insert('user', $data);
		}
	}