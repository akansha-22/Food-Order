<?php 
    include('../back-end/config/constants.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Food / Restaurant website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" type="text/css" href="../front-end/index.css">
    <link rel="stylesheet" href="../front-end/index.js">
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="#" class="logo"><i class="fas fa-utensils"></i>akansha's kitchen</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#food">food</a>
            <a href="#gallery">gallery</a>
            <a href="#menu">menu</a>
            <a href="#order">order</a>
            <a href="../back-end/login.php">login</a> 
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->


    <!-- home section starts -->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/home_1.jpg) no-repeat;">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>delicious cooking</h3>
                        <a href="#order" class="btn">order now</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home_2.jpg) no-repeat;">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>morning moments</h3>
                        <a href="#order" class="btn">order now</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home_3.jpg) no-repeat;">
                    <div class="content">
                        <span>outstanding food</span>
                        <h3>authentic kitchen</h3>
                        <a href="#order" class="btn">order now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->
    
    <!-- about section starts-->
    <section class="about" id="about">
        <div class="image">
            <img src="images/about_1.jpg" alt="food image">
        </div>
        <div class="content">
            <h3 class="title">welcome to our restaurant</h3>
            <p>Welcome to our culinary haven, where flavors burst and aromas captivate. At our restaurant, we believe that dining is an experience that goes beyond just a meal. It's a journey of taste, a celebration of culture, and a moment to savor with loved ones. Our chefs craft each dish with passion and precision, using the freshest ingredients to bring you a symphony of flavors. Come, join us, and let's create unforgettable memories together.</p>
            <a href="#footer" class="btn">contect us</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="images/about_2.png" alt="&#1285255;">
                    <h3>quality food</h3>
                </div>
                <div class="icons">
                    <img src="images/about_3.png" alt="&#1285255;">
                    <h3>food & drinks</h3>
                </div>
                <div class="icons">
                    <img src="images/about_4.png" alt="&#1285255;">
                    <h3>expert chefs</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- food section starts -->
    <section class="food" id="food">
        <div class="heading">
            <span>popular dishes</span>
            <h3>our delicious food</h3>
        </div>
        <div class="swiper food-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" data-name="food-1">
                    <img src="images/food_1.jpg" alt="">
                    <h3>rose lassi</h3>
                    <div class="price"> &#8377;65.00</div>
                    <a href="#f1" class="btn">read more</a>
                </div>
                <div class="swiper-slide slide" data-name="food-2">
                    <img src="images/food_2.jpg" alt="">
                    <h3>pocket pizza</h3>
                    <div class="price">&#8377;100.00</div>
                    <a href="#f2" class="btn">read more</a>
                </div>
                <div class="swiper-slide slide" data-name="food-3">
                    <img src="images/food_3.jpg" alt="">
                    <h3>pav bhaji</h3>
                    <div class="price">&#8377;80.00</div>
                    <a href="#f3" class="btn">read more</a>
                </div>
                <div class="swiper-slide slide" data-name="food-4">
                    <img src="images/food_4.jpg" alt="">
                    <h3>aaloo paratha</h3>
                    <div class="price">&#8377;60.00</div>
                    <a href="#f4" class="btn">read more</a>
                </div>
                <div class="swiper-slide slide" data-name="food-5">
                    <img src="images/food_5.jpg" alt="">
                    <h3>gajar ka halwa</h3>
                    <div class="price">&#8377;90.00</div>
                    <a href="#f5" class="btn">read more</a>
                </div>
                <div class="swiper-slide slide" data-name="food-6">
                    <img src="images/food_6.jpg" alt="">
                    <h3>strawberry cheesecake</h3>
                    <div class="price">&#8377;75.00</div>
                    <a href="#f6" class="btn">read more</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- food section ends -->

    <!-- food-preview section starts -->
    <section class="food-preview-container">
        <div id="close-preview" class="fas fa-times"></div>
        <div class="food-preview" id="f1" data-target="food-1">
            <img src="images/preview_1.jpg" alt="">
            <h3>rose lassi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Experience the perfect blend of creamy yogurt, aromatic rose water, and a touch of sweetness in our Rose Lassi. This refreshing drink, garnished with rose petals and crushed pistachios, is a delightful way to cool down and enjoy a hint of floral elegance. Sip, relax, and enjoy the soothing flavors.</p>
            <div class="price">&#8377;65.00</div>
            <button class="btn add-to-order" data-food="Rose Lassi" data-price="65">Add</button>
        </div>
        <div class="food-preview" id="f2" data-target="food-2">
            <img src="images/preview_2.jpg" alt="">
            <h3>pocket pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Enjoy the convenient and delicious Pocket Pizza, a portable treat filled with your favorite pizza toppings wrapped in a soft, golden crust. It's the perfect on-the-go snack, offering a burst of cheesy, savory goodness in every bite.</p>
            <div class="price">&#8377;100.00</div>
            <button class="btn add-to-order" data-food="Pocket Pizza" data-price="100">Add</button>
        </div>
        <div class="food-preview" id="f3" data-target="food-3">
            <img src="images/preview_3.jpg" alt="">
            <h3>pav bhaji</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Savor the rich, spicy, and flavorful Pav Bhaji, a popular Indian street food. This dish features a luscious vegetable curry served with buttery, toasted buns (pav). It's a delightful blend of textures and tastes, perfect for a satisfying meal.</p>
            <div class="price">&#8377;80.00</div>
            <button class="btn add-to-order" data-food="pav bhaji" data-price="80">Add</button>
        </div>
        <div class="food-preview" id="f4" data-target="food-4">
            <img src="images/preview_4.jpg" alt="">
            <h3>aaloo paratha</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Savor the delicious Aaloo Paratha, a popular Indian flatbread stuffed with a flavorful mixture of spiced mashed potatoes. This golden, crispy delight is perfect for breakfast or any meal, offering a comforting and satisfying taste experience.</p>
            <div class="price">&#8377;60.00</div>
            <button class="btn add-to-order" data-food="aaloo paratha" data-price="60">Add</button>
        </div>
        <div class="food-preview" id="f5" data-target="food-5">
            <img src="images/preview_5.jpg" alt="">
            <h3>gajar ka halwa</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Delight in the rich and indulgent Gajar Ka Halwa, a traditional Indian dessert made from grated carrots simmered in milk, sugar, and ghee. Enhanced with aromatic cardamom and garnished with a generous sprinkle of nuts, this warm, sweet treat is perfect for any occasion.</p>
            <div class="price">&#8377;90.00</div>
            <button class="btn add-to-order" data-food="gajar ka halwa" data-price="90">Add</button>
        </div>
        <div class="food-preview" id="f6" data-target="food-6">
            <img src="images/preview_6.jpg" alt="">
            <h3>strawberry cheesecake</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Delight in the rich and creamy Strawberry Cheesecake, featuring a buttery graham cracker crust and a velvety cream cheese filling. Topped with fresh strawberries and a glossy strawberry glaze, each bite offers a perfect balance of flavors and textures. A refreshing and indulgent treat for any occasion.</p>
            <div class="price">&#8377;75.00</div>
            <button class="btn add-to-order" data-food="strawberry cheesecake" data-price="75">Add</button>
        </div>
    </section>
    <!-- food-preview section ends-->

    <!-- gallery section starts -->
    <section class="gallery" id="gallery">
        <div class="heading">
            <span>our gallery</span>
            <h3>our untold stories</h3>
        </div>
        <div class="gallery-container">
            <a href="images/gallery-2.jpg" class="box">
                <img src="images/gallery-2.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-3.jpg" class="box">
                <img src="images/gallery-3.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-4.jpg" class="box">
                <img src="images/gallery-4.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-5.jpg" class="box">
                <img src="images/gallery-5.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-6.jpg" class="box">
                <img src="images/gallery-6.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-7.jpg" class="box">
                <img src="images/gallery-7.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-8.jpg" class="box">
                <img src="images/gallery-8.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-9.jpg" class="box">
                <img src="images/gallery-9.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/gallery-10.jpg" class="box">
                <img src="images/gallery-10.jpg" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
        </div>
    </section>
    <!-- gallery section ends -->

    <!-- menu section starts -->
    <section class="menu" id="menu">
        <div class="heading">
            <span>our menu</span>
            <h3>our popular dishes</h3>
        </div>
        <div class="swiper menu-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <h3 class="title">breakfast</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>poha</h3>
                                <p>Flattened rice cooked with onions, mustard seeds, curry leaves, and turmeric, garnished with fresh coriander and lemon.</p>
                            </div>
                            <div class="price">&#8377;30.00</div>
                            <button class="btn add-to-order" data-food="poha" data-price="30">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>upma</h3>
                                <p>Savory semolina porridge cooked with vegetables, nuts, and aromatic spices.</p>
                            </div>
                            <div class="price">&#8377;30.00</div>
                            <button class="btn add-to-order" data-food="upma" data-price="30">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>pav bhaji</h3>
                                <p>Spicy mashed vegetable curry served with buttered bread rolls.</p>
                            </div>
                            <div class="price">&#8377;80.00</div>
                            <button class="btn add-to-order" data-food="pav bhaji" data-price="80">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>chole bhature</h3>
                                <p>Spiced chickpea curry paired with deep-fried bread.</p>
                            </div>
                            <div class="price">&#8377;40.00</div>
                            <button class="btn add-to-order" data-food="chole bhature" data-price="40">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>idli sambhar</h3>
                                <p>Steamed rice cakes served with lentil stew and coconut chutney.</p>
                            </div>
                            <div class="price">&#8377;70.00</div>
                            <button class="btn add-to-order" data-food="idli sambhar" data-price="70">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>aloo paratha</h3>
                                <p>Stuffed whole-wheat flatbread with spiced potato filling, often served with yogurt and pickle.</p>
                            </div>
                            <div class="price">&#8377;59.00</div>
                            <button class="btn add-to-order" data-food="aaloo paratha" data-price="59">Add</button>
                        </div> 
                        <div class="box">
                            <div class="info">
                                <h3>masala dosa</h3>
                                <p>Crispy fermented rice and lentil crepe filled with a spiced potato mixture.</p>
                            </div>
                            <div class="price">&#8377;40.00</div>
                            <button class="btn add-to-order" data-food="masala dosa" data-price="40">Add</button>
                        </div> 
                        <div class="box">
                            <div class="info">
                                <h3>pocket pizza</h3>
                                <p>the convenient and delicious Pocket Pizza, a portable treat filled with your favorite pizza toppings wrapped in a soft, golden crust. </p>
                            </div>
                            <div class="price">&#8377;25.00</div>
                            <button class="btn add-to-order" data-food="pocket pizza" data-price="25">Add</button>
                        </div> 
                        <div class="box">
                            <div class="info">
                                <h3>vada</h3>
                                <p>Deep-fried savory doughnuts made from lentil batter, often enjoyed with sambar and chutney.</p>
                            </div>
                            <div class="price">&#8377;70.00</div>
                            <button class="btn add-to-order" data-food="vada" data-price="70">Add</button>
                        </div> 
                        <div class="box">
                            <div class="info">
                                <h3>samosa</h3>
                                <p>Enjoy the crispy, golden exterior and the savory, spiced filling of our delicious samosas. These triangular pastries are packed with a flavorful mix of potatoes, peas, and spices,</p>
                            </div>
                            <div class="price">&#8377;25.00</div>
                            <button class="btn add-to-order" data-food="samosa" data-price="25">Add</button>
                        </div> 
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">lunch</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>paneer tikka masala</h3>
                                <p>Grilled paneer cubes simmered in a spiced tomato and cream sauce, perfect with naan or rice.</p>
                            </div>
                            <div class="price">&#8377;100.00</div>
                            <button class="btn add-to-order" data-food="paneer tikka masala" data-price="100">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>rajma chaawal</h3>
                                <p>the comforting and hearty Rajma Chawal, a classic North Indian dish featuring tender kidney beans cooked in a rich, spiced tomato gravy, served over a bed of steamed rice. </p>
                            </div>
                            <div class="price">&#8377;70.00</div>
                            <button class="btn add-to-order" data-food="rajma chaawal" data-price="70">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>vegetable biryani</h3>
                                <p>Aromatic basmati rice cooked with mixed vegetables, saffron, and a blend of spices, served with raita.</p>
                            </div>
                            <div class="price">&#8377;120.00</div>
                            <button class="btn add-to-order" data-food="vegetable biryani" data-price="120">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>rogan josh</h3>
                                <p>A flavorful lamb curry cooked with yogurt, garlic, and aromatic spices.</p>
                            </div>
                            <div class="price">&#8377;60.00</div>
                            <button class="btn add-to-order" data-food="rogan josh" data-price="60">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>palak paneer</h3>
                                <p>Cottage cheese cubes cooked in a smooth and creamy spinach gravy, best enjoyed with roti or naan.</p>
                            </div>
                            <div class="price">&#8377;125.00</div>
                            <button class="btn add-to-order" data-food="palak paneer" data-price="125">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>dal makhani</h3>
                                <p>Slow-cooked black lentils and kidney beans in a creamy tomato sauce, served with rice or naan.</p>
                            </div>
                            <div class="price">&#8377;89.00</div>
                            <button class="btn add-to-order" data-food="dal makhani" data-price="89">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>aloo gobi</h3>
                                <p>A delicious vegetarian dish made with potatoes, cauliflower, and a medley of spices.</p>
                            </div>
                            <div class="price">&#8377;69.00</div>
                            <button class="btn add-to-order" data-food="aloo gobi" data-price="69">Add</button>
                        </div> 
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">dinner</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>kadhai paneer</h3>
                                <p>Stir-fried cottage cheese cubes with bell peppers and onions in a spicy tomato sauce, served with naan or rice.</p>
                            </div>
                            <div class="price">&#8377;120.00</div>
                            <button class="btn add-to-order" data-food="kadhai paneer" data-price="120">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>malai kofta</h3>
                                <p>Soft paneer and vegetable dumplings in a creamy tomato and cashew nut gravy, served with roti or naan.</p>
                            </div>
                            <div class="price">&#8377;130.00</div>
                            <button class="btn add-to-order" data-food="malai kofta" data-price="130">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>bhindi masala</h3>
                                <p>Stir-fried okra with onions, tomatoes, and spices, enjoyed with roti or paratha.</p>
                            </div>
                            <div class="price">&#8377;55.00</div>
                            <button class="btn add-to-order" data-food="bhindi masala" data-price="55">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>pulao</h3>
                                <p>Aromatic rice cooked with vegetables, whole spices, and nuts, often accompanied by raita.</p>
                            </div>
                            <div class="price">&#8377;79.00</div>
                            <button class="btn add-to-order" data-food="pulao" data-price="79">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>jeera aloo</h3>
                                <p>Potatoes sautéed with cumin seeds and spices, a simple yet flavorful dish to be enjoyed with roti or paratha.</p>
                            </div>
                            <div class="price">&#8377;60.00</div>
                            <button class="btn add-to-order" data-food="jeera aloo" data-price="60">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>lachha paratha</h3>
                                <p>Flaky layered flatbread, a perfect accompaniment to any curry or gravy dish.</p>
                            </div>
                            <div class="price">&#8377;25.00</div>
                            <button class="btn add-to-order" data-food="lachha paratha" data-price="25">Add</button>
                        </div> 
                        <div class="box">
                            <div class="info">
                                <h3>raita</h3>
                                <p>Yogurt-based side dish with cucumber, mint, and spices, a refreshing accompaniment to any meal.</p>
                            </div>
                            <div class="price">&#8377;35.00</div>
                            <button class="btn add-to-order" data-food="raita" data-price="35">Add</button>
                        </div> 
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">drinks</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>masala chai</h3>
                                <p>Traditional Indian spiced tea made with black tea, milk, and a blend of spices.</p>
                            </div>
                            <div class="price">&#8377;20.00</div>
                            <button class="btn add-to-order" data-food="masala chai" data-price="20">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>rose lassi</h3>
                                <p>Experience the perfect blend of creamy yogurt, aromatic rose water, and a touch of sweetness in our Rose Lassi. </p>
                            </div>
                            <div class="price">&#8377;65.00</div>
                            <button class="btn add-to-order" data-food="rose lassi" data-price="65">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>lytchi cocktail </h3>
                                <p> a perfect blend of sweet litchi juice, premium spirits, and a hint of citrus.  </p>
                            </div>
                            <div class="price">&#8377;79.00</div>
                            <button class="btn add-to-order" data-food="lytchi cocktail" data-price="79">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>buttermilk</h3>
                                <p>A refreshing and tangy drink made from yogurt, water, and spices.</p>
                            </div>
                            <div class="price">&#8377;15.00</div>
                            <button class="btn add-to-order" data-food="buttermilk" data-price="15">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>falooda</h3>
                                <p>A dessert drink made with milk, rose syrup, basil seeds, vermicelli, and ice cream.</p>
                            </div>
                            <div class="price">&#8377;40.00</div>
                            <button class="btn add-to-order" data-food="falooda" data-price="40">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>badam milk</h3>
                                <p>A rich and creamy milk drink flavored with almonds, cardamom, and saffron.</p>
                            </div>
                            <div class="price">&#8377;25.00</div>
                            <button class="btn add-to-order" data-food="badam milk" data-price="25">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>jaljeera</h3>
                                <p>A tangy and spicy drink made with cumin, mint, and lemon juice.</p>
                            </div>
                            <div class="price">&#8377;20.00</div>
                            <button class="btn add-to-order" data-food="jaljeera" data-price="20">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>nimbu pani</h3>
                                <p>A tangy and spicy drink made with cumin, mint, and lemon juice.</p>
                            </div>
                            <div class="price">&#8377;25.00</div>
                            <button class="btn add-to-order" data-food="nimbu pani" data-price="25">Add</button>
                        </div> 
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">dessert</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>gajar ka halwa</h3>
                                <p>Carrot-based sweet pudding made with grated carrots, milk, sugar, and ghee, garnished with nuts and raisins.</p>
                            </div>
                            <div class="price">&#8377;90.00</div>
                            <button class="btn add-to-order" data-food="gajar ka halwa" data-price="90">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>strawberry cheesecake</h3>
                                <p>a buttery graham cracker crust and a velvety cream cheese filling. Topped with fresh strawberries and a glossy strawberry glaze</p>
                            </div>
                            <div class="price">&#8377;75.00</div>
                            <button class="btn add-to-order" data-food="strawberry cheesecake" data-price="75">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>gulab jamun</h3>
                                <p>Soft, deep-fried dough balls soaked in a sweet rose-flavored syrup.</p>
                            </div>
                            <div class="price">&#8377;45.00</div>
                            <button class="btn add-to-order" data-food="gulab jamun" data-price="45">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>rasgulla</h3>
                                <p>Spongy cottage cheese balls in a light sugar syrup, a specialty from Bengal.</p>
                            </div>
                            <div class="price">&#8377;55.00</div>
                            <button class="btn add-to-order" data-food="rasgulla" data-price="55">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>jalebi</h3>
                                <p>Deep-fried spirals made from flour batter, soaked in saffron-flavored sugar syrup.</p>
                            </div>
                            <div class="price">&#8377;80.00</div>
                            <button class="btn add-to-order" data-food="jalebi" data-price="80">Add</button>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>kheer</h3>
                                <p>Creamy rice pudding made with milk, rice, and flavored with cardamom, nuts, and saffron.</p>
                            </div>
                            <div class="price">&#8377;50.00</div>
                            <button class="btn add-to-order" data-food="kheer" data-price="50">Add</button>
                        </div> 
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- menu section ends -->

    <!-- order section starts -->
    <section class="order" id="order">
        <div class="heading">
            <span>place your order</span>
            <h3>fast home delivery</h3>
        </div>
        <form action="../back-end/place-order.php" method="POST">
            <div class="box-container">
                <div class="box">
                    <div class="inputBox">

                        <span>full name</span>
                        <input type="text" name="full_name" placeholder="enter your name">
                    </div>
                    <div class="inputBox">
                        <span>selected items</span>
                        <textarea name="food_name" id="selected-food" rows="5" readonly></textarea>
                    </div>
                    <div class="inputBox">
                        <span>order details</span>
                        <input type="text" name="order_details" placeholder="specifics with food">
                    </div>
                    <div class="inputBox">
                        <span> phone number</span>
                        <input type="number" name="phone_number" placeholder="enter your number">
                    </div>
                    <div class="inputBox">
                        <span>when you want</span>
                        <input type="datetime-local" name="delivery_time" required >
                    </div>
                    <div class="inputBox">
                        <span>your address</span>
                        <textarea name="user_address" placeholder="enter your address" cols="30" rows="10"></textarea>
                    </div>
                    
                    <!-- payment option -->
                    <div class="inputBox">
                        <span>payment method</span>
                        <div class="payment-options">
                            <label>
                                <input type="radio" name="payment_method" value="COD" required> Cash on delivery
                            </label>
                            <label>
                                <input type="radio" name="payment_method" value="UPI"> UPI
                            </label>
                        </div>
                    </div>

                    <!-- UPI ID input -->
                    <div class="inputBox" id="upi-qr" style="display: none;" >
                        <span>Scan to Pay</span> <br>
                        <img src="images/scanner.png" alt="UPI QR Code">
                    </div>
                    <div class="inputBox">
                        <span>Total Price (₹)</span>
                        <input type="text" name="total_price" id="total-price"  readonly>
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" value="order now" class="btn">
            
        </form>
        
    </section>
    
    <!-- order section ends -->
    
    <!-- footer section starts -->
    <section class="footer" id="footer">
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>07:00am to 10:00pm</p>
            </div>
            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>example123@gmail.com</p>
                <p>2202example@gmail.com</p>
            </div>
            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>address</h3>
                <p>ajmer, india - 305001</p>
            </div>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
        <div class="credit">akansha's kitchen | created by <span>miss. akansha jain</span> | 2025 all rights reserved!</div>
    </section>
    <!-- footer section ends -->



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
<script src="index.js"></script>
<script>
    lightGallery(document.querySelector('.gallery .gallery-container'));
</script>
</body>
</html>