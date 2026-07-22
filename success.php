<?php
$orderId = $_GET['orderId'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Successful</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#0d1117;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
color:#fff;
}

.card{
width:380px;
background:#161b22;
padding:35px;
border-radius:18px;
text-align:center;
box-shadow:0 0 30px rgba(0,255,120,.2);
border:1px solid #00c853;
}

.icon{
width:90px;
height:90px;
margin:auto;
border-radius:50%;
background:#00c853;
display:flex;
align-items:center;
justify-content:center;
font-size:42px;
font-weight:bold;
}

h2{
margin:20px 0 10px;
color:#00e676;
}

p{
color:#bbb;
margin-bottom:12px;
}

.order{
background:#222;
padding:12px;
border-radius:10px;
margin:15px 0;
word-break:break-all;
}

a{
display:block;
margin-top:20px;
padding:14px;
background:#00c853;
color:#fff;
text-decoration:none;
border-radius:10px;
font-weight:bold;
}

a:hover{
background:#00b248;
}
</style>

</head>
<body>

<div class="card">

<div class="icon">✓</div>

<h2>Payment Successful</h2>

<p>Your payment has been received successfully.</p>

<div class="order">
Order ID:<br>
<b><?php echo htmlspecialchars($orderId); ?></b>
</div>

<a href="index.html">Back to Home</a>

</div>

</body>
</html>