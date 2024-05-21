function Transpose()
 {
 //take values form form and assign them to a variable
 var inputText = document.getElementById('input').value; 
 var cryptography = document.getElementById('cryp').value;
 var cryptography2 = "";
 var gematria = document.getElementById('gema').value;
 var gematria1 = 0;
 var gematria2 = 0;
 var letter = "";
 
 //remove any spaces from the input text
 inputText = inputText.replace(/\s/g, "");
 
 //Find nubmer of characters in inputText
 var n = inputText.length;
 
 //inputText will be split up by character or letter
 var array = inputText.split("");
 
 //sets the focus back on the Transpose button
 document.getElementById("transpose").focus();
 
 //IF statement will decide which type of Gematriot to use for the alepbet
 if(gematria == "Katan"){
 var l1 = 1;var l2 = 2;var l3 = 3;var l4 = 4;var l5 = 5;var l6 = 6;var l7 = 7;var l8 = 8;var l9 = 9;var l10 = 1;var l11 = 2;var l12 = 3;var l13 = 4;var l14 = 5;var l15 = 6;var l16 = 7;var l17 = 8;var l18 = 9;var l19 = 1;var l20 = 2;var l21 = 3;var l22 = 4;var l23 = 5;var l24 = 6;var l25 = 7;var l26 = 8;var l27 = 9;
 }
 else if(gematria == "HaKadmi"){
 var l1 = 1;var l2 = 3;var l3 = 6;var l4 = 10;var l5 = 15;var l6 = 21;var l7 = 28;var l8 = 36;var l9 = 45;var l10 = 55;var l11 = 75;var l12 = 105;var l13 = 145;var l14 = 195;var l15 = 255;var l16 = 325;var l17 = 405;var l18 = 495;var l19 = 595;var l20 = 795;var l21 = 1095;var l22 = 1495;var l23 = 1995;var l24 = 2595;var l25 = 3295;var l26 = 4095;var l27 = 4995;
 }
 else if(gematria == "HaPerati"){
 var l1 = 1^2;var l2 = 2^2;var l3 = 3^2;var l4 = 4^2;var l5 = 5^2;var l6 = 6^2;var l7 = 7^2;var l8 = 8^2;var l9 = 9^2;var l10 = 10^2;var l11 = 20^2;var l12 = 30^2;var l13 = 40^2;var l14 = 50^2;var l15 = 60^2;var l16 = 70^2;var l17 = 80^2;var l18 = 90^2;var l19 = 100^2;var l20 = 200^2;var l21 = 300^2;var l22 = 400^2;var l23 = 500^2;var l24 = 600^2;var l25 = 700^2;var l26 = 800^2;var l27 = 900^2;
 }
 else if(gematria == "Miluy"){
 var l1 = 813;var l2 = 412;var l3 = 83;var l4 = 434;var l5 = 6;var l6 = 12;var l7 = 717;var l8 = 418;var l9 = 419;var l10 = 20;var l11 = 820;var l12 = 74;var l13 = 640;var l14 = 756;var l15 = 600;var l16 = 780;var l17 = 81;var l18 = 104;var l19 = 906;var l20 = 510;var l21 = 1010;var l22 = 406;var l23 = 820;var l24 = 640;var l25 = 756;var l26 = 81;var l27 = 104;
 }
 else if(gematria == "Ordinal"){
 var v1 = 1;var v2 = 2;var v3 = 3;var v4 = 4;var v5 = 5;var v6 = 6;var v7 = 7;var v8 = 8;var v9 = 9;var v10 = 10;var v11 = 11;var v12 = 12;var v13 = 13;var v14 = 14;var v15 = 15;var v16 = 16;var v17 = 17;var v18 = 18;var v19 = 19;var v20 = 20;var v21 = 21;var v22 = 22;var v23 = 23;var v24 = 24;var v25 = 25;var v26 = 26;var v27 = 27;
 }
 else{
 var l1 = 1;var l2 = 2;var l3 = 3;var l4 = 4;var l5 = 5;var l6 = 6;var l7 = 7;var l8 = 8;var l9 = 9;var l10 = 10;var l11 = 20;var l12 = 30;var l13 = 40;var l14 = 50;var l15 = 60;var l16 = 70;var l17 = 80;var l18 = 90;var l19 = 100;var l20 = 200;var l21 = 300;var l22 = 400;var l23 = 500;var l24 = 600;var l25 = 700;var l26 = 800;var l27 = 900;
 } 
 
 
 //IF statement will decide which type of algorithm to use base of the encryption selected
 if( cryptography == "Al-bam" )
 {
     for (var i=0; i < inputText.length; i++)
     {
      switch(array[i])
   {
   /*alef*/ case "\u05D0":gematria1 += l1;letter = "\u05DC";gematria2 += l12;break;  /*lamed*/
   /*bet*/  case "\u05D1":gematria1 += l2;letter = "\u05DE";gematria2 += l13;break;  /*mem*/
   /*gimel*/ case "\u05D2":gematria1 += l3;letter = "\u05E0";gematria2 += l14;break;  /*nun*/
   /*dalet*/ case "\u05D3":gematria1 += l4;letter = "\u05E1";gematria2 += l15;break;  /*samech*/
   /*hey*/  case "\u05D4":gematria1 += l5;letter = "\u05E2";gematria2 += l16;break;  /*ayin*/
   /*vav*/  case "\u05D5":gematria1 += l6;letter = "\u05E4";gematria2 += l17;break;  /*pey*/
   /*zayin*/ case "\u05D6":gematria1 += l7;letter = "\u05E6";gematria2 += l18;break;  /*tzadik*/
   /*chet*/ case "\u05D7":gematria1 += l8;letter = "\u05E7";gematria2 += l19;break;  /*kuf*/
   /*tet*/  case "\u05D8":gematria1 += l9;letter = "\u05E8";gematria2 += l20;break;  /*resh*/
   /*yod*/  case "\u05D9":gematria1 += l10;letter = "\u05E9";gematria2 += l21;break; /*shin*/
   /*kaf*/  case "\u05DB":gematria1 += l11;letter = "\u05EA";gematria2 += l22;break; /*tav*/
   /*lamed*/ case "\u05DC":gematria1 += l12;letter = "\u05D0";gematria2 += l1;break;  /*alef*/
   /*mem*/  case "\u05DE":gematria1 += l13;letter = "\u05D1";gematria2 += l2;break;  /*bet*/
   /*nun*/  case "\u05E0":gematria1 += l14;letter = "\u05D2";gematria2 += l3;break;  /*gimel*/
   /*samech*/ case "\u05E1":gematria1 += l15;letter = "\u05D3";gematria2 += l4;break;  /*dalet*/
   /*ayin*/ case "\u05E2":gematria1 += l16;letter = "\u05D4";gematria2 += l5;break;  /*hey*/
   /*pey*/  case "\u05E4":gematria1 += l17;letter = "\u05D5";gematria2 += l6;break;  /*vav*/
   /*tzadik*/ case "\u05E6":gematria1 += l18;letter = "\u05D6";gematria2 += l7;break;  /*zayin*/
   /*kuf*/  case "\u05E7":gematria1 += l19;letter = "\u05D7";gematria2 += l8;break;  /*chet*/
   /*resh*/ case "\u05E8":gematria1 += l20;letter = "\u05D8";gematria2 += l9;break;  /*tet*/
   /*shin*/ case "\u05E9":gematria1 += l21;letter = "\u05D9";gematria2 += l10;break; /*yod*/
   /*tav*/  case "\u05EA":gematria1 += l22;letter = "\u05DB";gematria2 += l11;break; /*kaf*/
   /*kaf F*/ case "\u05DA":gematria1 += l23;letter = "\u05EA";gematria2 += l22;break; /*tav*/
   /*mem F*/ case "\u05DD":gematria1 += l24;letter = "\u05D1";gematria2 += l2;break;  /*bet*/
   /*nun F*/ case "\u05DF":gematria1 += l25;letter = "\u05D2";gematria2 += l3;break;  /*gimel*/
   /*pey F*/ case "\u05E3":gematria1 += l26;letter = "\u05D5";gematria2 += l6;break;  /*vav*/
   /*tzadk F*/ case "\u05E5":gematria1 += l27;letter = "\u05D6";gematria2 += l7;break;  /*zayin*/
   default:letter = "";break;
   }
   
   //if the last letter in the converted string is a kaf, mem, nun, pey, or tzadik it will be converted to its final form
   if(i+1 == inputText.length)
   {
   switch(letter)
    {
    /*kaf*/  case "\u05DB":letter = "\u05DA";gematria2 -= l11;gematria2 += l23;break; /*kaf F*/
    /*mem*/  case "\u05DE":letter = "\u05DD";gematria2 -= l13;gematria2 += l24;break; /*mem F*/
    /*nun*/  case "\u05E0":letter = "\u05DF";gematria2 -= l14;gematria2 += l25;break; /*nun F*/
    /*pey*/  case "\u05E4":letter = "\u05E3";gematria2 -= l17;gematria2 += l26;break; /*pey F*/
    /*tzadk*/ case "\u05E6":letter = "\u05E5";gematria2 -= l18;gematria2 += l27;break; /*tzadik F*/
    default:letter = "";break;
    }
   }
   cryptography2 += letter;
   alert("i set to:\t" + i + "\nLetter is:\t" + letter + "\nDecrypted:\t" + cryptography2 + "\nletters:\t" + n);
  }
   if(gematria == "HaKlali"){
   gematria1 = gematria1*gematria1;
   gematria2 = gematria2*gematria2;
   }
   else if(gematria == "Kolel"){
   gematria1 += n;
   gematria2 += n;
   }
   else if(gematria == "Kolel+1"){
   gematria1 += 1;
   gematria2 += 1; 
   }
 }
 else if( cryptography == "At-bash" ){
  for (var i=0; i < inputText.length; i++)
     {
      switch(array[i])
   {
   /*alef*/ case "\u05D0":gematria1 += l1;letter = "\u05EA";gematria2 += l12;break;  /*tav*/
   /*bet*/  case "\u05D1":gematria1 += l2;letter = "\u05E9";gematria2 += l12;break;  /*shin*/
   /*gimel*/ case "\u05D2":gematria1 += l3;letter = "\u05E8";gematria2 += l12;break;  /*resh*/
   /*dalet*/ case "\u05D3":gematria1 += l4;letter = "\u05E7";gematria2 += l12;break;  /*kuf*/
   /*hey*/  case "\u05D4":gematria1 += l5;letter = "\u05E6";gematria2 += l12;break;  /*tzadik*/
   /*vav*/  case "\u05D5":gematria1 += l6;letter = "\u05E4";gematria2 += l12;break;  /*pey*/
   /*zayin*/ case "\u05D6":gematria1 += l7;letter = "\u05E2";gematria2 += l12;break;  /*ayin*/
   /*chet*/ case "\u05D7":gematria1 += l8;letter = "\u05E1";gematria2 += l12;break;  /*samech*/
   /*tet*/  case "\u05D8":gematria1 += l9;letter = "\u05E0";gematria2 += l12;break;  /*nun*/
   /*yod*/  case "\u05D9":gematria1 += l10;letter = "\u05DE";gematria2 += l12;break; /*mem*/
   /*kaf*/  case "\u05DB":gematria1 += l11;letter = "\u05DC";gematria2 += l12;break; /*lamed*/
   /*lamed*/ case "\u05DC":gematria1 += l12;letter = "\u05DB";gematria2 += l12;break; /*kaf*/
   /*mem*/  case "\u05DE":gematria1 += l13;letter = "\u05D9";gematria2 += l12;break; /*yod*/
   /*nun*/  case "\u05E0":gematria1 += l14;letter = "\u05D8";gematria2 += l12;break; /*tet*/
   /*samech*/ case "\u05E1":gematria1 += l15;letter = "\u05D7";gematria2 += l12;break; /*chet*/
   /*ayin*/ case "\u05E2":gematria1 += l16;letter = "\u05D6";gematria2 += l12;break; /*zayin*/
   /*pey*/  case "\u05E4":gematria1 += l17;letter = "\u05D5";gematria2 += l12;break; /*vav*/
   /*tzadik*/ case "\u05E6":gematria1 += l18;letter = "\u05D4";gematria2 += l12;break; /*hey*/
   /*kuf*/  case "\u05E7":gematria1 += l19;letter = "\u05D3";gematria2 += l12;break; /*dalet*/
   /*resh*/ case "\u05E8":gematria1 += l20;letter = "\u05D2";gematria2 += l12;break; /*gimel*/
   /*shin*/ case "\u05E9":gematria1 += l21;letter = "\u05D1";gematria2 += l12;break; /*bet*/
   /*tav*/  case "\u05EA":gematria1 += l22;letter = "\u05D0";gematria2 += l12;break; /*alef*/
   /*kaf F*/ case "\u05DA":gematria1 += l23;letter = "\u05DC";gematria2 += l12;break; /*lamed*/
   /*mem F*/ case "\u05DD":gematria1 += l24;letter = "\u05D9";gematria2 += l12;break; /*yod*/
   /*nun F*/ case "\u05DF":gematria1 += l25;letter = "\u05D8";gematria2 += l12;break; /*tet*/
   /*pey F*/ case "\u05E3":gematria1 += l26;letter = "\u05D5";gematria2 += l12;break; /*vav*/
   /*tzadk F*/ case "\u05E5":gematria1 += l27;letter = "\u05D4";gematria2 += l12;break; /*hey*/
   default:letter = "";break;
   }
   
   //if the last letter in the converted string is a kaf, mem, nun, pey, or tzadik it will be converted to its final form
   if(i+1 == inputText.length){
    switch(letter){
    /*kaf*/  case "\u05DB":letter = "\u05DA";gematria2 -= l11;gematria2 += l23;break; /*kaf F*/
    /*mem*/  case "\u05DE":letter = "\u05DD";gematria2 -= l13;gematria2 += l24;break; /*mem F*/
    /*nun*/  case "\u05E0":letter = "\u05DF";gematria2 -= l14;gematria2 += l25;break; /*nun F*/
    /*pey*/  case "\u05E4":letter = "\u05E3";gematria2 -= l17;gematria2 += l26;break; /*pey F*/
    /*tzadk*/ case "\u05E6":letter = "\u05E5";gematria2 -= l18;gematria2 += l27;break; /*tzadik F*/
    default:letter = "";break;
    }
   }
   cryptography2 += letter;
  }
   if(gematria == "HaKlali"){
   gematria1 = gematria1*gematria1;
   gematria2 = gematria2*gematria2;
   }
   else if(gematria == "Kolel"){
   gematria1 += n;
   gematria2 += n;
   }
   else if(gematria == "Kolel+1"){
   gematria1 += 1;
   gematria2 += 1; 
   }
 }
 else if( cryptography == "Ach-bi" ){
    for (var i=0; i < inputText.length; i++)
     {
      switch(array[i])
   {
   /*alef*/ case "\u05D0":gematria1 += l1;letter = "\u05DB";gematria2 += l12;break;  /*kaf*/
   /*bet*/  case "\u05D1":gematria1 += l2;letter = "\u05D9";gematria2 += l12;break;  /*yod*/
   /*gimel*/ case "\u05D2":gematria1 += l3;letter = "\u05D8";gematria2 += l12;break;  /*tet*/
   /*dalet*/ case "\u05D3":gematria1 += l4;letter = "\u05D7";gematria2 += l12;break;  /*chet*/
   /*hey*/  case "\u05D4":gematria1 += l5;letter = "\u05D6";gematria2 += l12;break;  /*zayin*/
   /*vav*/  case "\u05D5":gematria1 += l6;letter = "\u05D5";gematria2 += l12;break;  /*vav*/
   /*zayin*/ case "\u05D6":gematria1 += l7;letter = "\u05D4";gematria2 += l12;break;  /*hey*/
   /*chet*/ case "\u05D7":gematria1 += l8;letter = "\u05D3";gematria2 += l12;break;  /*dalet*/
   /*tet*/  case "\u05D8":gematria1 += l9;letter = "\u05D2";gematria2 += l12;break;  /*gimel*/
   /*yod*/  case "\u05D9":gematria1 += l10;letter = "\u05D1";gematria2 += l12;break; /*bet*/
   /*kaf*/  case "\u05DB":gematria1 += l11;letter = "\u05D0";gematria2 += l12;break; /*alef*/
   /*lamed*/ case "\u05DC":gematria1 += l12;letter = "\u05EA";gematria2 += l12;break; /*tav*/
   /*mem*/  case "\u05DE":gematria1 += l13;letter = "\u05E9";gematria2 += l12;break; /*shin*/
   /*nun*/  case "\u05E0":gematria1 += l14;letter = "\u05E8";gematria2 += l12;break; /*resh*/
   /*samech*/ case "\u05E1":gematria1 += l15;letter = "\u05E7";gematria2 += l12;break; /*kuf*/
   /*ayin*/ case "\u05E2":gematria1 += l16;letter = "\u05E6";gematria2 += l12;break; /*tzadik*/
   /*pey*/  case "\u05E4":gematria1 += l17;letter = "\u05E4";gematria2 += l12;break; /*pey*/
   /*tzadik*/ case "\u05E6":gematria1 += l18;letter = "\u05E2";gematria2 += l12;break; /*ayin*/
   /*kuf*/  case "\u05E7":gematria1 += l19;letter = "\u05E1";gematria2 += l12;break; /*samech*/
   /*resh*/ case "\u05E8":gematria1 += l20;letter = "\u05E0";gematria2 += l12;break; /*nun*/
   /*shin*/ case "\u05E9":gematria1 += l21;letter = "\u05DE";gematria2 += l12;break; /*mem*/
   /*tav*/  case "\u05EA":gematria1 += l22;letter = "\u05DC";gematria2 += l12;break; /*lamed*/
   /*kaf F*/ case "\u05DA":gematria1 += l23;letter = "\u05D0";gematria2 += l12;break; /*alef*/
   /*mem F*/ case "\u05DD":gematria1 += l24;letter = "\u05E9";gematria2 += l12;break; /*shin*/
   /*nun F*/ case "\u05DF":gematria1 += l25;letter = "\u05E8";gematria2 += l12;break; /*resh*/
   /*pey F*/ case "\u05E3":gematria1 += l26;letter = "\u05E4";gematria2 += l12;break; /*pey*/
   /*tzadk F*/ case "\u05E5":gematria1 += l27;letter = "\u05E2";gematria2 += l12;break; /*ayin*/
   default:letter = "";break;
   }
   
   //if the last letter in the converted string is a kaf, mem, nun, pey, or tzadik it will be converted to its final form
   if(i+1 == inputText.length){
    switch(letter){
    /*kaf*/  case "\u05DB":letter = "\u05DA";gematria2 -= l11;gematria2 += l23;break; /*kaf F*/
    /*mem*/  case "\u05DE":letter = "\u05DD";gematria2 -= l13;gematria2 += l24;break; /*mem F*/
    /*nun*/  case "\u05E0":letter = "\u05DF";gematria2 -= l14;gematria2 += l25;break; /*nun F*/
    /*pey*/  case "\u05E4":letter = "\u05E3";gematria2 -= l17;gematria2 += l26;break; /*pey F*/
    /*tzadk*/ case "\u05E6":letter = "\u05E5";gematria2 -= l18;gematria2 += l27;break; /*tzadik F*/
    default:letter = "";break;
    }
   }
   cryptography2 += letter;
  }
   if(gematria == "HaKlali"){
   gematria1 = gematria1*gematria1;
   gematria2 = gematria2*gematria2;
   }
   else if(gematria == "Kolel"){
   gematria1 += n;
   gematria2 += n;
   }
   else if(gematria == "Kolel+1"){
   gematria1 += 1;
   gematria2 += 1; 
   }
 }
 else if( cryptography == "Ayik-becher" ){
    for (var i=0; i < inputText.length; i++)
     {
      switch(array[i])
   {
   /*alef*/ case "\u05D0":gematria1 += l1;letter = "\u05D9";gematria2 += l12;break;  /*yod*/
   /*bet*/  case "\u05D1":gematria1 += l2;letter = "\u05DB";gematria2 += l12;break;  /*kaf*/
   /*gimel*/ case "\u05D2":gematria1 += l3;letter = "\u05DC";gematria2 += l12;break;  /*lamed*/
   /*dalet*/ case "\u05D3":gematria1 += l4;letter = "\u05DE";gematria2 += l12;break;  /*mem*/
   /*hey*/  case "\u05D4":gematria1 += l5;letter = "\u05E0";gematria2 += l12;break;  /*nun*/
   /*vav*/  case "\u05D5":gematria1 += l6;letter = "\u05E1";gematria2 += l12;break;  /*samech*/
   /*zayin*/ case "\u05D6":gematria1 += l7;letter = "\u05E2";gematria2 += l12;break;  /*ayin*/
   /*chet*/ case "\u05D7":gematria1 += l8;letter = "\u05E4";gematria2 += l12;break;  /*pey*/
   /*tet*/  case "\u05D8":gematria1 += l9;letter = "\u05E6";gematria2 += l12;break;  /*tzadik*/
   /*yod*/  case "\u05D9":gematria1 += l10;letter = "\u05E7";gematria2 += l12;break; /*kuf*/
   /*kaf*/  case "\u05DB":gematria1 += l11;letter = "\u05E8";gematria2 += l12;break; /*resh*/
   /*lamed*/ case "\u05DC":gematria1 += l12;letter = "\u05E9";gematria2 += l12;break; /*shin*/
   /*mem*/  case "\u05DE":gematria1 += l13;letter = "\u05EA";gematria2 += l12;break; /*tav*/
   /*nun*/  case "\u05E0":gematria1 += l14;letter = "\u05DB";gematria2 += l12;break; /*kaf*/
   /*samech*/ case "\u05E1":gematria1 += l15;letter = "\u05DE";gematria2 += l12;break; /*mem*/
   /*ayin*/ case "\u05E2":gematria1 += l16;letter = "\u05E0";gematria2 += l12;break; /*nun*/
   /*pey*/  case "\u05E4":gematria1 += l17;letter = "\u05E4";gematria2 += l12;break; /*pey*/
   /*tzadik*/ case "\u05E6":gematria1 += l18;letter = "\u05E6";gematria2 += l12;break; /*tzadik*/
   /*kuf*/  case "\u05E7":gematria1 += l19;letter = "\u05D0";gematria2 += l12;break; /*alef*/
   /*resh*/ case "\u05E8":gematria1 += l20;letter = "\u05D1";gematria2 += l12;break; /*bet*/
   /*shin*/ case "\u05E9":gematria1 += l21;letter = "\u05D2";gematria2 += l12;break; /*gimel*/
   /*tav*/  case "\u05EA":gematria1 += l22;letter = "\u05D3";gematria2 += l12;break; /*dalet*/
   /*kaf F*/ case "\u05DA":gematria1 += l23;letter = "\u05D4";gematria2 += l12;break; /*hey*/
   /*mem F*/ case "\u05DD":gematria1 += l24;letter = "\u05D5";gematria2 += l12;break; /*vav*/
   /*nun F*/ case "\u05DF":gematria1 += l25;letter = "\u05D6";gematria2 += l12;break; /*zayin*/
   /*pey F*/ case "\u05E3":gematria1 += l26;letter = "\u05D7";gematria2 += l12;break; /*chet*/
   /*tzadk F*/ case "\u05E5":gematria1 += l27;letter = "\u05D8";gematria2 += l12;break; /*tet*/
   default:letter = "";break;
   }
   
   //if the last letter in the converted string is a kaf, mem, nun, pey, or tzadik it will be converted to its final form
   if(i+1 == inputText.length){
    switch(letter){
    /*kaf*/  case "\u05DB":letter = "\u05DA";gematria2 -= l11;gematria2 += l23;break; /*kaf F*/
    /*mem*/  case "\u05DE":letter = "\u05DD";gematria2 -= l13;gematria2 += l24;break; /*mem F*/
    /*nun*/  case "\u05E0":letter = "\u05DF";gematria2 -= l14;gematria2 += l25;break; /*nun F*/
    /*pey*/  case "\u05E4":letter = "\u05E3";gematria2 -= l17;gematria2 += l26;break; /*pey F*/
    /*tzadk*/ case "\u05E6":letter = "\u05E5";gematria2 -= l18;gematria2 += l27;break; /*tzadik F*/
    default:letter = "";break;
    }
   }
   cryptography2 += letter;
  }
   if(gematria == "HaKlali"){
   gematria1 = gematria1*gematria1;
   gematria2 = gematria2*gematria2;
   }
   else if(gematria == "Kolel"){
   gematria1 += n;
   gematria2 += n;
   }
   else if(gematria == "Kolel+1"){
   gematria1 += 1;
   gematria2 += 1; 
   }
 }
 else if( cryptography == "Achas-beta" ){
    for (var i=0; i < inputText.length; i++)
     {
      switch(array[i])
   {
   /*alef*/ case "\u05D0":gematria1 += l1;letter = "\u05D7";gematria2 += l12;break;  /*chet*/
   /*bet*/  case "\u05D1":gematria1 += l2;letter = "\u05D8";gematria2 += l12;break;  /*tet*/
   /*gimel*/ case "\u05D2":gematria1 += l3;letter = "\u05D9";gematria2 += l12;break;  /*yod*/
   /*dalet*/ case "\u05D3":gematria1 += l4;letter = "\u05DB";gematria2 += l12;break;  /*kaf*/
   /*hey*/  case "\u05D4":gematria1 += l5;letter = "\u05DC";gematria2 += l12;break;  /*lamed*/
   /*vav*/  case "\u05D5":gematria1 += l6;letter = "\u05DE";gematria2 += l12;break;  /*mem*/
   /*zayin*/ case "\u05D6":gematria1 += l7;letter = "\u05E0";gematria2 += l12;break;  /*nun*/
   /*chet*/ case "\u05D7":gematria1 += l8;letter = "\u05E1";gematria2 += l12;break;  /*samech*/
   /*tet*/  case "\u05D8":gematria1 += l9;letter = "\u05E2";gematria2 += l12;break;  /*ayin*/
   /*yod*/  case "\u05D9":gematria1 += l10;letter = "\u05E4";gematria2 += l12;break; /*pey*/
   /*kaf*/  case "\u05DB":gematria1 += l11;letter = "\u05E6";gematria2 += l12;break; /*tzadik*/
   /*lamed*/ case "\u05DC":gematria1 += l12;letter = "\u05E7";gematria2 += l12;break; /*kuf*/
   /*mem*/  case "\u05DE":gematria1 += l13;letter = "\u05E8";gematria2 += l12;break; /*resh*/
   /*nun*/  case "\u05E0":gematria1 += l14;letter = "\u05E9";gematria2 += l12;break; /*shin*/
   /*samech*/ case "\u05E1":gematria1 += l15;letter = "\u05D0";gematria2 += l12;break; /*alef*/
   /*ayin*/ case "\u05E2":gematria1 += l16;letter = "\u05D1";gematria2 += l12;break; /*bet*/
   /*pey*/  case "\u05E4":gematria1 += l17;letter = "\u05D2";gematria2 += l12;break; /*gimel*/
   /*tzadik*/ case "\u05E6":gematria1 += l18;letter = "\u05D3";gematria2 += l12;break; /*dalet*/
   /*kuf*/  case "\u05E7":gematria1 += l19;letter = "\u05D4";gematria2 += l12;break; /*hey*/
   /*resh*/ case "\u05E8":gematria1 += l20;letter = "\u05D5";gematria2 += l12;break; /*vav*/
   /*shin*/ case "\u05E9":gematria1 += l21;letter = "\u05D6";gematria2 += l12;break; /*zayin*/
   /*tav*/  case "\u05EA":gematria1 += l22;letter = "\u05EA";gematria2 += l12;break; /*tav*/
   /*kaf F*/ case "\u05DA":gematria1 += l23;letter = "\u05E6";gematria2 += l12;break; /*tzadik*/
   /*mem F*/ case "\u05DD":gematria1 += l24;letter = "\u05E8";gematria2 += l12;break; /*resh*/
   /*nun F*/ case "\u05DF":gematria1 += l25;letter = "\u05E9";gematria2 += l12;break; /*shin*/
   /*pey F*/ case "\u05E3":gematria1 += l26;letter = "\u05D2";gematria2 += l12;break; /*gimel*/
   /*tzadk F*/ case "\u05E5":gematria1 += l27;letter = "\u05D3";gematria2 += l12;break; /*dalet*/
   default:letter = "";break;
   }
   
   //if the last letter in the converted string is a kaf, mem, nun, pey, or tzadik it will be converted to its final form
   if(i+1 == inputText.length){
    switch(letter){
    /*kaf*/  case "\u05DB":letter = "\u05DA";gematria2 -= l11;gematria2 += l23;break; /*kaf F*/
    /*mem*/  case "\u05DE":letter = "\u05DD";gematria2 -= l13;gematria2 += l24;break; /*mem F*/
    /*nun*/  case "\u05E0":letter = "\u05DF";gematria2 -= l14;gematria2 += l25;break; /*nun F*/
    /*pey*/  case "\u05E4":letter = "\u05E3";gematria2 -= l17;gematria2 += l26;break; /*pey F*/
    /*tzadk*/ case "\u05E6":letter = "\u05E5";gematria2 -= l18;gematria2 += l27;break; /*tzadik F*/
    default:letter = "";break;
    }
   }
   cryptography2 += letter;
  }
   if(gematria == "HaKlali"){
   gematria1 = gematria1*gematria1;
   gematria2 = gematria2*gematria2;
   }
   else if(gematria == "Kolel"){
   gematria1 += n;
   gematria2 += n;
   }
   else if(gematria == "Kolel+1"){
   gematria1 += 1;
   gematria2 += 1; 
   }
 }
 else if( cryptography == "At-bach9-9-4" ){
    for (var i=0; i < inputText.length; i++)
     {
      switch(array[i])
   {
   /*alef*/ case "\u05D0":gematria1 += l1;letter = "\u05D8";gematria2 += l12;break;  /*tet*/
   /*bet*/  case "\u05D1":gematria1 += l2;letter = "\u05D7";gematria2 += l12;break;  /*chet*/
   /*gimel*/ case "\u05D2":gematria1 += l3;letter = "\u05D6";gematria2 += l12;break;  /*zayin*/
   /*dalet*/ case "\u05D3":gematria1 += l4;letter = "\u05D5";gematria2 += l12;break;  /*vav*/
   /*hey*/  case "\u05D4":gematria1 += l5;letter = "\u05D4";gematria2 += l12;break;  /*hey*/
   /*vav*/  case "\u05D5":gematria1 += l6;letter = "\u05D3";gematria2 += l12;break;  /*dalet*/
   /*zayin*/ case "\u05D6":gematria1 += l7;letter = "\u05D2";gematria2 += l12;break;  /*gimel*/
   /*chet*/ case "\u05D7":gematria1 += l8;letter = "\u05D1";gematria2 += l12;break;  /*bet*/
   /*tet*/  case "\u05D8":gematria1 += l9;letter = "\u05D0";gematria2 += l12;break;  /*alef*/
   /*yod*/  case "\u05D9":gematria1 += l10;letter = "\u05E6";gematria2 += l12;break; /*tzadik*/
   /*kaf*/  case "\u05DB":gematria1 += l11;letter = "\u05E4";gematria2 += l12;break; /*pey*/
   /*lamed*/ case "\u05DC":gematria1 += l12;letter = "\u05E2";gematria2 += l12;break; /*ayin*/
   /*mem*/  case "\u05DE":gematria1 += l13;letter = "\u05E1";gematria2 += l12;break; /*samech*/
   /*nun*/  case "\u05E0":gematria1 += l14;letter = "\u05E0";gematria2 += l12;break; /*nun*/
   /*samech*/ case "\u05E1":gematria1 += l15;letter = "\u05DE";gematria2 += l12;break; /*mem*/
   /*ayin*/ case "\u05E2":gematria1 += l16;letter = "\u05DC";gematria2 += l12;break; /*lamed*/
   /*pey*/  case "\u05E4":gematria1 += l17;letter = "\u05DB";gematria2 += l12;break; /*kaf*/
   /*tzadik*/ case "\u05E6":gematria1 += l18;letter = "\u05D9";gematria2 += l12;break; /*yod*/
   /*kuf*/  case "\u05E7":gematria1 += l19;letter = "\u05EA";gematria2 += l12;break; /*tav*/
   /*resh*/ case "\u05E8":gematria1 += l20;letter = "\u05E9";gematria2 += l12;break; /*shin*/
   /*shin*/ case "\u05E9":gematria1 += l21;letter = "\u05E8";gematria2 += l12;break; /*resh*/
   /*tav*/  case "\u05EA":gematria1 += l22;letter = "\u05E7";gematria2 += l12;break; /*kuf*/
   /*kaf F*/ case "\u05DA":gematria1 += l23;letter = "\u05E4";gematria2 += l12;break; /*pey*/
   /*mem F*/ case "\u05DD":gematria1 += l24;letter = "\u05E1";gematria2 += l12;break; /*samech*/
   /*nun F*/ case "\u05DF":gematria1 += l25;letter = "\u05E0";gematria2 += l12;break; /*nun*/
   /*pey F*/ case "\u05E3":gematria1 += l26;letter = "\u05DB";gematria2 += l12;break; /*kaf*/
   /*tzadk F*/ case "\u05E5":gematria1 += l27;letter = "\u05D9";gematria2 += l12;break; /*yod*/
   default:letter = "";break;
   }
   
   //if the last letter in the converted string is a kaf, mem, nun, pey, or tzadik it will be converted to its final form
   if(i+1 == inputText.length){
    switch(letter){
    /*kaf*/  case "\u05DB":letter = "\u05DA";gematria2 -= l11;gematria2 += l23;break; /*kaf F*/
    /*mem*/  case "\u05DE":letter = "\u05DD";gematria2 -= l13;gematria2 += l24;break; /*mem F*/
    /*nun*/  case "\u05E0":letter = "\u05DF";gematria2 -= l14;gematria2 += l25;break; /*nun F*/
    /*pey*/  case "\u05E4":letter = "\u05E3";gematria2 -= l17;gematria2 += l26;break; /*pey F*/
    /*tzadk*/ case "\u05E6":letter = "\u05E5";gematria2 -= l18;gematria2 += l27;break; /*tzadik F*/
    default:letter = "";break;
    }
   }
   cryptography2 += letter;
  }
   if(gematria == "HaKlali"){
   gematria1 = gematria1*gematria1;
   gematria2 = gematria2*gematria2;
   }
   else if(gematria == "Kolel"){
   gematria1 += n;
   gematria2 += n;
   }
   else if(gematria == "Kolel+1"){
   gematria1 += 1;
   gematria2 += 1; 
   }
 }
 else if( cryptography == "At-bach9-9-9" ){
    for (var i=0; i < inputText.length; i++)
     {
      switch(array[i])
   {
   /*alef*/ case "\u05D0":gematria1 += l1;letter = "\u05D8";gematria2 += l12;break;  /*tet*/
   /*bet*/  case "\u05D1":gematria1 += l2;letter = "\u05D7";gematria2 += l12;break;  /*chet*/
   /*gimel*/ case "\u05D2":gematria1 += l3;letter = "\u05D6";gematria2 += l12;break;  /*zayin*/
   /*dalet*/ case "\u05D3":gematria1 += l4;letter = "\u05D5";gematria2 += l12;break;  /*vav*/
   /*hey*/  case "\u05D4":gematria1 += l5;letter = "\u05D4";gematria2 += l12;break;  /*hey*/
   /*vav*/  case "\u05D5":gematria1 += l6;letter = "\u05D3";gematria2 += l12;break;  /*dalet*/
   /*zayin*/ case "\u05D6":gematria1 += l7;letter = "\u05D2";gematria2 += l12;break;  /*gimel*/
   /*chet*/ case "\u05D7":gematria1 += l8;letter = "\u05D1";gematria2 += l12;break;  /*bet*/
   /*tet*/  case "\u05D8":gematria1 += l9;letter = "\u05D0";gematria2 += l12;break;  /*alef*/
   /*yod*/  case "\u05D9":gematria1 += l10;letter = "\u05E6";gematria2 += l12;break; /*tzadik*/
   /*kaf*/  case "\u05DB":gematria1 += l11;letter = "\u05E4";gematria2 += l12;break; /*pey*/
   /*lamed*/ case "\u05DC":gematria1 += l12;letter = "\u05E2";gematria2 += l12;break; /*ayin*/
   /*mem*/  case "\u05DE":gematria1 += l13;letter = "\u05E1";gematria2 += l12;break; /*samech*/
   /*nun*/  case "\u05E0":gematria1 += l14;letter = "\u05E0";gematria2 += l12;break; /*nun*/
   /*samech*/ case "\u05E1":gematria1 += l15;letter = "\u05DE";gematria2 += l12;break; /*mem*/
   /*ayin*/ case "\u05E2":gematria1 += l16;letter = "\u05DC";gematria2 += l12;break; /*lamed*/
   /*pey*/  case "\u05E4":gematria1 += l17;letter = "\u05DB";gematria2 += l12;break; /*kaf*/
   /*tzadik*/ case "\u05E6":gematria1 += l18;letter = "\u05D9";gematria2 += l12;break; /*yod*/
   /*kuf*/  case "\u05E7":gematria1 += l19;letter = "\u05EA";gematria2 += l12;break; /*tav*/
   /*resh*/ case "\u05E8":gematria1 += l20;letter = "\u05E9";gematria2 += l12;break; /*shin*/
   /*shin*/ case "\u05E9":gematria1 += l21;letter = "\u05E8";gematria2 += l12;break; /*resh*/
   /*tav*/  case "\u05EA":gematria1 += l22;letter = "\u05E7";gematria2 += l12;break; /*kuf*/
   /*kaf F*/ case "\u05DA":gematria1 += l23;letter = "\u05DD";gematria2 += l12;break; /*mem F*/
   /*mem F*/ case "\u05DD":gematria1 += l24;letter = "\u05DA";gematria2 += l12;break; /*kaf F*/
   /*nun F*/ case "\u05DF":gematria1 += l25;letter = "\u05DF";gematria2 += l12;break; /*nun F*/
   /*pey F*/ case "\u05E3":gematria1 += l26;letter = "\u05E5";gematria2 += l12;break; /*tzadik F*/
   /*tzadk F*/ case "\u05E5":gematria1 += l27;letter = "\u05E3";gematria2 += l12;break; /*pey F*/
   default:letter = "";break;
   }
   
   //if the last letter in the converted string is a kaf, mem, nun, pey, or tzadik it will be converted to its final form
   if(i+1 == inputText.length){
    switch(letter){
    /*kaf*/  case "\u05DB":letter = "\u05DA";gematria2 -= l11;gematria2 += l23;break; /*kaf F*/
    /*mem*/  case "\u05DE":letter = "\u05DD";gematria2 -= l13;gematria2 += l24;break; /*mem F*/
    /*nun*/  case "\u05E0":letter = "\u05DF";gematria2 -= l14;gematria2 += l25;break; /*nun F*/
    /*pey*/  case "\u05E4":letter = "\u05E3";gematria2 -= l17;gematria2 += l26;break; /*pey F*/
    /*tzadk*/ case "\u05E6":letter = "\u05E5";gematria2 -= l18;gematria2 += l27;break; /*tzadik F*/
    default:letter = "";break;
    }
   }
   cryptography2 += letter;
  }
   if(gematria == "HaKlali"){
   gematria1 = gematria1*gematria1;
   gematria2 = gematria2*gematria2;
   }
   else if(gematria == "Kolel"){
   gematria1 += n;
   gematria2 += n;
   }
   else if(gematria == "Kolel+1"){
   gematria1 += 1;
   gematria2 += 1; 
   }
 }
 
 //send end variables gematria and cryptography to textboxes
 document.getElementById("outputgema1").value = gematria1;
 document.getElementById("outputgema2").value = gematria2;
 document.getElementById("outputcryp").value = cryptography2;
 
 //display all value selected for testing purposes 
 alert("Input Text:\t" + inputText + "\nEncryption:\t" + cryptography + "\nGematria:\t\t" + gematria + "\nGematria1:\t" + gematria1 + "\nGematria2:\t" + gematria2 + "\nArray:\t\t" + array + "\nCharacters:\t" + n + "\nOutput Text:\t" + cryptography2);
 }
 