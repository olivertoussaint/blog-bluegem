const data = {};

fetch('http://api.openweathermap.org/data/2.5/uvi?appid={e46b7a1358ab1c19a97c196e31bffa4e}&lat={37.75}&lon={-122.37}', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(data),
})
.then(response => response.json())
.then(data => {
  console.log('Success:', data);
})
.catch((error) => {
  console.error('Error:', error);
});