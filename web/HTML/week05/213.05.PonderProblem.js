
function problem1()
{
    //alert("Hello World");
    console.log("Hello World");
    
}


function problem2(name2, text2)
{
    var realname = name2;
    var mytext = text2;
    str = mytext.replace(/RICH_GUY/g, realname);
    
    console.log(str);
}

function problem3(text3)
{
    var celsius;
    var celsius = (text3 - 32) * 5/9;
    celsius = celsius.toFixed(2);
    console.log(celsius);
    
}

function problem4(text4)
{
    
    if (text4 < 1 || text4 > 5)
        {
            var e = new Error("Invalid weight");
            throw e;
        }
    else if (text4 == 1)
        console.log("$0.98");
    else if (text4 == 2)
        console.log("$1.19");
    else if (text4 == 3)
        console.log("$1.40");
    else if (text4 == 4)
        console.log("$1.61");
    else
        console.log("$1.82");     

        
}

function problem5(apr5, term5, amount5)
{
    for (var i = 1; i <= term5; i++)
        {
           amount5 = amount5 * ( 1 + apr5/100); 
        }
    amount5 = amount5.toFixed(2);
var string = String(amount5);
console.log(string);
}