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
             }
     }

        public function validatePeople()
        {       
                
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
                                $pswd =sha1($_POST['pswd']);

                                if (preg_match("/^[\w\s.]+$/", $_POST['firstName'])) {
                                        $firstName = htmlentities(trim(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING)));
                                } else {
                                        header("Location: ../login.php? fname= invalid");
                                        exit();
                                }
                                if (preg_match("/^[\w\s.]+$/", $_POST['lastName'])) {
                                        $lastName = htmlentities(trim(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING)));
                                } else {
                                        header("Location: ../login.php?lname= invalid");
                                        exit();
                                }
                                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
                                        

                                } else {
                                        header("Location: ../login.php?email= invalid");
                                        exit();
                                }
                                if (preg_match('/^\d+$/', $_POST['id_company'])) {
                                        $id_company = htmlentities(trim(filter_var($_POST['id_company'], FILTER_SANITIZE_NUMBER_INT)));
                                } else {
                                        header("Location: ../login.php? id_company= invalid");
                                        exit();
                                }

                                if (preg_match("/^[\w\s.]+$/", $_POST['Telephone'])) {
                                        $Telephone = htmlentities(trim(filter_var($_POST['Telephone'], FILTER_SANITIZE_STRING)));
                                } else {
                                        header("Location: ../login.php? fname= invalid");
                                        exit();
                                }


                                if (empty($_GET['fname']) && empty($_GET['lname']) && empty($_GET['id_company']) && empty($_GET['email'])) {
                                        $this->insertPeople($firstName, $lastName, $email, $pswd, $id_Company,  $Telephone);
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
                                        header("Location: ../login.php? name= invalid");
                                        exit();
                                }
                                if (preg_match("/^[\w\s\d\.]+$/", $_POST['country'])) {
                                        $country = htmlentities(trim(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING)));
                                } else {
                                        header("Location: ../login.php?country= invalid");
                                        exit();
                                }
                                if (preg_match("/^[\w\s\d\.]+$/", $_POST['vat'])) {
                                        $vat = htmlentities(trim(filter_var($_POST['vat'], FILTER_SANITIZE_STRING)));
                                } else {
                                        header("Location: ../login.php? vat= invalid");
                                        exit();
                                }
                             
                                if (preg_match('/^\d+$/', $_POST['id_Type'])) {
                                        $id_Type = htmlentities(trim(filter_var($_POST['id_Type'], FILTER_SANITIZE_NUMBER_INT)));
                                } else {
                                        header("Location: ../login.php? id_Type= invalid");
                                        exit();
                                }
                                if (empty($_GET['name']) && empty($_GET['country']) && empty($_GET['id_Type']) && empty($_GET['vat'])) {
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
                                        header("Location: ../create.php? number= invalid");
                                        exit();
                                }

                                if (preg_match("/^[\w\s\d\-]+$/", $_POST['invoice_date'])) {
                                        $invoice_date = htmlentities(trim($_POST['invoice_date']));
                                } else {
                                        header("Location: ../login.php?invoice_date= invalid");
                                        exit();
                                }
                               
                             
                                if (preg_match('/^\d+$/', $_POST['id_People'])) {
                                        $id_Type = htmlentities(trim(filter_var($_POST['id_Type'], FILTER_SANITIZE_NUMBER_INT)));
                                } else {
                                        header("Location: ../login.php? id_People= invalid");
                                        exit();
                                }
                                
                                if (empty($_GET['number']) && empty($_GET['invoice_date']) && empty($_GET['id_People'])) {
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
     

