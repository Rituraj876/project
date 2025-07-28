<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admission Form</title>
  <link rel="stylesheet" href="style.css" />
  <script src="script.js" defer></script>
</head>
<body>
  <header><h1>Admission Form</h1></header>
  <form action="submit_form.php" method="POST" onsubmit="return validateForm()">
    <label>Full Name:</label>
    <input type="text" name="name" required />
    
    <label>Age:</label>
    <input type="number" name="age" min="3" max="18" required />
    
    <label>Class:</label>
    <input type="text" name="class" required />

    <label>Email:</label>
    <input type="email" name="email" required />

    <label>Phone:</label>
    <input type="text" name="phone" required pattern="[0-9]{10}" />

    <input type="submit" value="Submit Application" class="btn" />
  </form>
</body>
</html>
