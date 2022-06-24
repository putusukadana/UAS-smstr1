function deletedata(){
    let kode = document.getElementById("txkode").value;
    
    let dta = "kode="+kode;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/webproB1/server/DSN/dtdsndelete.php");
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