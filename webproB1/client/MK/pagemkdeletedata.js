function deletedata() {
  let kodemk = document.getElementById("txkodemk").value;

  let dta = "kode=" + kodemk;
  const gh = new XMLHttpRequest();
  gh.open("POST","http://localhost/webproB1/server/MK/dtmkdelete.php");
  gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  gh.send(dta);
    

  gh.onload = function () {
    const dta = JSON.parse(this.responseText);
    console.log(dta);
    if (dta["sukses"]) {
      document.getElementById("pesan").style.display = "block";
    }
    setTimeout(() => {
      window.location.href = "http://localhost/webproB1/client/MK/index.php?p=matakuliah";
    }, 1500);
  };
}
