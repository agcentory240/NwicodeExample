<?php
class NwicodeExample_Form_Form extends Nwicode_Form_Abstract
{
    public function init() {

		parent::init();
		
        $this
			->setAction(__path("/nwicodeexample/application/editpost"))
			->setAttrib("id", "nwicodeexample");
		self::addClass('create', $this);
		

		$this->addSimpleHtml("breakline","<br>");			
		$this->addSimpleText('title', p__('nwicodeexample','Title'));
		$this->addSimpleText('message', p__('nwicodeexample','Message'));
		

        $value_id = $this->addSimpleHidden("value_id");
        $value_id->setRequired(true);

        $nwicodeexample_id = $this->addSimpleHidden("chat_id");
        $nwicodeexample_id->setRequired(true);

		$this->addSubmit(p__('nwicodeexample','Save'));
	}

}