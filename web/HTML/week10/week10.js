function getCountry(x) {
    if (x == "") {
        document.getElementById("answer").innerHTML = "bbbb";
        console.log("tell me");
        return;
    }
    country = new XMLHttpRequest();

    country.onreadystatechange = function () {

        console.log(country);
        if (country.readyState == 4 && country.status == 200) {
            console.log("tell me");
            document.getElementById("answer").innerHTML = country.responseText;
            console.log(country.responseText);
            console.log("telll me");
            
        }
    }

    country.open("GET", x, true);
    country.send();
}