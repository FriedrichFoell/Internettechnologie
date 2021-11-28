function KommentarKnopf(Kommentarfeld){

              document.getElementById(Kommentarfeld).style.display = 'block';

  }
  function countChars(Kommentarfeld){
      var maxLength = 500;
      var strLength = Kommentarfeld.value.length;
      var charRemain = (maxLength - strLength);

      if(charRemain <= 0){
          document.getElementById("Zeichen").innerHTML = '<span style="color: red;">Sie haben die maximale Anzahl an Zeichen erreicht</span>';
      }else{
          document.getElementById("Zeichen").innerHTML = charRemain+' characters remaining';
      }
  }
