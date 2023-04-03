function convertCtoF() {
    const celsius = document.getElementById("celsius").value;
    const fahrenheit = (celsius * 9/5) + 32;
    document.getElementById("result").innerHTML = `${celsius}°C = ${fahrenheit}°F`;
  }
  
  function convertFtoC() {
    const fahrenheit = document.getElementById("fahrenheit").value;
    const celsius = (fahrenheit - 32) * 5/9;
    document.getElementById("result").innerHTML = `${fahrenheit}°F = ${celsius}°C`;
  }
  