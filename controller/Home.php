<?php

require_once(__DIR__.'/../core/J_Controller.php');
require_once(__DIR__.'/../model/M_model.php');

class Home extends J_Controller
{
    function __construct()
    {
        $this->mModel = new M_model();
    }

    function index_get()
    {
        
        $data['content'] = "Welcome To J-MVC (Jobayed)";
        $this->load_view('home',$data);
    }

    function hello_get(...$args)
    {
        echo "Hello, World! from GET";
	}

    function order_post()
    {
        //$randomSalt = '$5$rounds=5000$usesomesillystringforsalt$' ;
        // original password
        /*var_dump($password);

        $verify = hash('sha512', $_password);
        $verify = password_verify($verify, $password);

        var_dump($verify);*/
        $_p = $_POST["receipt_id"];
        $password = hash('sha512', $_p);
        $hash_key = password_hash($password, PASSWORD_DEFAULT);

        $amount = trim(htmlspecialchars($_POST['amount-number']));
        $amount = filter_var($amount, FILTER_VALIDATE_INT);

        $buyer = trim(htmlspecialchars($_POST['buyer']));
        $receipt_id = trim(htmlspecialchars($_POST['receipt_id']));
        $items= trim(htmlspecialchars($_POST['items']));

        $email = trim(htmlspecialchars($_POST['email']));
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        $note = trim(htmlspecialchars($_POST['note']));
        $city = trim(htmlspecialchars($_POST['city']));

        $phone = trim(htmlspecialchars($_POST['phone']));
        $phone = filter_var($phone, FILTER_VALIDATE_INT);

        $entry_by = trim(htmlspecialchars($_POST['entry_by']));
        $entry_by = filter_var($entry_by, FILTER_VALIDATE_INT);

        $orderData = array(
            
            "amount"      =>    $amount,
            "buyer"       =>    $buyer,
            "receipt_id"  =>    $receipt_id,
            "items"       =>    $items,
            "buyer_email" =>    $email,
            "buyer_ip"    =>    getenv("REMOTE_ADDR"),
            "note"        =>    $note,
            "city"        =>    $city,
            "phone"       =>    $phone,
            "hash_key"    =>    $hash_key,//crypt(,$randomSalt ),
            "entry_at"    =>    date("Y/m/d"),
            "entry_by"    =>    $entry_by
            
        );
        

        $ret = $this->mModel->createOrder($orderData);
        
        if($ret) echo "New Record Successfully Created.";
        else echo "Data insert was unsuccessful.";
    }

}

