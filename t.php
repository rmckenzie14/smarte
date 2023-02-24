 <?php
// $target_dir = "userUploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     echo '<br>';
//     echo '<br>';
//     echo '<br>';
//     echo $target_file;

//     echo '<br>';
//     echo '<br>';
//     echo '<br>'; echo '<br>';
//     echo '<br>';
//     echo '<br>';
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }

// // Load the image
// $image = imagecreatefromjpeg('image.jpg');

// // Set the target size in bytes (5MB in this example)
// $targetSize = 5 * 1024 * 1024;

// // Reduce the quality of the image until its size is smaller than the target size
// $quality = 100;
// do {
//     ob_start();
//     imagejpeg($image, NULL, $quality);
//     $data = ob_get_clean();
//     $size = strlen($data);
//     $quality -= 5;
// } while ($size > $targetSize && $quality >= 5);

// // Save the compressed image to a file
// file_put_contents('compressed_image.jpg', $data);
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'PHPMailer/PHPMailer/src/Exception.php';
// require 'PHPMailer/PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/PHPMailer/src/SMTP.php';


// $mail = new PHPMailer();
//                         $mail->IsSMTP();
//                         $mail->Mailer = "smtp";

//                         $mail->SMTPDebug  = 1;  
//                         $mail->SMTPAuth   = TRUE;
//                         $mail->SMTPSecure = "tls";
//                         $mail->Port       = 587;
//                         $mail->Host       = "smtp.gmail.com";
//                         $mail->Username   = "rmckenzie14@stu.ucc.edu.jm";
//                         $mail->Password   = "20183095";

//                         $mail->IsHTML(true);
//                         $mail->AddAddress("rmckenzie14@stu.ucc.edu.jm", "recipient-name");
//                         $mail->SetFrom("sometech974@gmail.com", "from-name");
//                         $mail->AddReplyTo("sometech974@gmail.com", "reply-to-name");
//                         //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
//                         $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
//                         $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

//                         $mail->MsgHTML($content); 
//                         if(!$mail->Send()) {
//                         echo "Error while sending Email.";
//                         var_dump($mail);
//                         } else {
//                         echo "Email sent successfully";
//                         }
$dd =md5(uniqid(rand(1,5), true));
//echo strlen("48fbb93fb29bc1cf77d6", 0, 6);
echo $dd;
//substr("48fbb93fb29bc1cf77d6",0, 5);
// $result = substr($myStr, 0, 5);
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>My Store - View Cart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	background-color: #333;
	color: #fff;
	display: flex;
	align-items: center;
	height: 80px;
	padding: 0 20px;
}

.logo {
	font-size: 24px;
	font-weight: bold;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
}

nav li {
	margin: 0 10px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

main {
	max-width: 100%;
	margin: 20px auto;
	padding: 0 20px;
}

h1 {
	font-size: 36px;
	margin-bottom: 30px;
}

.product {
	display: flex;
	margin-bottom: 50px;
}

.product img {
	max-width: 400px;
	margin-right: 20px;
}

.product-info {
	flex: 1;
}

.product-info h2 {
	font-size: 24px;
	margin: 0 0 10px;
}

.product-info p {
	margin: 0 0 10px;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="number"] {
	width: 60px;
	margin-right: 10px;
}

button {
	background-color: #333;
	color: #fff;
	border: none;
	padding: 10px 20px;
	font-size: 18px;
	cursor: pointer;
}

footer {
	background-color: #333;
	color: #fff;
	height: 50px;
	display: flex;
	align-items: center;
	padding: 0 20px;
}

    </style>
</head>
<body>
	<header>
		<div class="logo">My Store</div>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>View Cart</h1>
		<table style="width:95%; text-align: center;">
			<tr>
				<th>Product Image</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Subtotal</th>
				<th></th>
			</tr>
			<tr>
				<td><img src="product1-image.jpg" alt="Product 1 Image"></td>
				<td>Product 1</td>
				<td>$19.99</td>
				<td><input type="number" value="1"></td>
				<td>$19.99</td>
				<td><button>Remove</button></td>
			</tr>
			<tr>
				<td><img src="product2-image.jpg" alt="Product 2 Image"></td>
				<td>Product 2</td>
				<td>$29.99</td>
				<td><input type="number" value="2"></td>
				<td>$59.98</td>
				<td><button>Remove</button></td>
			</tr>
			<tr>
				<td colspan="4">Subtotal</td>
				<td>$79.97</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4">Shipping</td>
				<td>$5.00</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4">Tax</td>
				<td>$4.00</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4">Total</td>
				<td>$88.97</td>
				<td></td>
			</tr>
		</table>
		<a href="#">Continue Shopping</a>
		<a href="#">Checkout</a>
	</main>
	<footer>
		<p>&copy; 2023 My Store. All rights reserved.</p>
	</footer>
</body>
</html> -->
