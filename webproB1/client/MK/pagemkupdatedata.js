
function updatedata(){
    let kode = document.getElementById("txkodemk").value;
    let nama = document.getElementById("txnamamk").value;

    let dta = "kode="+kode+"&nama="+nama;
    const gh = new XMLHttpRequest();
    gh.open("post","http://localhost/webproB1/MK/server/dtmkupdate.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send();
    console.log(dta);

    gh.onload = function(){
        const dta = JSON .parse(this.responseText);
        
        if(dta["sukses"]){
            document.getElementById("pesan").style.display="block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/webproB1/client/MK/index.php?p=matakuliah";
        },1500);
    };
}
