<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"><head>

         <title>JS Regex Replace</title>

         <meta http-equiv="Content-Type" content="text/html; charset=utf8">

         <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 

            <style type="text/css">

                body{

                    background-color: black;

                    color: white;

                    }

                html,input {

                    font-family: 'Quicksand', sans-serif;

                    }

                input{

                    margin : 0 0 1em 0;

                    }


                input[type=text]{

                    width:100%;

                    font-size: 1.5em;

                }

                input[type=submit]{

                    font-weight:900;


                }


                .vrai, .faux {

                    padding :0 2em;

                    font-size: 150%;

                }

                .vrai{

                    background-color: green;

                }

                .faux{

                    background-color: red;

                    color:black;

                }

             </style>

             <script type="text/javascript">


            function JStestRegex (champ){

                

                var RegexValue=document.getElementById("maRegex").value;

                //var myRegex=/^Raclette/;

                var myRegex= new RegExp(RegexValue);


                var chaine=document.getElementById("chaineTest").value;


                //document.getElementById("resultat").innerHTML='<span class="vrai">myRegex='+myRegex+'<br>Chaine='+chaine+'</span>';


                if (myRegex.test(chaine)) {


                   //alert('VRAI');

                   champ.style.backgroundColor = "#54E9D5";

                  // document.getElementById("resultat").innerHTML='<span class="vrai">VRAI</span>';


                } else {


                   //alert('FAUX');

                    champ.style.backgroundColor = "#fba";    

                   //document.getElementById("resultat").innerHTML='<span class="faux">faux</span>';


                }


            }

            

 function JsReplaceRegex (){
         document.getElementById("test").innerHTML='welcome';


            var re = document.getElementById("MotifRegex").value;

            var chn = document.getElementById("TexteBase").value;

            var replacer= document.getElementById("Remplacant").value;

            var nouvChn = chn;
            
    
            do{
            	
            var ChnBeforeReplace =nouvChn ;
            var nouvChn = nouvChn.replace(re,replacer);
            var ChnAfterReplace =nouvChn ;
            }
            while(ChnBeforeReplace!=ChnAfterReplace);

            document.getElementById("resultat").innerHTML=nouvChn;

            }</script></head>

    <body>


<h1>JS Regex tester</h1>

<form method="" action="" onsubmit=" ">

            <p>    


                Texte de Base<br>

                <input style="width:100%;" type="text" name="TexteBase" id="TexteBase" value="Les [b]pommes[/b] sont [¡]rondes[/i], et les pommes sont juteuses." width="500px" onblur="JsReplaceRegex(this)"><br>

                Motif Regex à rechercher <br>

                <input type="text" name="MotifRegex" id="MotifRegex" value="pomme" onblur="JsReplaceRegex()"><br><br>

                Remplaçant <br>

                <input type="text" name="Remplacant" id="Remplacant" value="bombe" onblur="JsReplaceRegex()"><br><br>

               <!-- <input type="submit" name="button" id="button" onClick="JsReplaceRegex()" value="Submit">
               -->
            </p>

        </form>

<hr>


<h3>(test)</h3>

<span id="test"></span>
<hr>

<h3>Résultat</h3>

<span id="resultat"></span>



    


    </body></html>
