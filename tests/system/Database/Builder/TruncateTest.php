<?php

namespace CodeIgniter\Database\Builder;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\Mock\MockConnection;

class TruncateTest extends CIUnitTestCase
{
    protected $db;

    //--------------------------------------------------------------------

    protected function setUp(): void
    {
        parent::setUp();

        $this->db = new MockConnection([]);
    }

    //--------------------------------------------------------------------

    public function testTruncate()
    {
        $builder = new BaseBuilder('user', $this->db);

        $expectedSQL = 'TRUNCATE "user"';

        $this->assertEquals($expectedSQL, $builder->testMode()->truncate());
    }

    //--------------------------------------------------------------------

}
