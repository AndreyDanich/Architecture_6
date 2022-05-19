<?php

interface IObserver
{
    public function handle();
}

class Applicant
{
    protected array $observers = [];
    
    public function register($user)
    {
        $this->notify();
        return true;
    }

    public function attachObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detachObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }
}

class Subscribe implements IObserver
{
    public function handle()
    {
        subscribe($user);
    }
}

$user = [];
$manager = new Applicant();
if($manager->register($user)){
    subscribe($user);
}