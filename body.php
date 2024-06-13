<?php include 'db.php'; ?>
<?php include 'header.php'; ?>

<form method="post" action="">
<div class="form-group">
    
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
</div>

<div class="form-group">
    
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
</div>

<div class="form-group">
    
    <label for="phonenumber">Phone Number:</label>
    <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
</div>

<button type="submit" class="btn btn-primary">Submit</button>


</form>

<?php include 'footer.php'; ?>