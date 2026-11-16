const btntambah = document.getElementById("btntambahdata");
const btnkeluar = document.getElementById("btnTutup");
let checkform =false;
btntambah.addEventListener("click", function(){
    if(!checkform){
     formBarang.style.display = "block";
        
    }else{
     formBarang.style.display = "none";
    }
    checkform=!checkform;
});

btnkeluar.addEventListener("click", function(){
     formBarang.style.display = "none";
});

function editform(id,nama,jumlah){
        document.getElementById("id").value = id;
        document.getElementById("namabarang").value = nama;
        document.getElementById("jumlahbarang").value = jumlah;
}
function hapusdata(id){
      window.location.href = "hapusdata.php?id=" + id;
}