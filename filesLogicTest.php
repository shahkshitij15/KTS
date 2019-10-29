<?php
require 'filesLogic.php';

class filesLogicTest extends PHPUnit\Framework\TestCase
{
    private $files;

    public function testAdd()
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'file-management');

        $sql = "SELECT * FROM files";
        $result = mysqli_query($conn, $sql);

        $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

       $b=0;
       foreach ($files as $file):
            $b=$b+$file['downloads'];
        endforeach;
        
        $this->assertEquals(1, $b);

    }

    public function testCount()
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'file-management');

        $sql = "SELECT * FROM files";
        $result = mysqli_query($conn, $sql);

        $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

       $b=0;
       foreach ($files as $file):
            $b=$b+1;
        endforeach;
        
        $this->assertEquals(3, $b);
    }

    public function testDoc()
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'file-management');

        $sql = "SELECT * FROM files";
        $result = mysqli_query($conn, $sql);

        $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

       $b=0;
       foreach ($files as $file):
            if ($file['fname']=='DFD.docx')
            {
                $b=1;
            }
        endforeach;
        
        $this->assertEquals(1, $b);
    }
}
?>