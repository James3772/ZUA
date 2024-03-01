<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="icon" href="img/images.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php include 'header.php'; ?>

<section>
<div class="container">
      <form  action="https://formsubmit.co/kiariejames3772@gmail.com"  class="row form-container shadow-lg p-3 mb-5 bg-body-tertiary rounded" method="POST">
      <h2 class="title"><b>Contacts</b></h2>
        
      <div class="col-md-12">
        <div class="form-group">
          <label for="fullname"><h6>Full Name:</h6></label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
          <label for="email"><h6>Email:</h6></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
          <label for="tel"><h6>Phone Number:</h6></label>
          <input type="tel" class="form-control" id="tel" name="tel" placeholder="### ### ####" required>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
          <label for="subject"><h6>Subject:</h6></label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
        </div>
</div>
<div class="col-md-12">
        <div class="form-group">
          <label for="message"><h6>Message:</h6></label>
          <textarea class="form-control" id="message" name="message" rows="10" placeholder="Text" required></textarea>
        </div>
</div>
<div class="col-md-4">
        <button type="submit" class="btn btn-primary"style="background-color: #1C1D3C; color: #fff;">Submit</button>
      </form>
    </div>
</div>
</section>



<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>