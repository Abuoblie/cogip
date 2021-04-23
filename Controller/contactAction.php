<?php
require_once "../Model/ProcessHandler.php";

class ContactAction extends Handle
{

 



        public function validatePeople()
        {


                if ($this->getPeople('email', $_POST['email'])) {
                        echo "contact exist in database";
                } else {

                        $firstName = null;
                        $lastName = null;
                        $pswd = null;
                        $email = null;
                        $id_Company = null;
                        $Telephone =  null;
                        $regex = "/^[a-zA-Z\s.]+$/";

                        if (preg_match($regex, $_POST['firstName'])) {
                                $firstName = htmlentities(trim(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING)));
                        } else {
                                echo "invalid data";
                                echo " contact was not created please correct the mistakes and resubmit";
                        }

                        if (preg_match($regex, $_POST['lastName'])) {
                                $lastName = htmlentities(trim(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING)));
                        } else {
                                echo "invalid data";
                        }


                        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
                        } else {
                                echo "invalid data";
                        }


                        if (preg_match('/^[\d\s]+$/', $_POST['id_company'])) {
                                $id_company = intval(htmlentities(trim(filter_var($_POST['id_company'], FILTER_SANITIZE_STRING))));
                        } else {
                                echo "invalid data";
                                echo " contact was not created please correct the mistakes and resubmit";
                        }

                        if (preg_match("/^[\w\s.]+$/", $_POST['telephone'])) {
                                $Telephone = htmlentities(trim(filter_var($_POST['telephone'], FILTER_SANITIZE_STRING)));
                        } else {
                                echo "invalid data";
                                echo " contact was not created please correct the mistakes and resubmit";
                        }

                        // ce lui si est la dernier version


                        if (empty($id_company) || empty($firstName) || empty($lastName) || empty($email) || empty($Telephone)) {
                                echo "<br> contact was not created please correct the mistakes and resubmit";
                        } else {

                                $this->insertPeople($firstName, $lastName, $email, null, $id_company,  $Telephone);

                                echo "<br> contact successfully created";
                        }
                }
        }


       
      
}
