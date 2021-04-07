<?php 
  require_once "header.php";
?>
<div class="container-md">
    <?php 
      require_once "contactPageDetails.php";
    ?>
    <div class="row justify-content-center">
        <form action="" method="POST">
        	
            <div  style="width: 30%;height: 30%;position: relative;margin-left: auto;margin-right: auto;">
                <div class="form-group mb-2"> 
                    <label class="control-label" for="surname">Surname:</label>
                    <input type="text" id="surname" required maxlength="48"   
                     name="surname" class="form-control" value="" placeholder="Enter your Surname"> 
                </div>
                <div class="form-group mb-2"> 
                    <label class="control-label" for="firstName">First Name:</label>
                    <input type="text" id="firstName" required maxlength="48"   
                     name="firstName" class="form-control" value="" placeholder="Enter your First Name"> 
                </div>
                <div class="form-group mb-2"> 
                    <label class="control-label" for="phoneNumber">Phone Number:</label>
                    <input type="text" id="phoneNumber" required maxlength="48"   
                     name="phoneNumber" class="form-control" value="" placeholder="Enter your Phone Number"> 
                </div>
                <div class="form-group mb-2"> 
                    <label class="control-label" for="price">Email:</label>
                    <input type="text" id="email" required maxlength="48"   
                     name="email" class="form-control" value="" placeholder="Enter your Email"> 
                </div>
                <div class="form-group mb-2"> 
                    <label class="control-label" for="company">Company:</label>
                    <input type="text" id="company" required maxlength="48" 
                     name="company" class="form-control" value="" placeholder="Enter your Company"> 
                </div>
                
                <div class="form-group">  
                    <button type="submit"  class="btn btn-primary" name="save">Save</button>  
                </div>
            </div>
        </form>
      </div>
</div>
      

<?php 
  require_once "footer.php";
?>