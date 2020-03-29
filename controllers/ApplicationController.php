<?php

class NwicodeExample_ApplicationController extends Application_Controller_Default
{

    public function viewAction() {
        $this->loadPartials();
    }

    public function loadAction(){
        $payload = [
            'title' => __('Nw'),
            'icon' => 'fa-cogs',
        ];

        $this->_sendJson($payload);
    }

    public function editpostAction()
    {
        $request = $this->getRequest();
        $values = $request->getPost();

        try {

			$option = $this->getCurrentOptionValue();

			$nwicodeexample = (new NwicodeExample_Model_NwicodeExample())
				->find($values['value_id'], 'value_id');

			$nwicodeexample->setData($values);


			$nwicodeexample->save();



			$payload = [
                  'success' => '1',
                    'success_message' => p__('nwicodeexample','Info successfully saved'),
                    'message_timeout' => 2,
                    'message_button' => 0,
                    'message_loader' => 0
			];

        } catch (Exception $e) {
            $payload = [
                'error' => true,
                'message' => $e->getMessage()
            ];
        }

        $this->_sendJson($payload);
    }
	
}