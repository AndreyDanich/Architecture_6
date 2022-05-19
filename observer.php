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

class Subscriber implements IObserver
{
    public function handle()
    {
        subscribe($user);
    }
}

$user = [];
$manager = new Applicant();
$manager->attachObserver(
    new Subscriber()
);
$manager->detachObserver(
    new Subscriber()
);

function subscribe($user){}
