<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Paiement Lumicash - Agence Travail</title>

<style>

/* =========================
   STYLE GENERAL
========================= */

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:Arial, sans-serif;

    background:linear-gradient(
        135deg,
        #0b2d4d,
        #1f7a8c
    );

    min-height:100vh;

    display:flex;
    align-items:center;
    justify-content:center;

    padding:20px;
}


/* =========================
   CONTENEUR
========================= */

.container{
    width:100%;
    max-width:520px;
}


/* =========================
   CARTE
========================= */

.card{
    background:white;

    border-radius:20px;

    padding:30px;

    box-shadow:
        0 10px 30px
        rgba(0,0,0,0.25);
}


/* =========================
   LOGO
========================= */

.logo{
    text-align:center;

    font-size:55px;

    margin-bottom:5px;
}


/* =========================
   TITRE
========================= */

h1{
    text-align:center;

    color:#0b2d4d;

    margin:5px 0 10px;
}

.description{
    text-align:center;

    color:#666;

    line-height:1.5;

    margin-bottom:25px;
}


/* =========================
   FORMULAIRE
========================= */

label{
    display:block;

    font-weight:bold;

    color:#0b2d4d;

    margin-top:15px;

    margin-bottom:7px;
}


input,
textarea,
select{

    width:100%;

    padding:13px;

    border:1px solid #ccc;

    border-radius:8px;

    font-size:15px;

    outline:none;
}


input:focus,
textarea:focus,
select:focus{

    border-color:#1f7a8c;

    box-shadow:
        0 0 5px
        rgba(31,122,140,0.25);
}


textarea{

    height:90px;

    resize:none;
}


/* =========================
   BOUTON PAIEMENT
========================= */

.btn-payer{

    width:100%;

    margin-top:25px;

    padding:14px;

    border:none;

    border-radius:8px;

    background:#0b2d4d;

    color:white;

    font-size:17px;

    font-weight:bold;

    cursor:pointer;

    transition:0.2s;
}


.btn-payer:hover{

    background:#1f7a8c;

    transform:translateY(-1px);
}


/* =========================
   WHATSAPP
========================= */

.whatsapp{

    display:flex;

    align-items:center;

    justify-content:center;

    gap:10px;

    margin-top:15px;

    padding:14px;

    border-radius:8px;

    background:#25D366;

    color:white;

    text-decoration:none;

    font-weight:bold;

    font-size:16px;

    transition:0.2s;
}


.whatsapp:hover{

    background:#1da851;

    transform:translateY(-1px);
}


/* =========================
   INFORMATIONS
========================= */

.info{

    margin-top:20px;

    padding:14px;

    background:#f4f6f9;

    border-radius:8px;

    text-align:center;

    color:#555;

    font-size:13px;

    line-height:1.5;
}


/* =========================
   METEO
========================= */

.meteo{

    margin-top:20px;

    padding:20px;

    border-radius:12px;

    background:#eef5f8;

    text-align:center;

    border:1px solid #dce8ed;
}


.meteo h2{

    margin-top:0;

    margin-bottom:15px;

    color:#0b2d4d;

    font-size:21px;
}


#meteoChargement{

    color:#666;
}


#meteoResultat{

    font-size:15px;

    line-height:2;

    color:#333;
}


/* =========================
   PIED DE PAGE
========================= */

.footer{

    text-align:center;

    color:white;

    margin-top:15px;

    font-size:12px;
}


/* =========================
   RESPONSIVE TELEPHONE
========================= */

@media(max-width:500px){

    body{

        padding:10px;

    }

    .card{

        padding:20px;

        border-radius:15px;

    }

    h1{

        font-size:24px;

    }

}

</style>

</head>


<body>


<div class="container">


<!-- =========================
     CARTE PRINCIPALE
========================= -->

<div class="card">


<!-- LOGO -->

<div class="logo">
    💳
</div>


<!-- TITRE -->

<h1>
    Paiement Lumicash
</h1>


<p class="description">

    Agence de recrutement et de placement
    de travailleurs à l'étranger

</p>


<!-- =========================
     FORMULAIRE
========================= -->

<form onsubmit="continuerPaiement(event)">


<!-- NOM -->

<label for="nom">
    Nom complet
</label>

<input
    type="text"
    id="nom"
    placeholder="Entrez votre nom complet"
    required
>


<!-- TELEPHONE -->

<label for="telephone">
    Numéro Lumicash
</label>

<input
    type="tel"
    id="telephone"
    placeholder="Exemple : 66780367"
    pattern="[0-9]{8}"
    maxlength="8"
    required
>


<!-- MONTANT -->

<label for="montant">
    Montant (FBU)
</label>

<input
    type="number"
    id="montant"
    placeholder="Exemple : 50000"
    min="1"
    required
>


<!-- MOTIF -->

<label for="motif">
    Motif du paiement
</label>

<select id="motif" required>

    <option value="">
        -- Choisissez le motif --
    </option>

    <option value="Frais de dossier">
        Frais de dossier
    </option>

    <option value="Frais de recrutement">
        Frais de recrutement
    </option>

    <option value="Frais de placement">
        Frais de placement
    </option>

    <option value="Autre">
        Autre
    </option>

</select>


<!-- MESSAGE -->

<label for="message">
    Message
</label>

<textarea
    id="message"
    placeholder="Informations supplémentaires..."
></textarea>


<!-- BOUTON -->

<button
    type="submit"
    class="btn-payer"
>

    💳 Continuer

</button>


</form>


<!-- =========================
     WHATSAPP
========================= -->

<a
    href="https://wa.me/25766780367?text=Bonjour%20je%20voudrais%20avoir%20des%20informations%20sur%20le%20paiement%20Lumicash."
    target="_blank"
    class="whatsapp"
>

    📱 Contacter l'agence sur WhatsApp

</a>


<!-- =========================
     INFORMATIONS
========================= -->

<div class="info">

    📞 WhatsApp :
    <strong>+257 66 78 03 67</strong>

    <br>

    📍 Burundi

    <br><br>

    🔒 Cette page est une interface
    de démonstration.

</div>


<!-- =========================
     METEO
========================= -->

<div class="meteo">

    <h2>
        🌤️ Météo à Gitega
    </h2>

    <p id="meteoChargement">

        Chargement de la météo...

    </p>

    <div id="meteoResultat"></div>

</div>


</div>


<!-- =========================
     FOOTER
========================= -->

<div class="footer">

    © 2026 Agence Travail

</div>


</div>



<!-- =========================
     JAVASCRIPT PAIEMENT
========================= -->

<script>

function continuerPaiement(event){

    event.preventDefault();


    let nom =
        document.getElementById("nom").value;


    let telephone =
        document.getElementById("telephone").value;


    let montant =
        document.getElementById("montant").value;


    let motif =
        document.getElementById("motif").value;


    alert(

        "Demande de paiement\n\n" +

        "Nom : " +
        nom +

        "\nNuméro : " +
        telephone +

        "\nMontant : " +
        montant +
        " FBU" +

        "\nMotif : " +
        motif +

        "\n\n" +

        "Cette page est une démonstration. " +

        "Aucun paiement réel n'a été effectué."

    );

}

</script>



<!-- =========================
     API METEO OPEN-METEO
========================= -->

<script>

fetch(
    "https://api.open-meteo.com/v1/forecast" +

    "?latitude=-3.4264" +

    "&longitude=29.9308" +

    "&current=temperature_2m,relative_humidity_2m,weather_code,wind_speed_10m" +

    "&timezone=Africa%2FBujumbura"
)


.then(function(response){

    return response.json();

})


.then(function(data){

    let temperature =
        data.current.temperature_2m;


    let humidite =
        data.current.relative_humidity_2m;


    let vent =
        data.current.wind_speed_10m;


    let code =
        data.current.weather_code;


    let condition;


    /* =========================
       INTERPRETATION METEO
    ========================= */

    if(code === 0){

        condition =
            "☀️ Ciel dégagé";

    }

    else if(code <= 3){

        condition =
            "⛅ Partiellement nuageux";

    }

    else if(code <= 48){

        condition =
            "🌫️ Brouillard";

    }

    else if(code <= 67){

        condition =
            "🌧️ Pluie";

    }

    else if(code <= 77){

        condition =
            "❄️ Neige";

    }

    else if(code <= 82){

        condition =
            "🌦️ Averses";

    }

    else{

        condition =
            "⛈️ Orage";

    }


    /* =========================
       AFFICHAGE
    ========================= */

    document
        .getElementById("meteoChargement")
        .style.display = "none";


    document
        .getElementById("meteoResultat")
        .innerHTML =

        "🌡️ Température : " +

        "<strong>" +

        temperature +

        " °C</strong>" +

        "<br>" +


        "💧 Humidité : " +

        "<strong>" +

        humidite +

        " %</strong>" +

        "<br>" +


        "💨 Vent : " +

        "<strong>" +

        vent +

        " km/h</strong>" +

        "<br>" +


        "☁️ Conditions : " +

        "<strong>" +

        condition +

        "</strong>";

})


.catch(function(error){

    document
        .getElementById("meteoChargement")
        .innerHTML =

        "❌ Impossible de charger la météo.";

});

</script>


</body>

</html>