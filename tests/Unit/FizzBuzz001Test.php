<?php
namespace Tests\Unit;

use App\FizzBuzz001;
use PHPUnit\Framework\TestCase;
use Tests\FinalTest;

class FizzBuzz001Test extends TestCase
{
    // use FinalTest;

    protected $fizzBuzz;

    protected function setUp() : void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz001();
    }

    protected function tearDown() : void
    {
        parent::tearDown();
        $this->fizzBuzz = null;
    }

    /**
     * @test
     */
    public function execute_3_fizz()
    {
        //Arrange
        $number = 3;
        $expected = 'fizz';

        //Act
        $actual = $this->fizzBuzz->execute($number);

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function execute_4_4()
    {
        //Arrange
        $number = 4;
        $expected = $number;

        //Act
        $actual = $this->fizzBuzz->execute($number);

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function execute_5_buzz()
    {
        //Arrange
        $number = 5;
        $expected = 'buzz';

        //Act
        $actual = $this->fizzBuzz->execute($number);

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function execute_15_fizzbuzz()
    {
        //Arrange
        $number = 15;
        $expected = 'fizzbuzz';

        //Act
        $actual = $this->fizzBuzz->execute($number);

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @return mixed[][]
     */
    public function data()
    {
        return [
            '3-fizz' => [3, 'fizz'],
            '5-buzz' => [5, 'buzz'],
            '15-fizzbuzz' => [15, 'fizzbuzz'],
            '14-14' => [14, 14],
            '6-fizz' => [6, 'fizz'],
            '9-fizz' => [9, 'fizz'],
            '100-buzz' => [100, 'buzz'],

        ];
    }

    /**
     * @param int $number
     * @return int|string
     * @dataProvider data
     */
    public function testExecute($number, $expected)
    {
        //Arrange

        //Act
        $actual = $this->fizzBuzz->execute($number);

        //Assert
        $this->assertEquals($expected, $actual);
    }
}