

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Insert a record</h3>
                    </div>
             
                    <form class="form-horizontal" action="../controller/controller.php" method="post">
                    
                      <div class="control-group ">
                        <label class="control-label">Id User</label>
                        <div class="controls">
                            <input name="iduser" type="text"  placeholder="Any numeric code" value="">
                            
                                <span class="help-inline"> </span>
                            
                        </div>
                      </div>

                      
                      <div class="control-group">
                        <label class="control-label">Full Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Full name" value="">
                           
                                <span class="help-inline"> </span>
                           
                        </div>
                      </div>
                      <div class="form-actions">
                         <input type="submit" class="btn btn-success" name="btncreate" id="btnc" value="Create" />
                        
<!--
 <button type="submit" class="btn btn-success" id="btn">Create</button>
                          <a class="btn btn-modalbox" href="../index.php">Back</a>
-->

                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>