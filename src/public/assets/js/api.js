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

	fetch(url).then(response => 
	response.json().then(data => {
		let temp = Math.round(data.main.temp);
		let wind = Math.round(data.wind.speed*3.6);
		let pressure = data.main.pressure;
		let feels_like = Math.round(data.main.feels_like);
		let visibility = (data.visibility/1000);
		const weatherIconId = data.weather[0].icon;

		console.log(data);

		document.querySelector('#icon').innerHTML = `<img src="src/public/icons/weather-icon/${weatherIconId}.svg"/>`;
		document.querySelector('#description').innerHTML = capitalize(data.weather[0].description);
		document.querySelector('#city').innerHTML = "<img src=\"src/public/icons/svg/gps" +".svg\">" + data.name +'<br>'+ data.sys.country;
		document.querySelector('#temp').innerHTML = "<img src=\"src/public/icons/svg/thermometer-c" +".svg\">" + `${temp}` + '°C';
		document.querySelector('#feels_like').innerHTML = 'Température ressentie :' + '<br>' + `${feels_like}` + '°C';
		document.querySelector('#visibility').innerHTML = "<img src=\"src/public/icons/svg/eyes" +".svg\">" + '<br>' + 'Visibilité : '+ '<br>' + `${visibility}` +'&nbsp;' + 'Km/h';
		document.querySelector('#humidity').innerHTML = "<img src=\"src/public/icons/svg/drops" +".svg\">" + data.main.humidity + '%';
		document.querySelector('#wind').innerHTML = "<img src=\"src/public/icons/svg/blowing" +".svg\">" + `${wind}`+'&nbsp;' + 'km/h';
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