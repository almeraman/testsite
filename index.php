<?php include 'header.php'?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 style="margin-top:5%">Fill out form</h3>
                <form action="createuser.php" method="post" style="margin-top:3%">
                
                <label class="form-group col-lg-2 col-xs-offset-1">Name</label>
                <input type="text" class="form-group col-lg-2" name="name" placeholder="name" required style="margin-right:5%">
                
                <label class="form-group col-lg-2">E-mail</label>
                <input type="email" class="form-group col-lg-2" name="email" placeholder="d@d.com" required style="margin-right:5%">
                
                <label class="form-group col-lg-2 col-xs-offset-1">Address</label>
                <input type="text" class="form-group col-lg-2" name="address" placeholder="address" style="margin-right:5%">
                
                <label class="form-group col-lg-2">Phone</label>
                <input type="number" class="form-group col-lg-2" name="phone" placeholder="08x xxxxxxx" style="margin-right:5%">
           		
                <button class="btn-sm btn-primary form-group col-lg-2 btn-mine" type="submit">Submit</button>
                
                </form>
            </div>
            
        </div>
        <!-- /.row -->
    </div>
    
    <script type="text/javascript">
	function validate(){
			
	}
	</script>
    <!-- /.container -->
<?php include 'footer.php'?>
    