<?php 
include("connect.php");

?>


<!DOCTYPE html>
<html>
<body>


	<h2>Client Table</h2>
<form method="POST">
  <label for="cname">Client name:</label><br>
  <input type="text" id="cname" name="cname"><br>

  <label for="lname">Address:</label><br>
  <input type="text" id="add" name="add"><br><br>
    <label for="acct">Account balance:</label><br>
  <input type="text" id="accbalance" name="accbalance"><br>
     <label for="lname">Last activity Date:</label><br>
  <input type="text" id="lactdate" name="lactdate"><br>

   <label for="lname">Total Deposit:</label><br>
  <input type="text" id="tdeposit" name="tdeposit"><br>
     <label for="lname">Total Withdrawals:</label><br>
  <input type="text" id="twith" name="twith"><br>
  <label >Client creation date</label><br>
  <input type="text" id="ccdate" name="ccdate"><br>
   <label >Account Officer</label><br>
  <input type="text"  name="accofficer"><br>

 <label >BVN</label><br>
  <input type="text" id="bvn" name="bvn"><br>

  <label>Sex</label><br>
  <input type="radio" id="male" name="gender" value="Male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="Female">
<label for="female">Female</label><br>

  <button type="submit"  name="task">Submit</button>
</form> 

</body>
</html>