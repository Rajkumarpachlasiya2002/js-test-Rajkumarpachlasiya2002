<?php include ("header.php");?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add ProductS</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD PRODUCT
                        </div>
                        <div class="panel-body">
						
						
	<?php
	$id=$_GET["id"];

include("config.php");
$select="select * from  tbl_product where `id` = '".$id."'";
$result=mysql_query($select);
$row=mysql_fetch_array($result);


	

?>
						
						
                            <form role="form" action="update.php" method="post">
                                        <div class="form-group">
										
										
										<label>id</label>
                                            <input name="id" class="form-control" type="hidden" value="<?php echo $row ["id"];?>"></input>
                                            
											
											
                                            <label>category</label>
                                            <input name="a" class="form-control" type="text" value="<?php echo $row ["category"];?>"></input>
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>product </label>
                                            <input name="b" class="form-control" type="text"
											value="<?php echo $row ["product"];?>"></input>
                                                                             </div>
                                            <div class="form-group">
                                            <label>price</label>
                                             <input name="c" class="form-control" type="text"
											 value="<?php echo $row ["price"];?>"></input>
                                        </div>
										<div class="form-group">
                                            <label>selling price</label>
                                             <input name="d" class="form-control" type="text"
											 value="<?php echo $row ["selling price"];?>"></input>
                                        </div>
										
										<div class="form-group">
                                            <label> image</label>
                                             <input name="imgName" class="form-control" type="file"  value="<?php echo $row ["image"];?>">
                                        </div>
										 
                                  
                                 
                                        <button type="submit" class="btn btn-info">SAVE</button>

                                    </form>
                            </div>
                        </div>
                            </div>

             
                             </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
<?php
include("config.php");
$select="select*from tbl_show";
$result=mysql_query($select);
while(
$row=mysql_fetch_array($result))

?>
