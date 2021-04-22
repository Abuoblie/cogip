<?php
require_once "../Model/ProcessHandler.php";







class Validation extends Handle
{

       

    
     
   public function validateCompany(){

               
                if ($this->getCompanies('vat', $_POST['vat'])) {
                        
                        echo "<h4 style='text-align: center;'>Company exist in database</h4>";
                } 
                else {
                        $name = null;
                        $country = null;
                        $vat = null;
                        $id_Type = null;
                        $phone = null;


                        if (preg_match("/^[\w\s\.]+$/", $_POST['name'])) {
                        
                                $name = htmlentities(trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING)));
                                
                                if (preg_match("/^[\w\s\.-]+$/", $_POST['country'])) {
                                        $country = htmlentities(trim(filter_var($_POST['country'], FILTER_SANITIZE_STRING)));
                                        
                                        if (preg_match("/^[\w\s\.]+$/", $_POST['vat'])) {
                                                $vat = htmlentities(trim(filter_var($_POST['vat'], FILTER_SANITIZE_STRING)));
                                                
                                                if (preg_match('/^\d+$/', $_POST['id_Type'])) {
                                                        $id_Type = htmlentities(trim(filter_var(intval($_POST['id_Type']), FILTER_SANITIZE_NUMBER_INT)));
                                                        
                                                        if(preg_match("/^[0-9\s\-]+$/",$_POST['phone'])){
                                                                
                                                                if (empty($name) || empty($country) || empty($vat ) || empty($id_Type)) {

                                                                        echo "<h4 style='text-align: center;'> company was not created  a required field is empty please correct the mistakes and resubmit</h4>";
                                                                } else {
                                                                        $this->insertCompany($name, $country, $vat, $id_Type);
                        
                                                                        echo "<h4 style='text-align: center;'>company successfully created</h4> ";
                                                                }
                                                              


                                                        }
                                                        else{
                                                                echo "<h4 style='text-align: center;'>invalid phone number</h4>";
                                                                echo "<h4 style='text-align: center;'>contact was not created please correct the mistakes and resubmit</h4>";
                                                        }

                                                        


                                                } 
                                                else {
                                                        echo "<h4 style='text-align: center;'>invalid type please select type</h4>";
                                                
                                                        echo "<h4 style='text-align: center;'>contact was not created please correct the mistakes and resubmit</h4>";
                                                       
                                                }
                                               


                                        } 
                                        else {
                                                echo "<h4 style='text-align: center;'>invalid vat number</h4>";
                                                echo "<h4 style='text-align: center;'>contact was not created please correct the mistakes and resubmit</h4>";
                                                
                                        }
                
                                        



                                 } 
                                else {
                                        echo "<h4 style='text-align: center;'>invalid country</h4>";
                                        echo "<h4 style='text-align: center;'>contact was not created please correct the mistakes and resubmit</h4>";
                                       
                                }
                

                         } 
                         else {
                               
                                echo "<h4 style='text-align: center;'>invalid name</h4>";
                                echo "<h4 style='text-align: center;'>contact was not created please correct the mistakes and resubmit</h4>";
                                
                         }
                        
                }
        }


     
}
