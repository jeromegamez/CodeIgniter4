<?php

namespace CodeIgniter\Database\Builder;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\Mock\MockConnection;

class EmptyTest extends CIUnitTestCase
{
    protected $db;

    //--------------------------------------------------------------------

    protected function setUp(): void
    {
        parent::setUp();

        $this->db = new MockConnection([]);
    }

    //--------------------------------------------------------------------

    public function testEmptyWithNoTable()
    {
        $builder = new BaseBuilder('jobs', $this->db);

        $answer = $builder->testMode()->emptyTable();

        $expectedSQL = 'DELETE FROM "jobs"';

        $this->assertEquals($expectedSQL, str_replace("\n", ' ', $answer));
    }

    //--------------------------------------------------------------------

}
