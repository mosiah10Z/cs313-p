
function myFunction() {
    var x = document.getElementById("input1").value;
        if (x >= 0 && x <= 118)
    document.getElementById("error").innerHTML = "";
    else
        document.getElementById("error").innerHTML = "Invalid input";    
            
    }

function myFunction2() {
    var x = document.getElementById("input2").value;
        if (x >= 0 && x <= 118)
    document.getElementById("error2").innerHTML = "";
    else
        document.getElementById("error2").innerHTML = "Invalid input";        
    }

function validateSSN1() {
    var x = document.getElementById("ssn1").value;
    console.log(x);
    var patt = /\d\d\d\-\d\d\-\d\d\d\d/;
    if (patt.test(x)) {
        console.log("true");
        document.getElementById("ssne1").innerHTML = "";
    }
    else
        document.getElementById("ssne1").innerHTML = "Invalid SSN";
        
    }
    
function validateSSN2() {
    var x = document.getElementById("ssn2").value;
    console.log(x);
    var patt = /\d\d\d\-\d\d\-\d\d\d\d/;
    if (patt.test(x)) {
        console.log("true");
        document.getElementById("ssne2").innerHTML = "";
    }
    else
        document.getElementById("ssne2").innerHTML = "Invalid SSN";
        
    }

function validateCardNum1() {
    var x = document.getElementById("card1").value;
    var patt = /\d{4}\ \d{4}\ \d{4}\ \d{4}/;
    var patt2 = /\d{16}/;
    if (patt.test(x) == true || patt2.test(x) == true) {
        console.log("true");
        document.getElementById("cardEr1").innerHTML = "";
    }
    else {
        document.getElementById("cardEr1").innerHTML = "Invalid credit card number";
    }
}

function validateCardNum2() {
    var x = document.getElementById("card2").value;
    var patt = /\d{4}\ \d{4}\ \d{4}\ \d{4}/;
    var patt2 = /\d{16}/;
    if (patt.test(x) == true || patt2.test(x) == true) {
        console.log("true");
        document.getElementById("cardEr2").innerHTML = "";
    }
    else {
        document.getElementById("cardEr2").innerHTML = "Invalid credit card number";
    }
}

function valiDate1() {
    var date = document.getElementById("date1").value;
    var patt = /[1][0-2]\/[0-3][0-1]\/[1][7-9][5-9][3-9]/;
    var patt2 = /[0-9]\/[0-9]\/[1][7-9][5-9][3-9]/;
    var patt3 = /[0-9]\/[1-3][0-1]\/[1][7-9][5-9][3-9]/;
    var patt4 = /[0-9]\/[1-9]\/[2][0][0-9][0-9]/;
    var patt5 = /[0-9]\/[1-9]\/[2][1][0][0]/;
    var patt6 = /[1][0-2]\/[1-9]\/[2][0][0-9][0-9]/;
    var patt7 = /[0-9]\/[1-3][0-1]\/[2][0][0-9][0-9]/;
    var patt8 = /[0-9]\/[1-3][0-1]\/[2][1][0][0]/;
    if (patt.test(date) == true || patt2.test(date) == true || patt3.test(date) == true || patt4.test(date) == true || patt5.test(date) == true || patt6.test(date) == true || patt7.test(date) == true || patt8.test(date) == true ) {
        console.log(true);
        document.getElementById("dateEr1").innerHTML = "";
    }
    else 
        document.getElementById("dateEr1").innerHTML = "Invalid date";
        
    
}

function valiDate2() {
    var date = document.getElementById("date2").value;
    var patt = /[1][0-2]\/[0-3][0-1]\/[1][7-9][5-9][3-9]/;
    var patt2 = /[0-9]\/[0-9]\/[1][7-9][5-9][3-9]/;
    var patt3 = /[0-9]\/[1-3][0-1]\/[1][7-9][5-9][3-9]/;
    var patt4 = /[0-9]\/[1-9]\/[2][0][0-9][0-9]/;
    var patt5 = /[0-9]\/[1-9]\/[2][1][0][0]/;
    var patt6 = /[1][0-2]\/[1-9]\/[2][0][0-9][0-9]/;
    var patt7 = /[0-9]\/[1-3][0-1]\/[2][0][0-9][0-9]/;
    var patt8 = /[0-9]\/[1-3][0-1]\/[2][1][0][0]/;
    if (patt.test(date) == true || patt2.test(date) == true || patt3.test(date) == true || patt4.test(date) == true || patt5.test(date) == true || patt6.test(date) == true || patt7.test(date) == true || patt8.test(date) == true ) {
        console.log(true);
        document.getElementById("dateEr2").innerHTML = "";
    }
    else 
        document.getElementById("dateEr2").innerHTML = "Invalid date";
        
    
}