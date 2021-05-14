function getCities(country){
    let countryOut = document.querySelector(".selected-country");
    let cityOut = document.querySelector(".selected-city");
    let cities = document.querySelector("#cities");

    countryOut.innerHTML = "";
    cityOut.innerHTML = "";
    cities.innerHTML = `<option value="">Επιλέξτε μια πόλη</option>`;
   
    if(country === ""){
        return false;
    }

    countryOut.innerHTML = country;

    let http = new XMLHttpRequest();
    http.open("get", "script.php?country="+country, true);
    http.send();

    http.onload = function(){
        if(this.readyState == 4 && this.status == 200){
            let response = JSON.parse(this.responseText);
            let out = "";
            out += `<option value="">Επιλέξτε μια πόλη</option>`;
            for(let city of response){
                out += `
                    <option value='${city}'>${city}</option>
                `;
            }
            cities.innerHTML = out;
        }
    }
}

function displayCity(city){
    document.querySelector(".selected-city").innerHTML = city;
}
