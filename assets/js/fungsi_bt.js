function convertToRupiah(angka)
{
  var rupiah = '';    
  var angkarev = angka.toString().split('').reverse().join('');
  for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
  return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}

function jml_total()
     {
         var tot_price=document.bt.price.value*document.bt.tot_tiket.value;
         return tot_price;
      }

  function tampil()
          {
              document.getElementById("tot_price").innerHTML=convertToRupiah(jml_total());
          }