<?php

		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);

    include "data/data.php";
?>
<html lang="ru">

<head>
	<title>Wellness-клуб TONUS | Омск</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/reset-css@4.0.1/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDClSNMkwupXdNdEaP_j2cXJnGPabmJI-E"></script>
	<script src="js/script.js"></script>
  <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=7643f430d21c0fbed31e6e8f5b12d904" charset="UTF-8" async></script>
</head>

<body>





	<div class="section header">
		<div class="wrapper">

			<div class="circle">
				<div class="photoCircle">
					<div>
						<div class="big"></div>
						<div class="small"></div>
						<div class="photo">
							<img src="<?php p($topMenu_img); ?>" />
						</div>
					</div>
					<div class="green"></div>
					<!--div class="grey"></div-->
				</div>
			</div>

			<div class="topMenu">
				<div class="left">

					<a class="burger">
						<img src="/img/menu.svg" alt="">
					</a>
					<div class="logo">
						<?php p($topMenu_logo); ?>
					</div>
				</div>
				<div class="right">
					<div class="address">
						<?php p($topMenu_address); ?>
					</div>
					<div class="phone">
						<?php p($topMenu_phone); ?>
					</div>
					<a href="#callbackwidget" class="batton">
						<?php p($topMenu_btnText); ?>
					</a>
				</div>
			</div>

			<div class="firstLook">

				<h1>
					<?php p($header_title); ?>
				</h1>
				<div class="additional">
					<?php p($header_additionalText); ?>
				</div>
				<a href="#callbackwidget" class="batton">
					<?php p($header_btnText); ?>
				</a>
			</div>


		</div>
	</div>





	<div class="section menuSection">

		<div class="grey"></div>
		<div class="top">
			<div class="wrapper">

				<?php aForEach($menuSection_1, $menuSection_1_href); ?>
			</div>
		</div>
		<div class="bottom">
			<div class="wrapper">
				<?php aForEach($menuSection_2, $menuSection_2_href); ?>
			</div>
		</div>
	</div>





	<div class="section section2">
		<h2>
			<?php p($section2_title); ?>
		</h2>
		<div class="additional">
			<?php p($section2_addition); ?>
		</div>
		<div class="wrapper">
			<div class="leftImg">
				<div class="circleWhite"></div>
				<div class="circleGreen"></div>
				<div class="photoCircleMain">
					<img src="<?php p($section2_img); ?>" alt="">
				</div>
				<div class="title">
					<?php p($section2_descriptiion_title); ?>
				</div>
				<div class="other">
					<?php twoSectionDescription($section2_description); ?>
				</div>
			</div>
			<img src="img/img3.svg" style="position:absolute;top:412px;left:288px">
			<img src="img/img4.svg" style="position:absolute;top:837px;left:707px">
			<div class="textBlocks">
				<?php
                    section2Table($section2_table1);
                    section2Table($section2_table2);
                    section2Table($section2_table3);
                    section2Table($section2_table4);
                ?>
			</div>
			<div class="circleBig1"></div>
			<div class="circleBig2"></div>
		</div>
	</div>





	<div class="section section3">
		<h2>
			<?php p($section3_title); ?>
		</h2>
		<div class="additional">
			<?php p($section3_addition); ?>
		</div>
		<div class="wrapper">
			<div class="leftText">
				<div class="line"></div>
				<?php 
					pSection3($section3_1, " ");
					pSection3($section3_2, $section3_2_);
					pSection3($section3_3, $section3_3_);
				?>
			</div>

			<div class="rightImg">
				<div style="position:relative">
					<div class="points1">
						<div data-number="1" class="point1 active"></div>
						<div data-number="2" class="point2"></div>
						<div data-number="3" class="point3"></div>
					</div>
				</div>
				<div class="circle1"></div>
				<div class="circle2"></div>
				<div class="circle3"></div>
				<div class="img">

					<img src="<?php p($section3_img); ?>" />
				</div>
			</div>
		</div>
	</div>





	<div class="section section4">
		<h2>
			<?php p($section4_title); ?>
		</h2>
		<div class="wrapper">
			<div style="overflow: hidden;">
				<?php 
				section4($section4_card1_photo, $section4_card1_name, $section4_card1_add, $section4_card1_history, 1, 'o', 8); 
				section4($section4_card2_photo, $section4_card2_name, $section4_card2_add, $section4_card2_history, 2, 'y', 10); 
			?>
			</div>
			<div class="textOfferta">
				Бесплатная консультация косметолога перед проведением  процедуры
			</div>
			<div class="svgs">
				<img src="/img/img1.png" />
			</div>
		</div>
	</div>





	<div class="section section5">
		<h2>
			<?php p($section5_title); ?>
		</h2>
		<div class="additional">
			<?php p($section5_addition); ?>
		</div>
		<div class="wrapper nonActive">
			<?php section5Table($section5_arr); ?>
		</div>
	</div>





	<div class="section section6">

		<div class="wrapper">
			<div class="circle">
				<div class="circleBig"></div>
				<div class="photo">
					<img src="<?php p($section6_photo); ?>" />
				</div>
			</div>

			<div class="_wrapper">
				<div class="wrap">
					<h2>
						<?php p($section6_title); ?>
					</h2>
					<div class="additional">
						<?php p($section6_addition); ?>
					</div>
					<div class="form">
						<div class="phone"></div>
						<input placeholder="+7 900 000 00 00" class="inpPhone phoneAction2" />
						<div class="batton btnBig phoneAction2">
							<?php p($section6_batton); ?>
						</div>
					</div>
				</div>

			</div>



			<div class="_wrapSecond">
				<div class="text">
					<div class="title">Фото наших клиентов до и после</div>
					<img src="img/img2.png" alt="">
				</div>
				<div class="slider">
					<div class="wrapSlider"><?php section6Img($section6_imgs); ?></div>
					<div class="points">
						<div data-number="1" class="point1 active"></div>
						<div data-number="2" class="point2"></div>
						<div data-number="3" class="point3"></div>
					</div>
				</div>


			</div>
		</div>
	</div>





	<div class="section section7">
		<h2>
			<?php p($section7_title); ?>
		</h2>

		<div class="wrap">
			<div class="out"></div>
			<div class="midl"></div>
			<div class="in">
				<?php p($section7_flamp); ?>
			</div>



		</div>
		<div class="circle1"></div>
		<div class="circle2"></div>




		<div class="bottom">
			<div class="lineWrap">
				<div class="line">
					<div class="line1"></div>
					<div class="line2"></div>
				</div>
				<div class="circle">
					<div class="point"></div>
				</div>
			</div>
			<div class="text">
				<div style="height: 93px;">
					<img src="img/comm1.svg" alt="">
				</div>
				<div style="height: 87px;" class="notMobile">
					<img src="img/comm2.svg" alt="">
				</div>
			</div>
		</div>

	</div>





	<div class="section section8">
		<h2>
			<?php p($section8_title); ?>
		</h2>
		<div class="wrapper">


			<div class="circle">
				<div class="circle"></div>
				<div class="circlePhoto">
					<img src="img/img8.png" alt="">
				</div>
				<div class="img">
					<img style="padding: 6px 56px;" src="/img/img05.svg" alt="">
				</div>
			</div>

			<div class="inform">
				<?php section8($section8_question, $section8_answer); ?>
			</div>
		</div>

	</div>






	<div class="section section9">
		<div class="wrapper" style="max-width:1366px">
			<div class="circle">
				<div class="circleBig"></div>
				<div class="photo">
					<img src="<?php p($section9_photo); ?>" />
				</div>
			</div>

			<div class="_wrapper">
				<div class="wrap">
					<h2>
						<?php p($section9_title); ?>
					</h2>
					<div class="additional">
						<?php p($section9_addition); ?>
					</div>
					<div class="form">
						<div class="phone"></div>
						<input placeholder="+7 900 000 00 00" class="inpPhone phoneAction1" />
						<div class="batton btnBig phoneAction1">
							<?php p($section9_batton); ?>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>





	<div class="section section10">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4f7c7b4af32f4b8a9b68630f39ab1d3176e2d8a18221409fdc7cde3f43cf13b3&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>





	<div class="section section11">
		<div class="menuItems">

			<div class="left">
				<div class="item">
					<div class="logoDiv">
						<a href="" class="logo">Wellness-клуб
							<font>TONUS</font>
						</a>
						<div class="add">Красота и здоровье по доступным ценам</div>
					</div>
					<div class="soc">
						<div class="add">Присоединяйтесь к нам в соцсетях:</div>

						<a href="">
							<img src="/img/soc/img1.png" alt="">
						</a>
						<a href="">
							<img src="/img/soc/img2.png" alt="">
						</a>
						<a href="">
							<img src="/img/soc/img3.png" alt="">
						</a>
					</div>
				</div>
			</div>

			<div class="center">

				<div class="item">
					<div class="title">Инъекции</div>
					<a href="">Мезотерапия</a>
					<a href="">Биоревитализация</a>
					<a href="">Плазмолифтинг</a>
					<a href="">Диспорт</a>
					<a href="">Ботокс</a>
					<a href="">Филлер</a>
					<a href="">Контурная пластика</a>
				</div>

				<div class="item">
					<div class="title">Уход за лицом</div>
					<a href="">Чистка лица</a>
					<a href="">Пиллинги</a>
					<a href="">Маски</a>
					<a href="">Массаж</a>
				</div>

				<div class="item">
					<div class="title">Уход за телом</div>
					<a href="">Шугаринг</a>
					<a href="">Похудение</a>
					<a href="">Оздоровление тела</a>
					<a href="">Обертывание</a>
					<a href="">Массаж</a>
				</div>
			</div>

			<div class="right">

				<div class="item">
					<div class="title">Контакты</div>

					<div class="string">
						<div class="icon">
							<img src="/img/footer/phone.png" alt="">
						</div>
						<div class="text bold" style="margin: 0 0 5px 0;">+7 (3812) 45 35 18</div>
					</div>


					<a href="#callbackwidget" class="batton">ПЕРЕЗВОНИТЕ МНЕ</a>

					<div class="string">
						<div class="icon">
							<img src="/img/footer/location.png" alt="">
						</div>
						<div class="text">Омск, ул. Серова, 16Б</div>
					</div>

					<div class="string">
						<div class="icon">
							<img src="/img/footer/mail.png" alt="">
						</div>
						<a href="mailto:rcsm.info@mail.ru" class="text blue">info@tonus.ru</a>
					</div>

					<div class="string">
						<div class="icon">
							<img src="/img/footer/clock.png" alt="">
						</div>
						<div class="text" style="line-height: 17px;">
							<font>пн-сб.:</font> 8:00-21:00;
							<br>
							<font>вс.:</font> 09:00-15:00.</div>
					</div>
				</div>


			</div>


		</div>

		<div class="line"></div>

		<div class="copy">

			<div class="age">2010-2018</div>
			<div class="licen">Лицензия на осуществление медицинской деятельности</div>
			<a target="blank" class="author" href="https://weare31.com/">
				Создание сайта:
				<font> 31</font>
			</a>
		</div>
	</div>

</body>


</html>