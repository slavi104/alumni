<?php
 // Require the class that needs to be tested
 require_once 'BankAccount.php';

 // require all needed classes from the framework
 //require_once 'require.php';

/**
 * Class that tests the BankAccount class
 * RUN IT WITH phpunit -v BankAccountTest.php
 * @author @slavi 16 Oct 2014
 */
abstract class BankAccountTest extends PHPUnit_Framework_TestCase {
{   
    /**
     * @dataProvider fetchBankAccounts
     */
    public function testFetchBankAccounts($id, $name, $added, $currency) {
        
    }
    public static function fetchBankAccounts(){
      return array(
          array(1, 'Bank1', new fTimestamp(), 'USD'),
          array(2, 'Bank2', new fTimestamp(), 'EUR'),
          array(3, 'Bank3', new fTimestamp(), 'BGN'),
          array(4, 'Bank4', new fTimestamp(), 'JPY')
        );
    }

    public function testAddEntry()
    {
        $bank_account = new BankAccount();
        $bank_account->addEntry(1, 'Bank1', new fTimestamp(), 'USD');

        $queryTable = $this->getConnection()->createQueryTable(
            'bank_account', 'SELECT * FROM bank_account'
        );
        $expectedTable = $this->createFlatXmlDataSet("bankAccounts.xml")
                              ->getTable("bank_account");
        $this->assertTablesEqual($expectedTable, $queryTable);
    }
}
?>