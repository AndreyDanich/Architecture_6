<?php
interface PayInterface {
    public function pay();
}

class QiwiPay implements PayInterface
{
    public function pay()
    {

    }
}

class YandexPay implements PayInterface
{
    public function pay()
    {
        
    }
}

class WebMoneyPay implements PayInterface
{
    public function pay()
    {
      
    }
}

class Payment {
    protected PayInterface $payStrategy;

    public function __construct(PayInterface $payStrategy)
    {
        $this->payStrategy = $payStrategy;
    }

    public function run()
    {
        $users = $this->getUsers();
        foreach ($users as $user){
            $this->payStrategy->pay();
        }
    }

    protected function getUsers() {
        return [];
    }
}

$manager = new Payment(
    new YandexPay()
);

$manager->run();