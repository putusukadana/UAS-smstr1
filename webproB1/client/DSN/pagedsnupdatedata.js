function updatedata(){
    let kode = document.getElementById("txkode").value;
    let nama = document.getElementById("txnama").value;
    let jkel = document.getElementById("txjkel").value;
    let jur = document.getElementById("txjur").value;

    let dta = "kode="+kode+"&nama="+nama+"&jurusan="+jur+"&jkel="+jkel;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/webproB1/server/DSN/dtdsnupdate.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/webproB1/client/index.php?p=dosen";
        },1500);
    }

}