function myMessage(){
    console.log("dat function dough")
}

function add(num1, num2){
    total = num1 + num2;
    console.log(total);
}

function add2(num3, num4){
    total2 = num3 + num4;
    return total2;
}

var add2result = add2(20, 32);

function flipCard(div) {
    $(div).hide();
}