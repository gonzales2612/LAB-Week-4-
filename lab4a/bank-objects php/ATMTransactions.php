<?
class ATMTransactions{
    public $transactionsid;
    public $date;
    public $amount;
    public $postbalance;




    public function modifies() {
        return false;
    }
}

?>