<section id="contacts" style="margin-bottom: 150px;"></section>
<section class="form">

    <div class="contactsContainer">
        <div class="contacts">
            <p>Адрес: Санкт-Петербург, Октябрьская набережная, д.104, к.1</p>
            <p>Телефон: +7 (777) 777-77-77</p>
        </div>
        <div class="contactsMap" id="map"></div>
	</div>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript">
	ymaps.ready(init);        
	function init() {
		var myMap = new ymaps.Map("map", {
			center: [59.868491, 30.485544],
			zoom: 13
		}, {
			searchControlProvider: 'yandex#search'
		});

	ymaps.geocode("г.Санкт-Петербург, Октябрьская набережная, д.104, к.1").then(function (res) {
		var coord = res.geoObjects.get(0).geometry.getCoordinates();
		var myPlacemark = new ymaps.Placemark(coord, null, {
			preset: 'islands#blueDotIcon'
		});
		myMap.geoObjects.add(myPlacemark);
	});
	}
	</script>

    <div class="formContainer">
		<p>Оставить заявку</p>
		<form enctype="multipart/form-data" method="post" id="form">
			<div class="field-block">
				<label for="name">Как к вам обращаться:</label>
				<input id="name" class="field" name="name" type="text" placeholder="Иванов Иван Иванович">
			</div>

			<div class="field-block">
				<label for="phone">Ваш телефон:</label>
				<input id="phone" class="field" name="phone" type="text" placeholder="+7 (800) 000-00-00">
            </div>
    		<div class="field-block">
				<label for="email">Ваша электронная почта:</label>
				<input id="email" class="field" name="email"type="email" placeholder="ivanov@email.com">
			</div>
			
			<div class="g-recaptcha" data-sitekey="6Lcyha4UAAAAAH9lvdUkWEzBpMSiDV9hjP9uhGrP"></div>

            
            <div class="pBtnWrap formButton">
                <button id="button" class="button btnOrange" type="submit"><span>Отправить</span></button>
            </div>
			<div class="result">
				<span id="answer"></span>
				<span id="loader"><img src="img/loader.gif" alt=""></span>
			</div>
		</form>
	</div>
</section>