<?php

class NwicodeExample_Mobile_ViewController extends Application_Controller_Mobile_Default {


    public function findAction() {


        if($value_id = $this->getRequest()->getParam('value_id')) {

            try {
			
				$option = $this->getCurrentOptionValue();
				$example = (new NwicodeExample_Model_NwicodeExample())->find(["value_id" => $value_id]);

		
				
				
				
                $data = array(
                    "example" => $example->getData(),
					"page_url" => $page_url
                );
            }
            catch(Exception $e) {
                $data = array('error' => 1, 'message' => $e->getMessage());
            }

        }else{
            $data = array('error' => 1, 'message' => p__('nwicodeexample','An error occurred during process. Please try again later.'));
        }

        $this->_sendHtml($data);

    }


}