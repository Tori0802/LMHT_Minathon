<?php
  require_once("./view/header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<title>Responsive Product Design</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            
            font-family: 'Merriweather Sans', sans-serif;
            color: #ececec;
            
        }

        h2{
            text-align: center;
            margin-bottom: 5rem;
        }

        .all-products{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product{
            overflow: hidden;
            background: #ffffff;
            color: #21201e;
            text-align: center;
            width: 240px;
            height: 400px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 1.2rem;
            margin: 2rem;
        }

        .product .product-title, .product .product-price{
            font-size: 18px;
        }

        .product:hover img{
            scale:  1.1;
        }

        .product:hover {
            box-shadow: 5px 15px 25px #eeeeee;
        }

        .product img {
            height: 200px;
            margin: 1rem;
            transition: all 0.3s;
        }

        .product a:link, .product a:visited{
            color: #ececec;
            display: inline-block;
            text-decoration: none;
            background-color: #D21312;
            padding: 1.2rem 3rem;
            border-radius: 1rem;
            margin-top: 1rem;
            font-size: 14px;
            transition: all 0.2s;
        }

        .product a:hover{
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<div style="width: 100%; height: 30px; display: flex; justify-content: flex-end; padding: 20px 30px 20px 0px">
    <i class="fas fa-tint" style="color: #D21312; margin-left: auto;"></i>
    <span style="color: #000; margin-left: 10px;">10000</span>
</div>

</div>
	<section class="products">
		<div class="all-products">
			<div class="product">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0y-Lm8Pqux7_7N8az3r9XR5bXT-oDwxdiXg&usqp=CAU">
				<div class="product-info">
					<h4 class="product-title">Blood Donor Cup
					</h4>
					<p class="product-price">
                        <i class="fas fa-tint" style="color: #D21312;"></i>
                        <span style="color: #000;">1000</span>
                    </p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="https://i.etsystatic.com/22262046/r/il/cf9d9a/2239621194/il_fullxfull.2239621194_ky64.jpg">
				<div class="product-info">
					<h4 class="product-title">Hero Cup
					</h4>
					<p class="product-price">
                        <i class="fas fa-tint" style="color: #D21312;"></i>
                        <span style="color: #000;">1000</span>
                    </p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71z4StztQSL._SX679_.jpg">
				<div class="product-info">
					<h4 class="product-title">White Cup
					</h4>
					<p class="product-price">
                        <i class="fas fa-tint" style="color: #D21312;"></i>
                        <span style="color: #000;">1000</span>
                    </p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLsclpVp8AlmonqAtvvfXPYmV5JiwtvfLkD0p7cklvpYA2JMzftia1IKB15oRXx3CEH6A&usqp=CAU">
				<div class="product-info">
					<h4 class="product-title">Plus Blood Cup
						</h4>
					<p class="product-price">
                        <i class="fas fa-tint" style="color: #D21312;"></i>
                        <span style="color: #000;">1000</span>
                    </p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
		</div>
	</section>

</body>
</html>
<?php
  require_once("./view/footer.php");
?>