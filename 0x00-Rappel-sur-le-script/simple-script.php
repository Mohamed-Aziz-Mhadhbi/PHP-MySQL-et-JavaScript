<DOCTYPE HTML>
<HTML>
<HEAD>
        <TITLE> Scripts </TITLE>
</HEAD>
<BODY BGCOLOR="#FFFFFFFF">

Bonjour ...<p>

<script language=javascript>
    var temps = new Date();
    document.write("Il est ",temps.getHours(),"Heures ",temps.getMinutes()," minutes sur le poste client");
</script>
<?php
    print("<p>Il est ".date("H")." heures ".date("i")." minutes sur le serveur en Or&eacute;gon");
?>
</BODY>
</HTML>
