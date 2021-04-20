<?php 
require_once "ProcessHandler.php";
 




 class Validation extends Handle{
    
     protected $regex = "/^[\w\s\d\.]+$/";
     public function login()
     {
             if (isset($_POST['submit'])) {
                     if ($this->getPeople('pswd', sha1($_POST['id_People']))) {
                           $_SESSION['id']  = $_POST['id_People'];
                     }
             }
             else {
                     echo " invalid login";
                     header("location: login.php");
             }
     }

     
     
     
        public function validatePeople()
        {       
            var_dump($_POST); 
            
                if (isset($_POST['submit'])) {
                    
                    if ($this->getPeople('email', $_POST['email'])) {
                                echo "contact exist in database";
                        } else {
                                $firstName = null;
                                $lastName= null;
                                $pswd = null;
                                $email = null;
                                $id_Company = null;
                                $Telephone =  null;
                               

                                if (preg_match("/^[\w\s.]+$/", $_POST['firstName'])) {
                                        $firstName = htmlentities(trim(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                                if (preg_match("/^[\w\s.]+$/", $_POST['lastName'])) {
                                        $lastName = htmlentities(trim(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
                                        

                                } else {
                                        echo "invalid data";;
                                        exit();
                                }
                                if (preg_match('/^\d+$/', $_POST['id_company'])) {
                                        $id_company = htmlentities(trim(filter_var($_POST['id_company'], FILTER_SANITIZE_NUMBER_INT)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }

                                if (preg_match("/^[\w\s.]+$/", $_POST['Telephone'])) {
                                        $Telephone = htmlentities(trim(filter_var($_POST['Telephone'], FILTER_SANITIZE_STRING)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }


                                if ($firstName && $lastName && $email && $pswd && $id_Company &&  $Telephone) {
                                        $this->insertPeople($firstName, $lastName, $email, null, $id_Company,  $Telephone);
                                        echo "contact successfully created";
                                }
                                else {
                                     echo " contact was not created please correct the mistakes and resubmit";
                                }

                        }
                }
        }


        public function validateCompany()
        {       
                
                if (isset($_POST['submit'])) {
                        if ($this->getPeople('vat', $_POST['vat'])) {
                                echo "Company exist in database";
                        } else {
                                $name = null;
                                $country= null;
                                $vat = null;
                                $id_Type = null;
                               

                                if (preg_match("/^[\w\s\d\.]+$/", $_POST['name'])) {
                                        $name = htmlentities(trim(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                                if (preg_match("/^[\w\s\d\.]+$/", $_POST['country'])) {
                                        $country = htmlentities(trim(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                                if (preg_match("/^[\w\s\d\.]+$/", $_POST['vat'])) {
                                        $vat = htmlentities(trim(filter_var($_POST['vat'], FILTER_SANITIZE_STRING)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                             
                                if (preg_match('/^\d+$/', $_POST['id_Type'])) {
                                        $id_Type = htmlentities(trim(filter_var($_POST['id_Type'], FILTER_SANITIZE_NUMBER_INT)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                                if ($name && $country && $vat && $id_Type) {
                                        $this->insertCompany($name, $country, $vat, $id_Type);
                                        echo "contact successfully created";
                                }
                                else {
                                     echo " contact was not created please correct the mistakes and resubmit";
                                }

                        }
                }
        }

        public function validateInvoice()
        {       
                
                if (isset($_POST['submit'])) {
                        if ($this->getPeople('number', $_POST['number'])) {
                                echo "invoice number exist in database";
                        } else {
                                $number = null;
                                $invoice_date= null;
                                $id_People = null;
                               

                                if (preg_match("/^[\w\s\d\.]+$/", $_POST['name'])) {
                                        $number = htmlentities(trim(filter_var($_POST['$number'], FILTER_SANITIZE_STRING)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }

                                if (preg_match("/^[\w\s\d\-]+$/", $_POST['invoice_date'])) {
                                        $invoice_date = htmlentities(trim($_POST['invoice_date']));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                               
                             
                                if (preg_match('/^\d+$/', $_POST['id_People'])) {
                                        $id_Type = htmlentities(trim(filter_var($_POST['id_Type'], FILTER_SANITIZE_NUMBER_INT)));
                                } else {
                                        echo "invalid data";
                                        exit();
                                }
                                
                                if ($number && $invoice_date && $id_People) {
                                        $this->insertInvoice($number, $invoice_date, $id_People);
                                        echo "contact successfully created";
                                }
                                else {
                                     echo " contact was not created please correct the mistakes and resubmit";
                                }

                        }
                }
        }


        
}
     

