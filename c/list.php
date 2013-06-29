<?

class listC extends c {
	public function index() {
		/*
		$tag = $this->v['tag'] = @$_GET['tag'];
		if(empty($tag)) {
			header('Location: ' . $this->config['base']);
		}
		*/

		//$this->getItem($tag, $location);
	}

	public function getItem($query) {
		//$apiUrl = sprintf($this->config['apiUrl'], 'job/list', 'jobfield=2172&keyword='.$tag.'&location='.$location);

		//sleep(1);
		$r = $this->config['fakeJobs']; // cache read
		//die(base64_encode(file_get_contents($apiUrl))); // cache write
		//$r = unserialize(file_get_contents($apiUrl)); // live

		$this->v['items'] = $r['data'];
	}
}