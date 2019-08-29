<?php
/**
 * Template Name: Способы оплаты
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

get_header();
?>

<div id="primary" class="content-area container">
	 <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
 	<div class="flex-sidebar">
 		<aside class="main-header left-panel">
 			<div class="left-panel__box">
 				<nav class="news-sidebar__menu">
 					<?php
 						wp_nav_menu( array(
 							'theme_location' => 'pay-menu',
 							'menu_id'        => 'sidebar_pay',
 						) );
 					?>
 				</nav>
 				<?php dynamic_sidebar( 'wiget_aside' ); ?>
 			</div>
 		</aside>
    <main class="site-main pay">
			<h1 class="section-title section-title_dark-theme">Способы<span class="color-orange"> оплаты</span></h2>
				<p>
					Платежные системы не стоят на месте. Сейчас не обязательно идти в офис для оплаты тура, ведь купить тур можно онлайн. Мы в свою очередь развиваемся и предлагаем разные способы оплаты наших услуг.
				</p>
			<section class="pay-box office">
				<h2 class="section-title section-title_dark-theme"><span class="color-orange">Оплата</span> наличными</h2>
				<figure class="pay-logo">
					<img src="<?bloginfo('template_url'); ?>/pics/pro-tour_pay.jpg" alt="ПРО-ТУР оплата в офисе">
				</figure>
				<p class="pay-descript">
					Вы можете приехать к нам в офис по адресу: г. Лида, Торгово-сервисный центр (ул. Победы, 37) офис 312 в любое рабочее время, заключить договор и внести оплату наличными.<br>
          <strong>Важно!</strong> Оплата производится только в белорусских рублях!
				</p>
			</section>
			<section class="pay-box epos">
				<h2 class="section-title section-title_dark-theme"><span class="color-orange">Оплата</span> через сервис E-POS</h2>
				<figure class="pay-logo">
					<img src="<?bloginfo('template_url'); ?>/img/icon_epos.png" alt="ПРО-ТУР через E-POS">
				</figure>
				<p class="pay-descript">
					Оплатить услуги ООО "ПРО-ТУР", pro-tour.by Вы можете через систему E-Pos, в любом удобном для Вас месте, в удобное для Вас время.<br>
					E-Pos это сервис, который позволяет Вам быстро оплачивать товары и услуги банковской картой через ЕРИП путем получения счета в виде специального QR-кода или же просто через услугу E-Pos в дереве ЕРИП.<br>
					Существует несколько вариантов оплаты:
				</p>
				<ol>
					<li>
						<h4>Оплата заказа без выставления персонального счета (по свободному реквизиту).</h4>
						Уточните у продавца товара/услуги сумму заказа и оплатите через ЕРИП.
						Для этого, в дереве ЕРИП, выберите сервис E-Pos и введите номер <strong>10137-1-1</strong>.
						После этого, на следующей  странице, введите сумму платежа и Ваши данные (чтобы продавец смог идентифицировать Ваш платеж в дальнейшем).
						Нажимайте далее <strong>«Оплатить»</strong> и дождитесь сообщения об успешно проведенной оплате.
					</li>
					<li>
						<h4>Оплата заказа с выставлением персонального счета.</h4>
						Продавец товара/услуги выставит Вам уникальный персональный счет.
						После этого, в дереве ЕРИП выберите услугу <strong>E-Pos</strong>, введите номер счета.
						Нажимайте далее <strong>«Оплатить»</strong> и дождитесь сообщения об успешно проведенной оплате.
					</li>
				</ol>
				<figure>
					<img src="<?bloginfo('template_url'); ?>/pics/por-tour_epos_1.jpg" alt="">
					<img src="<?bloginfo('template_url'); ?>/pics/por-tour_epos_2.jpg" alt="">
				</figure>
			</section>
			<section class="pay-box erip">
				<h2 class="section-title section-title_dark-theme"><span class="color-orange">Оплата в системе </span>"Расчет"(ЕРИП)</h2>
				<figure class="pay-logo">
					<img src="<?bloginfo('template_url'); ?>/img/icon_erip.png" alt="ПРО-ТУР через ЕРИП">
				</figure>
				<p class="pay-descript">
					Оплатить туристичекие услуги турагенства "PRO-tour.by" Вы можете через систему "Расчет" (ЕРИП) в любое удобное для Вас время, даже не выходя из дома.<br>
					Совершить оплату можно с использованием наличных денежных средств, электронных денег и банковских платежных карточек в пунктах банковского обслуживания банков, которые оказывают услуги по приему платежей, а также посредством инструментов дистанционного банковского обслуживания.
				</p>
			</section>
			<section class="pay-box erip">
				<h5>Шаги для осуществления платежа:</h5>
				<p>
					<ul>
						<li>
							<strong>Шаг 1</strong> В дереве ЕРИП Выбираем пункты:<br>
	    				"Система "Расчёт" (ЕРИП) -> Туризм и отдых -> Турагенства, туроператоры ->  ПРО-ТУР -> Туристические услуги
						</li>
						<figure>
							<img src="<?bloginfo('template_url'); ?>/pics/pro-tour_erip.jpg" alt="ПРО-ТУР через ЕРИП">
						</figure>
						<li>
							<strong>Шаг 2</strong> Для оплаты "Услуги" вводим <strong>Номер заказа</strong> (указывается в электронном письме, СМС на телефон, или уточняете у менеджера нашего агентства)
						</li>
						<li>
							<strong>Шаг 3</strong> Проверяем корректность информации по платежу
						</li>
						<li>
							<strong>Шаг 4</strong> Совершить платеж
						</li>
						<li>
							<strong>Результат</strong> Туристические услуги оплачены. Квитанция из банка или электронная квитанция интернет-банка являются подтверждением оплаты.
						</li>
					</ul>
				</p>
				<p>
					<strong>Важно!</strong> Если Вы осуществляете платеж в кассе банка, пожалуйста, сообщите кассиру о необходимости проведения платежа через систему ”Расчет“ (ЕРИП).
				</p>
			</section>
			<section class="pay-box easypay">
				<h2 class="section-title section-title_dark-theme"><span class="color-orange">Оплата через</span> сервис онлайн платежей (EasyPay)</h2>
				<p class="pay-descript">
					Также, для оплаты туристических услуг вы можете воспользоваться услугой <strong>"интернет-эквайринг"</strong> банковских карт международных платежных систем <strong>Visa, MasterCard и Белкарт</strong>"<br>
					Обращаем Ваше внимание - на нашем сайте не нужно вводить Ваши персональные данные (пароли, номера кошельков и т.п.) Оплата производится в системе электронных платежей <strong>EasyPay</strong> на защищенной странице сервиса.
				</p>
				<figure class="pay-logo">
					<img src="<?bloginfo('template_url'); ?>/img/icon_easypay.png" alt="PRO-tour.by easypay">
				</figure>
			</section>
			<section class="pay-box easypay">
				<h5>Порядок оплаты услуг через <strong>"интернет-эквайринг"</strong>:</h5>
				<ol>
					<li>
						Связываетесь с нашими менеджерами и бронируете подходящий для Вас тур(экскурсию) по телефону, e-mail, через ВК, инстаграмм, viber.
					</li>
					<li>
						После подтверждения бронирования получаете договор и ссылку на оплату на указанный Вами телефон, e-mail или любым  другим удобным для Вас способом (согласовываете с менеджером нашего турагенства).
					</li>
					<li>
						Переходите по ссылке на <strong>защищенную</strong> страницу оплаты, вводите реквизиты своей банковской карты, производите оплату.
					</li>
					<li>
						Уведомляете нас о произведении оплаты (достаточно связаться с нашими менеджерами или написать сообщение).
					</li>
					<li>
						В течении 5 банковских дней получаете от нас подтверждение о зачислении денежных средств и информацию (документы) по вашей заявке.
					</li>
				</ol>
			</section>
			<section class="pay-box easypay">
				<h5>Пошаговая инструкция по оплате электронного счета через систему EasyPay:</h5>
				<ul>
					<li>
						<strong>Шаг 1</strong> На адрес вашей электронной почты (СМС на указанный Вами телефон) выслано письмо со ссылкой на служебную страницу системы EasyPay с вашим счетом. Проходите по ссылке.
					</li>
					<li>
						<strong>Шаг 2</strong> Нажимаете на ссылку и переходите на служебную страницу системы EasyPay. На данном шаге в открывшемся окошке проверьте, пожалуйста, детали Вашего заказ и сумму. Если все данные корректны жмите кнопку "Оплатить". Если есть неточности, не волнуйтесь - просто свяжитесь с нашими менеджерами.
					</li>
					<figure>
						<img src="<?bloginfo('template_url'); ?>/pics/por-tour_card_1.jpg" alt="PRO-tour.by easypay">
					</figure>
					<li>
						<strong>Шаг 3</strong> Нажав кнопу "Оплатить", Вы попадаете на защищённую страницу оплаты системы EasyPay. Здесь требуется ввести данные карты, которую Вы используете для оплаты, а также защитный CW-код. Заполнив все поля формы и проверив корректность введенных данных, нажимайте на кнопку "Оплатить".
					</li>
					<figure>
						<img src="<?bloginfo('template_url'); ?>/pics/por-tour_card_2.jpg" alt="PRO-tour.by easypay">
					</figure>
					<li>
						<strong>Результат</strong> В случае успешного завершение операции Вы увидите соответствующее уведомление. Туристические услуги оплачены, на адрес вашей электронной почты выслана электронная квитанция.
					</li>
				</ul>
				<p>
					<strong>Внимание!</strong> После совершения оплаты с использованием банковской карточки необходимо сохранять полученные чеки (подтверждение об оплате) для сверки с выпиской из карт-счёта (с целью подтверждения совершённых операций в случаях возникновения спорных ситуаций).
				</p>
			</section>
			<section class="pay-box easypay">
				<h2 class="section-title section-title_dark-theme">Оплата на расчетный счет<span class="color-orange"> через</span> банк на территории <span class="color-orange">Республики Беларусь</span></h2>
				Вы можете произвести оплату на основании договора или банковских реквизитов нашей компании через любой банк на территории Республики Беларусь.
				Обращаем ваше внимание, что такой способ оплаты доступен как для граждан Республики Беларусь, так и для иностранных граждан, которые уже находятся на территории Беларуси.
				<strong>Внимание!</strong> Возможно взимание комиссии. Уточняйте размер возможной комиссии по платежу в банке.
				<h5>Чтобы произвести оплату в банке, необходимо:</h5>
				<ol>
					<li>
						Оставить заявку на интересующую вас туристическую услугу (тур, экскурсию и пр.)
					</li>
					<li>
						Получить договор с подписью и печатью
					</li>
					<li>
						Произвести оплату в банке на основании реквизитов, указанных в договоре
					</li>
					<li>
						Отправить копию (скан или фото) квитанции об оплате любым удобным способом (e-mail, viber, vk, Белпочта, лично)
					</li>
					<li>
						Получить необходимые по туру документы (билеты, ваучеры и пр.) и подробную информацию по отправке у менеджеров нашего агенства (время и адрес сбора, контакты сопровождающего и другую важную информацию)
					</li>
				</ol>
				<h5>
					Реквизиты, необходимые для платежа:
				</h5>
				<ul>
					<li>
						Наименование: <strong>ООО "ПРО-ТУР"</strong>
					</li>
					<li>
						Юридический адрес: <strong>РБ 231300 г. Лида ул. Победы, 37 офис 312</strong>
					</li>
					<li>
						УНП: <strong>591361984</strong>
					</li>
					<li>
						Расчетный счет:<br>
						<strong>р/с BY92BAPB30122866700140000000</strong>
						в OАО «БЕЛАГРОПРОМБАНК» г. Лида ул. Тавлая,4
						Код (БИК): <strong>BAPBBY24457</strong>
					</li>
					<li>
						Назначение платежа: Фамилия туриста, направление, номер заявки (договора)
					</li>
					<li>
						Сумма к оплате: Согласно стоимости туристических услуг. *<br>
						* Если вы производите предоплату для бронирования - указывается сумма, заранее согласованная с менеджером.
					</li>
				</ul>
			</section>
			<section class="form-box">
				<h3 class="section-title section-title_dark-theme">Остались <span class="color-orange">вопросы?</span> Хотите заказать <span class="color-orange">консультацию?</span></h3>
				<p>заполните поля и мы свяжемся с Вами в ближайшее время</p>
				<form id="about_form" method="post" class="order-form">
					<!-- Hidden Required Fields -->
					<input type="hidden" name="project_name" value="pro-tour.by">
					<input type="hidden" name="admin_email" value="<?php echo get_field('email_form', 47); ?>">
					<input type="hidden" name="form_subject" value="Заявка со страницы <?echo the_title();?>">
					<!-- END Hidden Required Fields -->
					<input id="name" class="order-form__input name" type="text" name="name"
					value="" placeholder="Ваше имя" pattern="^([A-Za-zА-Яа-яЁё\.\-]{2,20})" required>
					<input id="phone" class="order-form__input phone" type="text" name="phone"
					value="" placeholder="Ваш телефон" required>
					<textarea id="message" class="order-form__input message" name="message" placeholder="Задайте вопрос"></textarea>
					<div class="order-form__сonsent">
						<button id="submit" class="btn cloud-link order-form__btn" type="submit" name="submit">
							Отправить
						</button>
						<div class="сonsent-box">
							<input id="сonsent-p" type="checkbox" name="сonsent" value="" required checked>
							<label for="сonsent-p">
								Согласие на обработку персональных данных
							</label>
						</div>
					</div>
				</form>
			</section>
  	</main><!-- #main about-->
	</div>
</div><!-- #primary -->

<?php

get_footer();
