<?php
namespace App\Controllers;
defined('BASEPATH') OR exit('No direct script access allowed');
class Stripe extends CI_Controller {
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->helper('url');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function payment()
    {
        
        require_once('application/libraries/stripe-php/init.php');
     
        $stripeSecret = 'sk_test_51GyCeJKr4zKjhmBG2IwNwWp7OTjtfHQeLHdjDW4of8DqVJWCCsrYnMbu60gVWRRauaPECsdiNofZFxdu31EhLcE800G6I5nyHD';
 
        \Stripe\Stripe::setApiKey($stripeSecret);
            
        try {
        $stripe = \Stripe\Charge::create ([
            "amount" => $this->input->post('amount'),
            "currency" => "usd",
            "source" => $this->input->post('tokenId'),
            "description" => "Monthly plan subscription"
        ]);
        // after successfull payment, you can store payment related information into your database
            
        $data = array('success' => true, 'data'=> $stripe);
        } catch (\Throwable $th) {
            echo json_decode($th->getMessage());
        }
    }
}