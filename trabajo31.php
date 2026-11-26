<html>
<head></head>
<body>
    <form action="recibeOpciones.php" method="POST">
        <h2>destinos</h2> <br>
        <select id="destinos" name="destinos[] " multiple>
            <option value="cancun">Cancún</option>
            <option value="puerto_vallarta">Puerto Vallarta</option>
            <option value="cabos">Los Cabos</option>
            <option value="mazatlan">Mazatlan</option>
            <option value="huatulco">Huatulco</option>
            <option value="puerto_escondido">Puerto Escondido</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>