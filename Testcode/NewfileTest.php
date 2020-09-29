<?php

use Phpunit\Framework\TestCase;

class NewfileTest extends TestCase
{
    public function testUsernname()
    {
        require 'Newfile.php';
        $newfile = new newfile;
        $newfile->first_name = "Iftekhar kabir";
        $newfile->lastname = "chowdhury";
        $this->assertEquals("Iftekhar kabir chowdhury", $newfile->getUsername());
    }
    public function testgetmail()
    {
        $newfile= new Newfile;
        $newfile-> email="Iftekhar.kabirchowdhury.@bracu.ac.bd";
        $this->assertEquals("Iftekhar.kabirchowdhury.@bracu.ac.bd", $newfile->getEmail());
    }
    public function testsetpaitent()
    {
        $newfile= new Newfile;
        $newfile->first_name = "Iftekhar kabir";
        $newfile->lastname = "chowdhury";
        $newfile-> email="Iftekhar.kabirchowdhury.@bracu.ac.bd";
        $newfile->disease="Diaria";
        $newfile->admission_date="28/09/2020";
        $this->assertEquals("Iftekhar kabir chowdhury Iftekhar.kabirchowdhury.@bracu.ac.bd Diaria 28/09/2020",$newfile->setPaitent());

    }
    public function testsetdoctor()
    {
        $newfile= new Newfile;
        $newfile->first_name = "Dr.hossain";
        $newfile->lastname = "mahmud";
        $newfile-> email="Dr.hossain mahmud@gmail.com";
        $newfile->specialist="Medicine";
        $newfile->time=9.45;
        $this->assertEquals("Dr.hossain mahmud Dr.hossain mahmud@gmail.com Medicine 9.45 ",$newfile->setdoctor());

    }

    public function testgetdoctor()
{
    $newfile= new Newfile;
    $newfile-> doctor="Is avaible";
    $this->assertEquals("Is avaible",$newfile->getdoctor());
}
    public function testInsertVehical()
    {
        $newfile= new Newfile;
        $newfile-> Vehical_name="Suziki";
        $newfile-> company="Honda";
        $newfile-> date_of_service="28/09/2020";
        $newfile-> cost=1000000;
        $this->assertEquals("Suziki Honda 28/09/2020 1000000" ,$newfile->InsertVehical());
    }

    public function testposttransiction()
    {
        $newfile= new Newfile;
        $newfile->PayBill =5000;
        $newfile-> Payment_date="28/09/2020";
        $this->assertEquals("5000 28/09/2020",$newfile->posttransiction());

    }
public function testHospitalAssets()
{
    $newfile= new Newfile;
    $newfile->Items=200;
    $newfile->New_purchase=15;
        $newfile->date_of_service="28/09/2020";
         $this->assertEquals("200 15 28/09/2020 " ,$newfile->HospitalAssets());
}


}

