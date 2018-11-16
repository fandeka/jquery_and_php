   $.acak = function(arr) {
      // Acak dengan menggunakan algoritma Fisher-Yates
      var i = arr.length;
      if ( i != 0 ) {
         while ( --i ) {
            var j = Math.floor( Math.random() * ( i + 1 ) );
            var tempi = arr[i];
            var tempj = arr[j];
            arr[i] = tempj;
            arr[j] = tempi;
         }
      }
   
      return arr;
   }

   $(document).ready(function() {    
      $(":radio").click(function(e) {
         var pilihan = $(e.target).val();
         if (bankSoal[0].jawaban == pilihan)
            alert("Jawaban Anda benar");
         else
            alert("Jawaban Anda salah"); 
      });
      
      var bankSoal = [
      {
         "nomor"  : 1,
         "soal"   : "Yang menjadi ibukota Austria yaitu:",
         "jawabA" : "Vienna",
         "jawabB" : "Innsbruck",
         "jawabC" : "Roma",
         "jawabD" : "Warsawa",
         "jawaban": "A"
      },
      {
         "nomor"  : 2,
         "soal"   : "Kota Paris terletak di negara:",
         "jawabA" : "Italia",
         "jawabB" : "Belanda",
         "jawabC" : "Prancis",
         "jawabD" : "Swedia",
         "jawaban": "C"
      },
      {
         "nomor"  : 3,
         "soal"   : "Pisa adalah bangunan yang ada di negara:",
         "jawabA" : "Italia",
         "jawabB" : "Irlandia",
         "jawabC" : "Austria",
         "jawabD" : "Belanda",
         "jawaban": "A"
      },
      {
         "nomor"  : 4,
         "soal"   : "Yang disebut Deutsch yaitu:",
         "jawabA" : "Belanda",
         "jawabB" : "Inggris",
         "jawabC" : "Rumania",
         "jawabD" : "Jerman",
         "jawaban": "D"
      },
      {
         "nomor"  : 5,
         "soal"   : "Mata uang yang digunakan di Uni Eropa",
         "jawabA" : "Gulden",
         "jawabB" : "Pound Sterling",
         "jawabC" : "Euro",
         "jawabD" : "Ruble",
         "jawaban": "c"
      },
      {
         "nomor"  : 6,
         "soal"   : "Negara yang dulu dikenal sebagai Uni Sovyet:",
         "jawabA" : "Uni Eropa",
         "jawabB" : "Rusia",
         "jawabC" : "Bulgaria",
         "jawabD" : "Yugoslavia",
         "jawaban": "B"         
      },
      {
         "nomor"  : 7,
         "soal"   : "Amsterdam adalah ibukota negara:",
         "jawabA" : "Belanda",
         "jawabB" : "Inggris",
         "jawabC" : "Prancis",
         "jawabD" : "Swedia",
         "jawaban": "A"         
      },
      {
         "nomor"  : 8,
         "soal"   : "Egypt adalah nama negara: ",
         "jawabA" : "Yunani",
         "jawabB" : "Suriah",
         "jawabC" : "Mesir",
         "jawabD" : "Libya",
         "jawaban": "C"         
      }
      ];

      bankSoal = $.acak(bankSoal);      
      
      $(":radio").attr("checked", false);
      
      $("#divSoal").text(bankSoal[0].soal);
      $("#ketA").text(bankSoal[0].jawabA);
      $("#ketB").text(bankSoal[0].jawabB);
      $("#ketC").text(bankSoal[0].jawabC);
      $("#ketD").text(bankSoal[0].jawabD);
   });
