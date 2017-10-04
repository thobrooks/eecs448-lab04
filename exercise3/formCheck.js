function reset(){
    //Works blank apparently
}

function check(){
    var rad1 = document.getElementById("ship1");
    var rad2 = document.getElementById("ship2");
    var rad3 = document.getElementById("ship3");
    var item1 = document.getElementById("i1").value;
    var item2 = document.getElementById("i2").value;
    var item3 = document.getElementById("i3").value;
    var use = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    if (!rad1.checked && !rad2.checked && !rad3.checked){
        alert("Pick a shipping method.");
        return false;
    }
    else if (item1.length == 0 || item2.length == 0 || item3.length == 0){
        alert("You must put a value into all of the item text boxes.");
        return false;
    }
    else if (use == "" || pass == "" || use.indexOf("@") === -1 || use.indexOf(".") === -1){
        alert("Can not authenticate.");
        return false;
    }
    else
        return true;
    
}
