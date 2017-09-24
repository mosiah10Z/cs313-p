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
}

function s2() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p2').style.display = 'block';
}

function s3() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p3').style.display = 'block';
}

function s4() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p4').style.display = 'block';
}

function s5() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p5').style.display = 'block';
}

function s6() {
    document.getElementById('shoppinglist').style.display = 'block';
    document.getElementById('p6').style.display = 'block';
}

var sum = 0;

function total(a) {

    sum = sum + a;
    //if (sum <= 295)
    document.getElementById('total').innerHTML = "<b>Total: $ </b>" + sum;
    //  else


}

function reset() {
    document.getElementByClassName("form1").reset();

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