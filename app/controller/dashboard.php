<?php


namespace Controller;

class Dashboard extends Base {

    protected
        $response;

    /**
     * fetch data for an overview page
     */
    public function main($f3) {
        $this->response->data['LAYOUT'] = 'overview.html';
    }

}