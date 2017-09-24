function validateCardNum(input, e) {
    var x = input;
    var patt = /\d{4}\ \d{4}\ \d{4}\ \d{4}/;
    var patt2 = /\d{16}/;
    if (patt.test(x) == true || patt2.test(x) == true) {
        console.log("true");
        document.getElementById(e).style.visibility = 'hidden';
    } else {
        document.getElementById(e).style.visibility = 'visible';
    }
}

function validateState(input, e) {

    var x = input;
    var patt = /^\s*([A][L]|[A][K]|[A][Z]|[A][R]|[C][A]|[C][O]|[C][T]|[D][E]|[F][L]|[G][A]|[H][I]|[I][D]|[I][L]|[I][N]|[I][A]|[K][S]|[K][Y]|[L][A]|[M][E]|[M][D]|[M][A]|[M][I]|[M][N]|[M][S]|[M][O]|[M][T]|[N][E]|[N][V]|[N][H]|[N][J]|[N][M]|[N][M]|[N][J]|[N][Y]|[N][C]|[N][D]|[O][H]|[O][K]|[O][R]|[P][A]|[R][I]|[S][C]|[S][D]|[T][N]|[T][X]|[U][T]|[U][T]|[V][T]|[V][A]|[W][A]|[W][V]|[W][I]|[W][Y])\s*$/
    if (patt.test(x)) {
        document.getElementById(e).style.visibility = 'hidden';
    } else {
        document.getElementById(e).style.visibility = 'visible';
    }

}

function validateInput(input, e) {
    var x = input;
    var patt = /\D+/;
    if (patt.test(x)) {

        document.getElementById(e).style.visibility = 'hidden';
    } else {
        document.getElementById(e).style.visibility = 'visible';
    }
}

function validateZip(input, e) {
    var x = input;
    var patt = /\d{5}/;
    if (patt.test(x)) {

        document.getElementById(e).style.visibility = 'hidden';
    } else {
        document.getElementById(e).style.visibility = 'visible';
    }
}

function valiDate(input, e) {
    var x = input;
    var patt = /\d\d\/\d\d/;
    if (patt.test(x)) {

        document.getElementById(e).style.visibility = 'hidden';
    } else {
        document.getElementById(e).style.visibility = 'visible';
    }
}

function validateSec(input, e) {
    var x = input;
    var patt = /\d\d\d/;
    if (patt.test(x)) {

        document.getElementById(e).style.visibility = 'hidden';
    } else {
        document.getElementById(e).style.visibility = 'visible';
    }
}

function validatePhone(input, e) {
    var x = input;
    var patt = /\d{10}/;
    if (patt.test(x)) {

        document.getElementById(e).style.visibility = 'hidden';
    } else {
        document.getElementById(e).style.visibility = 'visible';
    }

}

function shoppingCart(input, e) {
    document.getElementById(input).style.display = 'block';
    document.getElementById(e).style.display = 'block';
}

function s1() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p1').style.display = 'block';
    if (document.getElementById('check1').checked == true){
        total(40);
        document.getElementById('item1').value = document.getElementById('p1').innerHTML;
        console.log(document.getElementById('item1').value);
    }
    else if(document.getElementById('check1').checked == false){
        document.getElementById('p1').style.display = 'none';
        total(-40);
       document.getElementById('item1').value = "";
        console.log(document.getElementById('item1').value);
    }
        
}

function s2() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p2').style.display = 'block';
    if (document.getElementById('check2').checked == true){
        total(40);
        document.getElementById('item2').value = document.getElementById('p2').innerHTML;
        console.log(document.getElementById('item2').value);
        
    }
        
    else if(document.getElementById('check2').checked == false){
        document.getElementById('p2').style.display = 'none';
        total(-40);
        document.getElementById('item2').value = "";
        console.log(document.getElementById('item2').value);
    }

        
}

function s3() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p3').style.display = 'block';
    if (document.getElementById('check3').checked == true) {
        total(50);
        document.getElementById('item3').value = document.getElementById('p3').innerHTML;
        console.log(document.getElementById('item3').value);
    } else if (document.getElementById('check3').checked == false) {
        total(-50);
        document.getElementById('p3').style.display = 'none';
         document.getElementById('item3').value = "";
        console.log(document.getElementById('item3').value);
    }


}

function s4() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p4').style.display = 'block';
    if (document.getElementById('check4').checked == true){
        total(40);
        document.getElementById('item4').value = document.getElementById('p4').innerHTML;
        console.log(document.getElementById('item4').value);
        
    }
        
    else if(document.getElementById('check4').checked == false){
        document.getElementById('p4').style.display = 'none';
        total(-40);
        document.getElementById('item4').value = "";
        console.log(document.getElementById('item4').value);
    }
}

function s5() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p5').style.display = 'block';
    if (document.getElementById('check5').checked == true){
        total(55);
        document.getElementById('item5').value = document.getElementById('p5').innerHTML;
        console.log(document.getElementById('item5').value);
        
    }
        
    else if(document.getElementById('check5').checked == false){
        document.getElementById('p5').style.display = 'none';
        total(-55);
        document.getElementById('item5').value = "";
        console.log(document.getElementById('item5').value);
    }
}

function s6() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p6').style.display = 'block';
    if (document.getElementById('check6').checked == true){
        total(40);
        document.getElementById('item6').value = document.getElementById('p6').innerHTML;
        console.log(document.getElementById('item6').value);
        
    }
        
    else if(document.getElementById('check6').checked == false){
        document.getElementById('p6').style.display = 'none';
        total(-40);
        document.getElementById('item6').value = "";
        console.log(document.getElementById('item6').value);
        
    }
}

var sum = 0;

function total(a) {

    sum = sum + a;
    //if (sum <= 295)
    document.getElementById('total').innerHTML = "<b>Total: $ </b>" + sum;
    //  else
//console.log(sum.toString());
  //  var dum = sum.toString();
   document.getElementById('totalNum').value = document.getElementById('total').innerHTML;
    console.log(document.getElementById('totalNum').value);

}

function uncheckAll() {
    document.getElementById('check1').checked = false;
    document.getElementById('check2').checked = false;
    document.getElementById('check3').checked = false;
    document.getElementById('check4').checked = false;
    document.getElementById('check5').checked = false;
    document.getElementById('check6').checked = false;
}



function reset() {
  //  document.getElementByClassName("form1").reset();

}

function resetCart() {
    document.getElementById('shoppinglist').style.display = 'none';


    document.getElementById('p1').style.display = 'none';
    document.getElementById('p2').style.display = 'none';
    document.getElementById('p3').style.display = 'none';
    document.getElementById('p4').style.display = 'none';
    document.getElementById('p5').style.display = 'none';
    document.getElementById('p6').style.display = 'none';

    sum = 0;
    document.getElementById('total').innerHTML = "<b>Total: $ </b>" + sum;
}