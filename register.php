<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="icon" href="img/images.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    
   
</head>
<body>
<?php include 'header.php'; ?>




<section>
    <div class="container"> 
      <form action="record.php" class="row form-container shadow-lg p-3 mb-5 bg-body-tertiary rounded" method="POST">
      <h2 class="title"><b>Zetech Alumni Membership Registration Form</b></h2><br><br><br>
        <div class="col-md-6">
          <div class="form-group">
            <label for="name"><h6>Full Name:</h6></label>
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="email"><h6>Email:</h6></label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email" required><br><br>
          </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
        <label for="tel"><h6>Telephone Number:</h6></label>
      <input type="text" id="tel" name="tel"class="form-control" placeholder="### ### ####" required><br><br>
        </div>
       </div>

       <div class="col-md-6">
        <div class="form-group">
        <label for="id_number"><h6>ID Number/Passport Number:</h6></label>
      <input type="text" id="id_number" name="id_number" class="form-control" placeholder="### ### ####" required><br><br>
        </div>
       </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="title"><h6>Title eg Prof, Dr.:</h6></label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Title" required><br><br>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
          <label for="passing_year"><h6>Year of Graduation:</h6></label>
          <select id="passing_year" name="passing_year" class="form-control" required>
            <option value="1stgroup">1999-2002</option>
            <option value="2ndgroup">2003-2006</option>
            <option value="3rdgroup">2007-2010</option>
            <option value="4thgroup">2011-2014</option>
            <option value="5thgroup">2015-2018</option>
            <option value="6thgroup">2019-2022</option>
            <option value="7thgroup">2023-2026</option>
          </select>
        </div>
       </div>

        <div class="col-md-6">
          <div class="form-group">
          <label for="gender"><h6>Gender:</h6></label><br>
        <input type="radio" id="male" name="gender" value="male"  required>  Male<br><br>
        <input type="radio" id="female" name="gender" value="female" required>  Female<br><br>
        <input type="radio" id="prefer_not_say" name="gender"  value="prefer_not_say" required>  Prefer not to say<br><br>
          </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
        <label for="awarded"><h6>Awarded:</h6></label><br>
        <input type="checkbox" id="cert" name="cert">  Certificate and below<br><br>
        <input type="checkbox" id="diploma" name="diploma">  Diploma<br><br>
        <input type="checkbox" id="degree" name="degree">  Degree<br><br>
        <input type="checkbox" id="masters" name="masters">  Masters<br><br>
        </div>
       </div>


       

       <div class="col-md-6">
        <div class="form-group">
        <label for="employment"><h6>Current Place of Employment:</h6></label>
      <input type="text" id="employment" name="employment" class="form-control" placeholder="Current Place of Employment" required><br><br>
        </div>
       </div>

       <div class="col-md-6">
        <div class="form-group">
        <label for="position"><h6>Position Held:</h6></label>
      <input type="text" id="position" name="position"  class="form-control" placeholder="Position Held" required><br><br>
        </div>
       </div>



       <div class="col-md-6">
          <div class="form-group">
          <label for="county_of_operation"><h6>County of Operation:</h6></label>
          <select id="county_of_operation" name="county_of_operation" class="form-control" required>
            <option value="001">Mombasa</option>
            <option value="002"> Kwale</option>
            <option value="003">Kilifi</option>
            <option value="004">Tana River</option>
            <option value="005">Lamu</option>
            <option value="006">Taita Taveta</option>
            <option value="007">Garissa</option>
            <option value="008">Wajir</option>
            <option value="009">Mandera</option>
            <option value="010">Marsabit</option>
            <option value="011">Isiolo</option>
            <option value="012">Meru</option>
            <option value="013">Tharaka Nithi</option>
            <option value="014">Embu</option>
            <option value="015">Kitui</option>
            <option value="016">Machakos</option>
            <option value="017">Makueni</option>
            <option value="018">Nyandarua</option>
            <option value="019">Nyeri</option>
            <option value="020">Kirinyaga</option>
            <option value="021">Murang’a</option>
            <option value="022">Kiambu</option>
            <option value="023">Turkana</option>
            <option value="024">West Pokot</option>
            <option value="025">Samburu</option>
            <option value="026">Trans Nzoia</option>
            <option value="027">Uasin Gishu</option>
            <option value="028">Elgeyo/Marakwet</option>
            <option value="029">Nandi</option>
            <option value="030">Baringo</option>
            <option value="031">Laikipia</option>
            <option value="032">Nakuru</option>
            <option value="033">Narok</option>
            <option value="034">Kajiado</option>
            <option value="035">Kericho</option>
            <option value="036">Bomet</option>
            <option value="037">Kakamega</option>
            <option value="038">Vihiga</option>
            <option value="039">Bung’oma</option>
            <option value="040">Busia</option>
            <option value="041">Siaya</option>
            <option value="042">Kisumu</option>
            <option value="043">Homa Bay</option>
            <option value="044">Migori</option>
            <option value="045">Kisii.</option>
            <option value="046">Nyamira</option>
            <option value="047">Nairobi City</option>
          </select>
        </div>
       </div>



       <div class="col-md-6">
        <div class="form-group">
        <label for="membership_category"><h6>The Alumni membership comprises of four categories of members as mentioned below. Select one:</h6></label><br>
            <input type="checkbox" id="ordinary" name="ordinary" value="Ordinary">Ordinary<br><br>
            <input type="checkbox" id="life" name="life" >  Life<br><br>
            <input type="checkbox" id="honorary" name="honorary" >  Honorary<br><br>
            <input type="checkbox" id="corporate" name="corporate" >  Corporate<br><br>
        </div>
        <div class="col-md-2">
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Register" style="background-color: #1C1D3C; color: #fff;">
      </div>
      </div>
</div>
      </form>
    </div>
  </section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>