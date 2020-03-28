 <?php

class FileUploadController extends AppController {
	public function index() {
		$this->set('title', __('File Upload Answer'));

		$files = $_FILES['data'];

		$webroot = $this->request->webroot;
		//$file = $this->data['FileUpload']['file'];

		$file = basename($files['name']['FileUpload']['file']);
		$tmp_name = $files['tmp_name']['FileUpload']['file'];


		$upload = move_uploaded_file($tmp_name, $webroot . "files/" . $file);

		$file_uploads = $this->FileUpload->find('all');
		$this->set(compact('file_uploads'));
	}
}