<!DOCTYPE html>
<html>
<head>
	<title>PHP Practice</title>

	<style>
		.phpcoding{width: 900px; margin: 0 auto; background: #ddd;}
		.header, .footer{background: #444; color: #fff; text-align: center; padding: 20px;}
		.header h2, .footer h2{margin: 0}
		.content{min-height: 400px; padding: 20px;}
        .myform{width: 400px; border: 1px solid black; padding: 10px;}
        input[type="text"]{width: 238px; padding: 5px;}
        select{font-size: 15px; padding: 2px 5px; width: 250px;}
        .tableOne{width: 420px; border: 1px solid black; margin: 20px 0;}
        .tableOne td{padding: 5px 10px;}
        table.tableOne tr:nth-child(2n+1){background: #fff; height: 30px;}
        table.tableOne tr:nth-child(2n){background: #f1f1f1; height: 30px;}
        .mainleft{border-right: 1px dotted #999; float:left; margin-right: 16px;width: 350px}
        .mainright{float: right; width: 450px}
        .tblone {width: 100%; border: 1px solid #fff;}
        .tblone td {padding: 5px 10px; text-align: center;}
        
        table.tblone tr:nth-child(2n+1){background: #fff; height: 30px;}
        table.tblone tr:nth-child(2n){background: #f1f1f1; height: 30px;}
        
        input[type="text"]{border: 1px solid #ddd; margin-bottom: 5px; padding: 5px; width: 228px; font-size: 16px;}
        input[type="submit"]{cursor: pointer}
        
        .subject{border-bottom: 1px solid #3399ff; font-size: 20px; margin-bottom: 10px; padding-bottom: 10px;}
        .subject p{margin: 0;}
        
        .insert{color:#06960E; font-weight: bold;}
        .delete{color:#DE5A2A; font-weight: bold;}
        
        
      
	</style>

</head>
<body>
	<div class="phpcoding">
		
		<section class="header">
			<h2>CRUD Application by PHP</h2>
		</section>
        
<section class="content">
    <section class="subject">
        <p>CRUD with PDO - Template & Database Design<span style="float: right"> <a href="index.php">For Student</a> || <a href="teacher.php"> For Teacher </a></span></p>
    </section>
			