<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="komunikat"></div><br />
<div id="komunikat2"></div>
<script type="text/javascript">
    var a = {
        zycie: 1110,
        rany: 1110,
        kondycja: 140,
        atak: 67,
        obrona: 54,
    };

    var b = {
        zycie: 110,
        rany: 10,
        kondycja: 400,
        atak: 7,
        obrona: 7,
    };

    function walka(zycieJa, ranyJa, kondycjaJa, atakJa, obronaJa, zycieTy, ranyTy, kondycjaTy, atakTy, obronaTy){
        var obrazenia = 0;
        var obrazenia2 = 0;
        if (zycieJa<=0 || ranyJa<=0 || zycieTy<=0 || ranyTy<=0){
            document.getElementById("komunikat").innerHTML = ("Walka nie mogła się odbyć</br>");
        } else {
            document.getElementById("komunikat").innerHTML = ("Walka rozpoczęta</br><hr>");
            // poprawic obliczanie zeby nie było ujemności ifem
            while(zycieJa>0 && ranyJa>0 && zycieTy>0 && ranyTy>0){
                if (atakJa>obronaTy){
                obrazenia = atakJa - obronaTy;
                }
                ranyTy -= obrazenia;
                zycieJa -= kondycjaJa;
                //riposta
                if (atakTy>obronaJa){
                obrazenia2 = atakTy - obronaJa;
                }
                ranyJa -= obrazenia2;
                zycieTy -= kondycjaTy;

              //  if(zycieJa==0 || ranyJa==0 || zycieTy==0 || ranyTy==0){ break; }
              // else ???????????????????????

                var kom1 = "Atakuję: <br />zadaję cios i tracę "+kondycjaJa+" kondycji<br />";
                var kom2 = "Pozostało mi "+zycieJa+" życia, przeciwnik traci "+obrazenia+" ran<br /><hr><br />";
                var kom3 = "Kontratak: <br />Przeciwnik zadaję cios i traci "+kondycjaTy+" kondycji<br />";
                var kom4 = "Pozostało mu "+zycieTy+" życia, Ja tracę "+obrazenia2+" ran<br /><hr color=\"red\">";

              document.getElementById("komunikat").innerHTML += (kom1+kom2+kom3+kom4);
            }
            document.getElementById("komunikat").innerHTML += ("<hr color=\"blue\"><br />Koniec walki, Twoje życie "+zycieJa+", twoje rany"+ranyJa+"<br />Życie przeciwnika "+zycieTy+", pozosrtało ran przeciwnikowi "+ranyTy);
            // nalezy tak zrobic, ze (if) jesli jest na - to wpisac 0.
        }

    }



    walka(a.zycie,a.rany,a.kondycja,a.atak,a.obrona,b.zycie,b.rany,b.kondycja,b.atak,b.obrona);
    //####################################################################################
    /*
    var obrazenia = atakJa - obronaTy;
                ranyTy = ranyTy-obrazenia;
                zycieJa = zycieJa-kondycjaJa;
                document.getElementById("komunikat2").innerHTML += ("Zadałeś "+obrazenia+" obrażeń przeciwnikowi");

    */

    //console.log("początkowe wartości: <br>");
   //console.log("życie A: "+a.zycie+" "+
    //           "rany A: "+a.rany+" ");


       // while(b.rany>0 || b.zycie>0 || a.rany>0 || a.zycie>0){
           // var obrazeniaA = a.atak - b.obrona;
         //   console.log("obrażenia "+obrazeniaA);
           // a.zycie = a.zycie - a.kondycja;
        //    console.log("życie: "+a.zycie);
           // b.rany = b.rany - obrazeniaA;

   // var wynik = "gracz A zadał "+obrazeniaA+" obrażeń graczowi B. Gracz B ma teraz "+b.rany+" ran.";
  //  var wynik2 += wynik;
  //  console.log(wynik2);

       // }



  //  console.log(a.zycie);

</script>
</body>
</html>
