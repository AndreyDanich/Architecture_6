<?php
interface ICommand {
    public function execute();
}

class СopyText implements ICommand
{
    public function execute()
    {

    }
}

class PasteText implements ICommand
{
    public function execute()
    {
        
    }
}

class СutText implements ICommand
{
    public function execute()
    {
      
    }
}

class Cancel implements ICommand 
{
    protected ICommand $cancelCommand;

    public function __construct(ICommand $cancelCommand)
    {
        $this->cancelCommand = $cancelCommand;
    }

    public function execute()
    {
        
    }
}

class Edit {
    public function run(ICommand $command)
    {
        $command->execute();
    }
}



$edit = new Edit();
$edit->run(new СopyText());
$edit->run(new PasteText());
$edit->run(new СutText());

