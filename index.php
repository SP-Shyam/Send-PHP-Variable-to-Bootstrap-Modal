<?php
//database connection
$con=mysqli_connect("localhost","username","password","database_name");

$find="select *from customer where cid='$cid'";
$find1=mysqli_query($con,$find);
$find2=mysqli_fetch_assoc($con,$find1);
?>

<html>
  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  </head>
  <body>
  
  <!----Button----->
  <button class="btn btn-success feed-id" type="button" data-toggle="modal" data-target="#myModal" data-id="<?php echo $find2['id']; ?>">Get Contact</button>
  
    <!-- The Modal -->
  <div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Fill up form below for enquiry and our Expert will contact you soon.</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post">
          	<input id="feed_id" name="cid" type="hidden" value="" />
          	
          	<label><strong>Your Name </strong><span>*</span></label>
          	<input type="text" class="form-control" name="name" placeholder="Your Name" required="" pattern="[A-Za-z ]{3,}">

          	<label><strong>Your Email </strong><span>*</span></label>
          	<input type="email" class="form-control" name="email" placeholder="Your Email" required="">

          	<label><strong>Your Phone </strong><span>*</span></label>
          	<input type="text" class="form-control" name="phone" placeholder="Your Phone" required="" pattern="[0-9]{10}">

          	<br>

          	<input type="submit" name="send" value="SEND" class="btn btn-warning btn-block">

          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  <!-----Ajax/Jquery Code----------->
  <script type="text/javascript">

  	$(document).ready(function () {
$('body').on('click', '.feed-id',function(){
document.getElementById("feed_id").value = $(this).attr('data-id');
console.log($(this).attr('data-id'));
});
});
  </script>
  </body>
</html>
