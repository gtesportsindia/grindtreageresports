<?php
$orderId = $_GET['orderId'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Failed</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
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
box-shadow:0 0 30px rgba(255,0,0,.25);
border:1px solid #ff3b30;
}

.icon{
width:90px;
height:90px;
margin:auto;
border-radius:50%;
background:#ff3b30;
display:flex;
align-items:center;
justify-content:center;
font-size:42px;
font-weight:bold;
color:#fff;
}

h2{
margin:20px 0 10px;
color:#ff4d4d;
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
word-break:break-word;
}

.btn{
display:block;
margin-top:15px;
padding:14px;
background:#ff3b30;
color:#fff;
text-decoration:none;
border-radius:10px;
font-weight:bold;
transition:.3s;
}

.btn:hover{
background:#d92c23;
}

.home{
display:block;
margin-top:10px;
padding:14px;
background:#333;
color:#fff;
text-decoration:none;
border-radius:10px;
font-weight:bold;
transition:.3s;
}

.home:hover{
background:#444;
}
</style>

</head>
<body>

<div class="card">

<div class="icon">✕</div>

<h2>Payment Failed</h2>

<p>Your payment could not be completed or was cancelled.</p>

<div class="order">
Order ID:<br>
<b><?php echo htmlspecialchars($orderId); ?></b>
</div>

<a class="btn" href="payment.html">Try Again</a>

<a class="home" href="index.html">Back to Home</a>

</div>

</body>
</html>