let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kode = urlP.get("kode");

let urltarget = new URL("http://localhost/webproB1/server/MK/dtmkkode.php");
urltarget.searchParams.set("kode",kode);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txkodemk").value = dta["isi"][i][0];
        document.getElementById("txnamamk").value = dta["isi"][i][1];
    }

}