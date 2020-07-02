function openNav() {
    document.getElementById("mySidenav").style.width = "175px";
    document.getElementById("sideNav-perso").style.display ="none";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("sideNav-perso").style.display ="initial";
  }

  var flashMessageSuccess = document.getElementById('success');
  var flashMessageError = document.getElementById('error');

  if (flashMessageSuccess !== null) {
    setTimeout(function(){flashMessageSuccess.style.display = 'none'}, 5000);

  }

  if (flashMessageError !== null) {
    setTimeout(function(){flashMessageError.style.display = 'none'}, 5000);
  }
