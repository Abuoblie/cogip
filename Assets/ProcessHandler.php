<?php 
require_once "DbConnection.php";
session_start();

class Handle extends dbh{
        


        public function getLogin($email, $password)
        {
                $sql = "SELECT * FROM People where email= ? and password = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt-> execute([$email, $password]);
                if ($row = $stmt->fetch()) {
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name']  = $row['last_name'];
                }

                
        }
       
        //This page will display a list of all the invoices from the most recent to the oldest. Each invoice number will be a link to a new page detailing the invoice, the content will be generated with the ID of the chosen invoice.
        public function getInvoice($condition , $check)
        {
                $sql = "SELECT * FROM Invoice where $condition =?  ORDER by id_Invoice DESC";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$check]);
                $result = $stmt -> fetchAll();  
                return $result;     
        }
       
       
        //Contacts page
        //This page will display a list of all the contacts in alphabetical order.
        // Each contact name will be a link to a new page detailing the contact, the content will be generated with the ID of the chosen contact.

        public function getPeople($condition , $check)//order by id desc limit 5
        {
                $sql = "SELECT * FROM People where $condition =?  ORDER by last_name, first_name";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$check]);
                $result = $stmt -> fetchAll();  
                return $result;  
                
        }

        // 2This page will display a list of all companies in alphabetical order. The name of the company will be a link to a new page detailing the company, the content will be generated with the ID of the chosen company.

        

        public function getCompanies($condition , $check)
        {
                $sql = "SELECT * FROM Company where $condition =?  ORDER by name";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$check]);
                $result = $stmt -> fetchAll();  
                return $result; 
                
        }
        // 3Providers page
         //This page will display a list of all providers in alphabetical order. The name of the provider will be a link to a new page detailing the provider, the content will be generated with the ID of the chosen provider. (same detailing page as for companies)

         public function getProviders($condition , $check)
         {
                 $sql = "SELECT * FROM Company as c join Type t on c.id_Type = t.id_Type where $condition =?  ORDER by name";
                 $stmt = $this->connect()->prepare($sql);
                 $stmt->execute([$check]);
                 $result = $stmt -> fetchAll();  
                 return $result; 
                 
         }


        public function update($TABLE, $Attribute, $condition , $check)//order by id desc limit 5
        {
                $sql = "UPDATE $TABLE  SET $Attribute where $condition=?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$check]);
                
        }
        public function delete($TABLE, $condition , $check)//order by id desc limit 5
        {  
                $sql = "DELETE FROM $TABLE where $condition = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$check]);
                
        }

        public function insert($TABLE, $Attribute, $condition , $check)//order by id desc limit 5
        {
                $sql = "INSERT INTO $TABLE  $Attribute where $condition=?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$check]);
                
        }



        



}

