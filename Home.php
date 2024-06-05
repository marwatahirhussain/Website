<?php
function isActive($page) {
    return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
?>

<?php echo isActive('#'); ?> 
         <?php echo isActive('About.php'); ?> 
         <?php echo isActive('Services.php'); ?> 
        <?php echo isActive('Contact.php'); ?>
<!DOCTYPE html>

<?php include 'navbar.php'; ?>
<?php
$backgroundImage = 'img/au.jpg'; // Path to your background image
?>
<html lang="en">
  <!-- fevicon -->
<link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Data_Entry_Web</title>

  <style>
    body,
    html {
      height: 100%;
    }

    body {
      background-image: url('<?php echo $backgroundImage; ?>');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100%;
      margin: 0;
    }
  </style>

</head>

<body>

  <form action="submit.php" method="post">
    <div class="form-group">
      <div class="col-md-6">
        <label for="name">First name</label>
        <input type="text" name="first" class="form-control" placeholder="First name">
      </div>
      <div class="col-md-6">
        <label for="lastname">Last name</label>
        <input type="text" name="last" class="form-control" placeholder="Last name">
      </div>
    </div>
    <div class="form-group">
      <div class=" col-md-6">
        <label for="Email">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="employeeid">Employee Id</label>
        <input type="text" name="id" class="form-control" placeholder="12334">
      </div>
    </div>
    <div class="form-group">
      <div class="form-group col-md-6">
        <label for="designation">Designation</label>
        <input type="text" name="designation" class="form-control" id="Designation" placeholder="designer etc..">
      </div>
      <div class="form-group col-md-4">
        <label for="department">Department</label>
        <select id="department" name="department" class="form-control">
          <option selected>Choose...</option>
          <option>HR</option>
          <option>Finance</option>
          <option>Customer Serveices</option>
          <option>Admin</option>
        </select>
      </div>
      <div class="row mt-2 text-center">
        <div class="col-md-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>

          </div>
        </div>
      </div>
  </form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>