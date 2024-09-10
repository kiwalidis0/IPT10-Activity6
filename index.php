<?php
require "vendor/autoload.php";


use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


// create a log channel
$log = new Logger('ipt10');
$log->pushHandler(new StreamHandler('ipt10.log'));


// add records to the log
$log->warning('Gunter');
$log->error('gunther@auf.edu.ph');
$log->info('profile', [
    'student_number' => '22-2024-910',
    'college' => 'CCS',
    'program' => 'BSIT',
    'university' => 'Angeles University Foundation'
]);


class TestClass
{
	private $logger;
	public function __construct($logger_name)
	{
		$this->logger = new Logger($logger_name);
		// Log that the class has been created
		$this->logger->info(__FILE__ . " Class has been created");

	}


	public function greet($name)
	{
		// provide a greeting message with the name of the invoker
		// Log it
		$this->logger->info(__METHOD__ . " Greetings to {$name}");
        return "Greetings to {$name}" . "\n";
    }


    public function getAverage($data)
    {
        // Log the action
        $this->logger->info(__CLASS__ . " Get the average");

        // Compute the average and return it
        $average = array_sum($data) / count($data);
        return "The average is {$average}";
    }


    public function largest($data)
    {
        // Log the action
        $this->logger->info(__CLASS__ . " Get the largest number");

        // Compute the largest number and return it
        $largest = max($data);
        return $largest;
    }


    public function smallest($data)
    {
        // Log it
            $this->logger->info(__CLASS__ . " Get the smallest number");
        // compute the average and return it
        $smallest = min($data);
        return $smallest;
    }
}

$name = "Gunther";
$obj = new TestClass('ipt10');

echo $obj->greet($name);

$data = [100, 345, 4563, 65, 234, 6734, -99];

echo "   Average: " . $obj->getAverage($data) . "\n";
echo "   Smallest: " . $obj->smallest($data) . "\n";
echo "   Largest: " . $obj->largest($data) . "\n";

$log->info('data', ['data' => $data]);
$log->info('object', ['object' => 'Instance of TestClass']);