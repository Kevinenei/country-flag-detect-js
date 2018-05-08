<!DOCTYPE html>
<html>
<head>
    <title>GEOIP DB - javascript example</title>
</head>
<body>
   <img id="localflag"></img>
<script>

function paisactual(){
  return localStorage.getItem("countryname").toLowerCase();
}

function Activate_Flag_Plugin()
  {
    if(localStorage.getItem("countryname")){
      var countryflag = document.getElementById('localflag');
      countryflag.src = 'flags/' + paisactual() +'.png';
    }
}

function consultarpais(){      
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://geoip-db.com/jsonp';
  var h = document.getElementsByTagName('script')[0];
  h.parentNode.insertBefore(script, h); 
}


var fechastring = "<?php echo date('Y/m/d'); ?>";
//var fechastring = "05/05/2018";
var fechaactual = new Date(fechastring);


if(!localStorage.getItem("fechasave") || !localStorage.getItem("countryname") || localStorage.getItem("countryname") === undefined){
  if(!localStorage.getItem("fechasave")){
  localStorage.setItem("fechasave", fechaactual);
  }

  function callback(data)
  {
    savecountry(data.country_code);
  }
  consultarpais();
  Activate_Flag_Plugin();
}

function savecountry(x){
  if(x != undefined){
  return localStorage.setItem("countryname", x); 
  }
}

if(fechaactual > new Date(localStorage.getItem("fechasave"))){
  localStorage.setItem("fechasave", fechaactual);
  function callback(data)
  {
    savecountry(data.country_code);
  }
  consultarpais();
}else{
  console.log("Por ahora no actualizar nada")
}


let stateCheck = setInterval(() => {
  if (document.readyState === 'complete') {
    clearInterval(stateCheck);
     Activate_Flag_Plugin();
  }
}, 100);

  </script>
</body>
</html>