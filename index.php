<?php
// index.php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>NHM Fund Monitor - Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  

  <header class="topbar">
    <div class="head">
      <h1 class="headh1">NHM Fund Monitor</h1>
    <nav>
      <a href="index.php"  class="ancor">Dashboard</a> 
      <a href="projects.php"  class="ancor">Projects</a> 
      <a href="auditor.php"  class="ancor">Field Auditor</a> 
      <a href="finance.php"  class="ancor">Finance</a>
      <a href="login.php" class="ancor">Login</a>
      <a href="attendance.php" class="ancor">Attendance</a>
      <a href="driver.php" class="ancor">Driver</a>
    </nav>
    </div>
  </header>

 

  <main class="container">
    <section class="cards">
      <div class="card">
        <h3>Total Funds Allocated</h3>
        <p>₹50,000,000</p>
      </div>
      <div class="card">
        <h3>Total Spent</h3>
        <p>₹1,750,000</p>
      </div>
      <div class="card">
        <h3>Districts Monitored</h3>
        <p>4</p>
      </div>
    </section>

    <section class="alerts">
      <h2>Recent Flags / Anomalies</h2>
      <ul id="anomalyList">
        <li>No active anomalies in demo data.</li>
      </ul>
    </section>
  </main>
  


  <script src="assets/js/main.js">
</script>

  </script>
</body>
</html>
