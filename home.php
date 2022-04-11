 <section id="bg-bus" class="d-flex align-items-center">
    <div class="container">
      <?php if(!isset($_SESSION['login_id'])): ?>
        <center>
      	<button class="btn btn-info btn-lg" type="button" id="book_now">Book Now</button></center>
      <?php else: ?>
        <center>
        <h2>Welcome to <i><b><u>n2n Booking System</u></b></i>, grab your tickets easily</h2>
        <h2>Travel and Explore</h2>
      </center>
      <?php endif; ?>
    </div>
  </section>
  <script>
  	$('#book_now').click(function(){
      uni_modal('Find Schedule','book_filter.php')
  })
  </script>