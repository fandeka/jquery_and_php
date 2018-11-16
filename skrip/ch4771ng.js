$(document).ready(function() {    
    $("#nama-anda").val("user" + 
       Math.floor(Math.random()*10000));
       
    window.setTimeout("ambilPesan()",0);   

    $("#dialog").dialog ({
       autoOpen: false,
       resizable: false,
       buttons: {
	      "OK": function() {
             $("#dialog").dialog("close");     
             $("#pesan-anda").val("");
             $("#pesan-anda").focus();
	      }
       }
    });
    
    $("#pesan-masuk").dialog ({
         autoOpen: true,
         resizable: false,
         draggable: false,
         height: 410, 
         width: 774,
         position: [20,20],
         closeOnEscape: false,
         open: function(event, ui) { 
            $(".ui-dialog-titlebar-close").hide();
         }
    });
    
    $("#keterangan").dialog ({
         autoOpen: true,
         resizable: false,
         draggable: false,
         height: 150, 
         width: 774,
         position: [20, 460],
         closeOnEscape: false,
         open: function(event, ui) { 
            $(".ui-dialog-titlebar-close").hide();
         }
    });
    
    $("#pemakai").dialog ({
         autoOpen: true,
         resizable: false,
         draggable: false,
         height: 130, 
         width: 435,
         position: [820, 20],
         closeOnEscape: false,
         open: function(event, ui) { 
            $(".ui-dialog-titlebar-close").hide();
         }   
    });
 
    $("#pesan-keluar").dialog ({
         autoOpen: true,
         resizable: false,
         draggable: false,
         height: 440, 
         width: 435,
         position: [820, 170],
         closeOnEscape: false,
         open: function(event, ui) { 
            $(".ui-dialog-titlebar-close").hide();
         },
         buttons: {
			"Kirim": function() {
                $.ajax({
                   url: "simpesan.php",   
                   type: "POST",       
                   data: {"pemakai": $("#nama-anda").val(),
                          "pesan": $("#pesan-anda").val()},
                   success: function() {
                      $("#dialog").dialog("open");
                   }
                });     
		    }
         }
    });     
});
 
var param=""; // Berisi id terakhir milik pesan

function ambilPesan() {
   $.ajax({
      url: "proschat.php",   
      type: "GET",       
      data: { "id": param },
      success: function(data) {
         penanganPesan(data);
      }  
   }); 
       
   window.setTimeout("ambilPesan()", 5000);
}
    
function penanganPesan(data) {
    
   var indeks = data.indexOf("*id_akhir=");
       
   if (indeks == -1)  // Kalau
      return;
   
   var posisi = indeks + 10;
   var id_akhir = data.substr(posisi);
   var info = data.substr(0, indeks);
   
   param = id_akhir;     

   $("#pesan-masuk").prepend(info);
}     

 
