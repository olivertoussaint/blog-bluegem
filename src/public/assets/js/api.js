const APIKEY ='e46b7a1358ab1c19a97c196e31bffa4e';

let apiCall = function(city){
	let url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${APIKEY}&units=metric&lang=fr`;

	function capitalize(str){
		return str[0].toUpperCase() + str.slice(1);
	}
	
	fetch(url).then(response => 
	response.json().then(data => {
		let temp = Math.round(data.main.temp)
		let wind = Math.round(data.wind.speed*3.6)
		let pressure = data.main.pressure

		const dt = data.dt
		const sunrise = data.sys.sunrise
		const sunset = data.sys.sunset

		let ssd = new Date(sunset*1000)
		let srd = new Date(sunrise*1000)
	
		document.querySelector('#icon').innerHTML = "<img src=\"http://openweathermap.org/img/wn/" + data.weather[0].icon + ".png\" >";
		document.querySelector('#description').innerHTML = capitalize(data.weather[0].description);
		document.querySelector('#city').innerHTML = "<img src=\"src/public/icons/picto-location" +".png\">" + data.name +'<br>'+ data.sys.country;
		document.querySelector('#temp').innerHTML = "<img src=\"src/public/icons/thermometer-measurement" +".png\">" + `${temp}` + '°C';
		document.querySelector('#humidity').innerHTML = "<img src=\"src/public/icons/moist-icon" +".png\">" + data.main.humidity + '%';
		document.querySelector('#wind').innerHTML = "<img src=\"src/public/icons/silhouette" +".png\">" + `${wind}`+'&nbsp;' + 'km/h';
		document.querySelector('#sunset').innerHTML = "<img src=\"src/public/icons/sun" +".png\">"+'&nbsp;'+"lev&eacute;e du soleil"+'<br>' + srd.getHours()+':' + srd.getMinutes();
		document.querySelector('#sunrise').innerHTML = "<img src=\"src/public/icons/sun" +".png\">"+'&nbsp;'+"coucher du soleil"+'<br>' + ssd.getHours()+':' +ssd.getMinutes();
		document.querySelector('#pressure').innerHTML = "barom&ecirc;tre"+'<br>' + `${pressure}`+','+0+0+'&nbsp;'+'hPa';
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

