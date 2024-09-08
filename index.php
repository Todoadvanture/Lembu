<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>For my Wolfie </title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" />
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

konten = [
  {
    gambar: "sti1.gif",
    ucapan: "hayyiee ayanggie reii tekedot-kedot, ekhem-ekhem hari apok ken?",
  },
  {
    gambar: "sti9.gif",
    ucapan: "hari sabtu? bukann iken tu hari mensive kitok yang ke 1 bulan >0<"
  },
  {
    gambar: "sti2.gif",
    ucapan: "maaf nek sebelom diok untuk nya nya aku yang comel, aku masih belom bise jadi pribadi yang lebeh peka dan paham tentang nya yongfin "
  },
  {
    gambar: "sti3.gif",
    ucapan: "kadang aku suke dok jelos tapi cinta ku padamu sangat jelass EEEE AAAAA "
  },
  {
    gambar:"sti6.gif",
    ucapan: "aku minta maaf nek nya² kane mungkin adok beberapa kesalahan yang aku sengajok atau dok di sengajok ke nya²"
  },
  {
    gambar: "sti4.gif",
    ucapan: "aku sayanggg samee wolfieee, jongon penah ovt yaaa nyanyaaa.. dan jongon penah nyanya ragukan sebope beso gase sayang aku ❤️ ❤️"
  },
  {
    gambar:"sti8.gif",
    ucapan: "aku bersyukur karna sehoki ken pacaran petame kali same nya²(soalnya kan crush beberapa hari, deket, jadian), setidok diok pandangan aku nya² baik meski toxic tapi dok ke aku 🌹"
  },
  {
    gambar: "sti5.gif",
    ucapan: "kalau buleh jujur aku tu clingy parah, cerewet, posesif, kuat cemburu, kuat ngambek, kuat jugok ego tapi aku tahan kane aku berusaha menjadi dewasa yang bise ngerti kah nya²"
  },
  {
    gambar: "sti6.gif", 
    ucapan: "aku sayanggggg nooo same nya² sampai mike kalau putus aku gamon dok(?) tapi aku gon putus aku nak nya² jdi yang petame dan terakhir"
  },
  {
    gambar: "sti7.gif",
    ucapan: "aku bise sedeh dan aku sangat sedeh kalau nya² maxah apok agi sampai meragukan aku, aku jugok sedeh kane dok jadi yang petame kot real life nya²"
  },
  {
    gambar: "sti9.gif",
    ucapan: "hubungan ken mungkin belom tegase bexot kane masih awal tapi aku bonyak berharap kalau rintangan yang bexot kedepon diok bise di atasiii samee samee❤️❤️❤️❤️"
  },
  {
    gambar: "sti2.gif",
    ucapan: "adok yang sebut hubungan bise betahan lame kane gase sayang cwo diok yang beso, jadi aku harap gase sayang nya² tu beso terus bukan dari 100 ke 0 tapi berkembang dari 0 ke infinity "
  },
  {
    gambar: "sti5.gif",
    ucapan: "i love youuu my bubub >0< my wolfie my man my universe.. aku harap bise teruss same nya² aminnn sadhu³ "
  },
  {
    gambar: "sti2.gif",
    ucapan: "smoga pribadi kitok cenderung lebih baik dari sebelum diok dan bise saling pecaye satu same lain"
  },
  {
    gambar: "sti3.gif",
    ucapan: "nyanya jongon insecureee 💕 tak bolehhhhh kane manusia lah di ciptakan Tuhan indah menurut citra Allah 💕 Tuhan lah atur smue jadi kita cukup berdamai dengan diri sndiri💕"
  },
  {
    gambar: "sti9.gif",
    ucapan: "cintai aku dengan ugal-ugalan nyaaa. . . aku dok kah risih kalau itu nyanya, malah aku senang kane dopot feedback yang setara"
  },
  {
    gambar: "sti4.gif",
    ucapan: "maaf kalau masih belum sesuai ekspektasi nya², aku sayaaanggg nyanyaaa💝💗💗. . HAPPY MENSIVE MY WOLFIE 💗💝💗💞💕"
  },
];

musik = "hbd yoel.mp3";
nomorWhatsapp = "6283801639367";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>
