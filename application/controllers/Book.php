<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
	public function index()
	{
		$data['books'] = $this->Book_model->getAllBooks();
		$this->load->view('header');
		$this->load->view('book_view', $data);
		$this->load->view('jquery', $data);
		$this->load->view('footer');
	}

	public function bookAdd()
	{
		$data = [
			'book_isbn' => $this->input->post('bookIsbn'),
			'book_title' => $this->input->post('bookTitle'),
			'book_author' => $this->input->post('bookAuthor'),
			'book_category' => $this->input->post('bookCategory')
		];

		$insert = $this->Book_model->bookAdd($data);
		echo json_encode(["status" => true]);
	}

	public function ajaxEdit($id)
	{
		$data = $this->Book_model->getById($id);
		echo json_encode($data);
	}

	public function bookUpdate()
	{
		$data = [
			'book_isbn' => $this->input->post('bookIsbn'),
			'book_title' => $this->input->post('bookTitle'),
			'book_author' => $this->input->post('bookAuthor'),
			'book_category' => $this->input->post('bookCategory')
		];

		$this->Book_model->bookUpdate(
			[
				'book_id' => $this->input->post('bookId')
			],
			$data
		);

		echo json_encode(["status" => true]);
	}

	public function bookDelete($id)
	{
		$this->Book_model->deleteById($id);
		echo json_encode(["status" => true]);
	}
}

/* End of file Book.php */
