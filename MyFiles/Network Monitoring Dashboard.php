<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Monotring Dashboard</title>

    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="style2.css"/>
</head>
<body>
    <header>
        <div class="header"> 
        <h1> Network Monotring Dashboard </h1>
        <p>Network Monotring Dashboard to record and monitor the flow of the network</p> 
</div>
    </header>    

<div class="main-card">
    <div class="main-card-content">

    <h3> Network Information </h3>
    <h4> Basic Netwrok Concepts </h4>
    <ul> 
        <li> Ip Address </li>
        <p>IP is the short form of Internet Protocol. It is a unique address that assigned to a device over a netowrk.  </p>
       <p> Command used: "ipconfg/all or ipconfig" </p>
        <li> Gatway </li>
        <p> Network Gateway connects one or more networks together.</p>
        <li> Connected Devices </li>
        <p> Devices that are connected to the network. </p>
        <p>Command used: "arp -a" </p>
        <li> Network Statues </li>
        <p>To identify network connectivity from the connected devices.</p>
        <p> Command Used: ping</p>
</div>
</div>
  <nav class="main-nav" aria-label="Primary navigation">
    <div class="container nav-container">
      <ul class="nav-bar">
        <a href="../Status/status.php" tabindex="0">Connectivity Statues</a> <br>
        <a href="../Devices /device_list.php " tabindex="0">Device List</a>
      </ul>
    </div>
  </nav>

</div>
</div>


<script src="app.js></script>
</body>
</html>