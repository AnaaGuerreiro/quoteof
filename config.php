<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="config.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">';

</head>

<body>
    <audio id="audio" autoplay controls>
		<source src="MSC.mp3" type="audio/mpeg">
	</audio>
	</script>
    <header>  
    <br>
    <br>  
    <br>  
    <br>
    <br>
    <br>  
    <br>
    <br>
    <br>
    <br>
    <h1 class=>GERADOR DE FRASES</h1>
        <form action="config.php" method="post">
            <div>

                    <button class="button" id="add-btn" type="submit" onclick=clickMe()>GERAR</button>
            </div>
        </form>
        <fieldset> <?php

$array = ['<p> A gente sonha a vida inteira e só acorda no fim… (RACIONAIS - JESUS CHOROU) </p>',
    '<p> A alma guarda o que a mente tenta esquecer! (RACIONAIS - PANICO NA ZONA SUL)</p>',
    '<p> É necessário acreditar que o sonho é possível, que o céu é o limite e você é imbatível. (RACIONAIS -  CRIME VAI E VEM)</p>',
    '<p> Do que adianta eu ser durão e o coração ser vulnerável? (RACIONAIS - JESUS CHOROU)</p>',
    '<p> Honestidade nunca será demais, sua moral não se ganha, se faz (RACIONAIS - SOU MAIS VOCÊ)</p>',
    '<p> A pressa é a inimiga da vitória. O fraco não tem espaço e o covarde morre sem tentar! (RACIONAIS - VIDA LOKA PT.1)</p>',
    '<p> Onde estiver, seja lá como for, tenha fé porque até no lixão nasce flor (RACIONAIS - VIDA LOKA PT.2)</p>',
    '<p> Não espere o futuro mudar tua vida, porque o futuro é a consequência do presente” (RACIONAIS - CRIME VAI E VEM)</p>',
    '<p> Se meu futuro estiver traçado, eu vou até o fim só pra ver o resultado, quero dinheiro e uma vida melhor antes que meu castelo se transforme em pó (RACIONAIS - EU SOU 157)</p>',
    '<p> A confiança é uma mulher ingrata, Que te beija, e te abraça, te rouba e te mata (RACIONAIS - VIDA LOKA PT.3)</p>'];

shuffle($array);
echo current($array);
?>
        </fieldset>
    </header>
</body>

</html>

