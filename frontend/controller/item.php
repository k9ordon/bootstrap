<?

class Controller_Item extends Controller {

	public function Action_Index() {
		$this->getItem();
		$this->render('item-index');
	}

	public function getItem() {
		$this->item = $this->config['fake']['item'];
	}
}