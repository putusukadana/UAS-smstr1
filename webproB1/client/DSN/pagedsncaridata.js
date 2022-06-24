let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kode = urlP.get("kode");

let urltarget = new URL("http://localhost/webproB1/server/DSN/dtdsnnim.php");
urltarget.searchParams.set("kode",kode);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

// console.log(send())

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    // this.responseText = dta; 
        for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txkode").value = dta["isi"][i][0];
        document.getElementById("txnama").value = dta["isi"][i][1];
        document.getElementById("txjkel").value = dta["isi"][i][3];
        document.getElementById("txjur").value = dta["isi"][i][2];
    }

}