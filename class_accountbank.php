<?php
    require_once 'class_bank.php';
    class BankAccount extends Account {
    // tambahkan data baru customer 
    public $customer;
    static $biaya_admin = 6500;

    function __construct($no, $saldo_awal, $cust) { 
        // panggil constructor parent class 
        parent::__construct($no, $saldo_awal); 
        $this->customer = $cust;
    }

    // tulis ulang method
    function cetak()
    {
        parent::cetak();
        echo '<br> Customer : ' .$this->customer;
        echo '<br> Saldo : ' .$this->getSaldo();
    }

    function transfer($obj_account,$uang) { 
        $obj_account->deposit($uang);
            $this->witdrawl($uang);
            $this->witdrawl(self::$biaya_admin);
    }

}