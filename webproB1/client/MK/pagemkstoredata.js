function storedata(){
    let kode = document.getElementById("txkodemk").value;
    let nama = document.getElementById("txnamamk").value;
    // let jkel = document.getElementById("txjkel").value;
    // let jur = document.getElementById("txjur").value;  

    let dta = "kode="+kode+"&nama="+nama;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/webproB1/server/MK/dtmkstore.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);
    console.log(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/webproB1/client/index.php?p=matakuliah";
        },1500);
    }

}