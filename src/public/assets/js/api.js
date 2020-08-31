const APIKEY ='e46b7a1358ab1c19a97c196e31bffa4e';

let apiCall = function(city){
	let url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${APIKEY}&units=metric&lang=fr`;

	function capitalize(str){
		return str[0].toUpperCase() + str.slice(1);
	}
	function addZero(i) {
		if (i < 10) {
			i = "0" + i;
		}
		return i;
	}
	
	
	function refreshTime() {
	
		let d = new Date();
		let dateLocale = d.toLocaleString('fr-FR',{
			weekday: 'long',
			year: 'numeric',
			month: 'long',
			day: 'numeric',
			hour: 'numeric',
			minute: 'numeric',
			second: 'numeric'
		});
		document.getElementById("current_time").innerHTML = 'Nous sommes le : '+ dateLocale;
		}

		setInterval(refreshTime, 1000);

		var us = moment().tz("America/Los_Angeles");
		console.log(us.format());

	
	fetch(url).then(response => 
	response.json().then(data => {
		let temp = Math.round(data.main.temp);
		let wind = Math.round(data.wind.speed*3.6);
		let pressure = data.main.pressure;
		const sunrise = data.sys.sunrise;
		const sunset = data.sys.sunset;
		const weatherIconId = data.weather[0].icon;

		let ssd = new Date(sunset*1000);
		let srd = new Date(sunrise*1000);
	
		console.log(data);

		document.querySelector('#icon').innerHTML = `<img src="src/public/icons/weather-icon/${weatherIconId}.svg"/>`;
		document.querySelector('#description').innerHTML = capitalize(data.weather[0].description);
		document.querySelector('#city').innerHTML = "<img src=\"src/public/icons/svg/gps" +".svg\">" + data.name +'<br>'+ data.sys.country;
		document.querySelector('#temp').innerHTML = "<img src=\"src/public/icons/svg/thermometer-c" +".svg\">" + `${temp}` + '°C';
		document.querySelector('#humidity').innerHTML = "<img src=\"src/public/icons/svg/drops" +".svg\">" + data.main.humidity + '%';
		document.querySelector('#wind').innerHTML = "<img src=\"src/public/icons/svg/blowing" +".svg\">" + `${wind}`+'&nbsp;' + 'km/h';
		document.querySelector('#sunset').innerHTML = "<img src=\"src/public/icons/sun" +".png\">"+'&nbsp;'+"lev&eacute;e du soleil"+'<br>' + srd.getHours()+':' + addZero(srd.getMinutes());
		document.querySelector('#sunrise').innerHTML = "<img src=\"src/public/icons/sun" +".png\">"+'&nbsp;'+"coucher du soleil"+'<br>' + ssd.getHours()+':' + addZero(ssd.getMinutes());
		document.querySelector('#pressure').innerHTML = "<img src=\"src/public/icons/svg/barograph" +".svg\">" + `${pressure}`+','+0+0+'&nbsp;'+'hPa';
		document.body.className = data.weather[0].main.toLowerCase();
	})
	)

	.catch(function() {
		// catch any errors
	});
}

	document.querySelector('form').addEventListener('submit', function(e) {
	e.preventDefault();
	let city = document.querySelector('#inputCity').value;
	apiCall(city);
});

apiCall('goussainville');