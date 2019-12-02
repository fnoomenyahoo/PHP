<?php include("../included/CheckAdmin.php");?>
<?php $currForm="Pharmacies";?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Minestry Of Health</title> 
</head>

<body style="padding-top: 70px">
    <?php include("navbar.php") ?>
<div class="container "  >
    <h2>Pharmacy</h2>
  <form method="post">
<span id="imessage" style="color: red;">
    <?php include("../included/PharmacyEdit.php") ?></span>
    <div class="form-group">
        <label for="pFName">Code</label>
        <input type="text" class="form-control" id="pID" name="pID" placeholder="Enter Name" value="<?php echo $row["id"]; ?>" readonly />
    </div>
    <div class="form-group">
        <label for="pDescription">Description</label>
        <input type="text" class="form-control" id="pDescription" name="pDescription" placeholder="Enter Name" value="<?php echo $row["Description"]; ?>" required />
    </div>

    <div class="form-group">
        <label for="pTel">Phone 1</label>
        <input type="tel" class="form-control" id="pTel" name="pTel" placeholder="Enter Phone " value="<?php echo $row["Tel"]; ?>" required />
    </div>

    <div class="form-group">
        <label for="pTel2">Phone 2</label>
        <input type="tel" class="form-control" id="pTel2" name="pTel2" placeholder="Enter Phone " value="<?php echo $row["Tel2"]; ?>" />
    </div>

    <div class="form-group">
        <label for="pFax">Fax</label>
        <input type="tel" class="form-control" id="pFax" name="pFax" placeholder="Enter Fax " value="<?php echo $row["Fax"]; ?>" required />
    </div>

    <div class="form-group">
        <label for="pAddress">Address</label>
        <input type="text" class="form-control" id="pAddress" name="pAddress" placeholder="Enter Address " value="<?php echo $row["Address"]; ?>" required />
    </div>

    <div class="form-group">
        <label for="pnationalId">CR Code</label>
        <input type="text" class="form-control" id="pnationalId" name="pnationalId" placeholder="Enter CR Code " value="<?php echo $row["nationalId"]; ?>" required />
    </div>

    <div class="form-group">
        <label for="pEmail">Email address</label>
        <input type="email" class="form-control" id="pEmail" name="pEmail" placeholder="Enter email" value="<?php echo $row["Email"]; ?>" required />
        <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="pContactName">Contact Name</label>
        <input type="text" class="form-control" id="pContactName" name="pContactName" placeholder="Enter Contact Name " value="<?php echo $row["ContactName"]; ?>" required />
    </div>

    <div class="form-group">
        <label for="pContactTel">Contact phone</label>
        <input type="text" class="form-control" id="pContactTel" name="pContactTel" placeholder="Enter Contact Phone " value="<?php echo $row["ContactTel"]; ?>" required />
    </div>

    <!--<div class="form-check">
      <input type="checkbox" class="form-check-input" id="pStatus" name="pStatus" checked>
      <label class="form-check-label" for="pStatus">Valid</label>
    </div>-->

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>