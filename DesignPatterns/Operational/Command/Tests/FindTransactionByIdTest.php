<?php

namespace DesignPatterns\Operational\Command\Tests;

use DesignPatterns\Operational\Command\FindTransactionById;
use DesignPatterns\Operational\Command\Repository\TransactionRepository;

/**
 * Class FindTransactionByIdTest
 * @package DesignPatterns\Operational\Command
 */
class FindTransactionByIdTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testFindCorrectId()
    {
        $expectedTransactionId = 1;
        $expectedRepositoryType = '\DesignPatterns\Operational\Command\Transaction\TransactionEntity';

        $transactionRepository = new TransactionRepository();
        $findTransactionById = new FindTransactionById($expectedTransactionId, $transactionRepository);
        $receivedTransactionEntity = $findTransactionById->execute();
        $this->assertInstanceOf($expectedRepositoryType, $receivedTransactionEntity);
        $this->assertEquals($expectedTransactionId, $receivedTransactionEntity->transactionId);
    }
}
