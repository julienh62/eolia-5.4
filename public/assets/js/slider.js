'use strict';    
    
           console.log("cc slider.js");
           /* création du tableau */
          const slide = ["char-accueiltitregros1500.webp", "chardepart-1500.webp", "cata.webp", "paddle.webp" ];
          let numero = 0;
 
          function ChangeSlide(sens) {
            /* document , page en cour */
            /* sens est un parametre */
            numero = numero + sens;
            /*les conditions permettent de boucler */
            if (numero > slide.length - 1)
                numero = 0;
            if (numero < 0)
                numero = slide.length - 1;
            document.getElementById("slide").src = "assets/uploads/slide/" + slide[numero];
          }

          setInterval("ChangeSlide(1)", 4000);

    /* création du tableau */
    const slidemobil = ["accueil-mobil-char.webp","accueil-cata2-mobil.webp", "accueil-kayak-mobil.webp", "accueil-mobil-paddle.webp" ];
    let numeromob = 0;

    function ChangeSlideMob(sens) {
      /* document , page en cour */
      /* sens est un parametre */
      numeromob = numeromob + sens;
      /*les conditions permettent de boucler */
      if (numeromob > slidemobil.length - 1)
          numeromob = 0;
      if (numeromob < 0)
          numeromob = slidemobil.length - 1;
      document.getElementById("slidemobil").src = "assets/uploads/slide/" + slidemobil[numeromob];
    }

    setInterval("ChangeSlideMob(1)", 4000);

