<html>
<head></head>
<body>
    <form action="complemento.php" method="POST">
        <h2>Destinos turisticos </h2> <br>
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
    <form action="complemento.php" method="POST">
        <h1>Generador De Paquetes Turisticos</h1> <br><hr>
        <h2>Usuario y email </h2>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" placeholder="USUARIO" required><br>
        <label for="email">Email:  </label>
        <input type="email" id="email" name="email" placeholder="CORREO" required><br>
        <br><br><hr>   
    <h2>Destinos turisticos </h2>
        <select id="destinos" name="destinos[] " multiple>
            <option value="Cancún">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlan">Mazatlan</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select><br><br>
        <hr>
        <h2>Actividades turisticas</h2>
        <label for="opcion-1">
            <input type="checkbox" value="Buceo"
             id="opcion-1" name="activ[]">
             Buceo
        </label> <br>
                <label for="opcion-2">
            <input type="checkbox" value="Paseo en lancha"
             id="opcion-2" name="activ[]">
             Paseo en lancha
        </label> <br>
                <label for="opcion-3">
            <input type="checkbox" value="Visita a zonas arqueológicas"
             id="opcion-3" name="activ[]">
             Visita a zonas arqueológicas
        </label> <br>
            <label for="opcion-4">
            <input type="checkbox" value="Senderismo"
             id="opcion-4" name="activ[]">
             Senderismo 
        </label> <br>
            <label for="opcion-5">
            <input type="checkbox" value="Pesca deportiva"
             id="opcion-5" name="activ[]">
             Pesca deportiva
        </label> <br>
            <label for="opcion-6">
            <input type="checkbox" value="Recorrido gastronómico"
             id="opcion-6" name="activ[]">
             Recorrido gastronómico
        </label> <br>
            <label for="opcion-7">
            <input type="checkbox" value="Visita a museos"
             id="opcion-7" name="activ[]">
             Visita a museos
        </label> <BR></BR>
        <button type="submit">Enviar</button>
        <hr>
        <h2>Servicios adicionales</h2>
        <label for="opcion-1">
            <input type="checkbox" value="Transporte al aeropuerto"
             id="opcion-1" name="ser[]">
             Transporte al aeropuerto
        </label> <br>
                <label for="opcion-2">
            <input type="checkbox" value="Desayuno incluido"
             id="opcion-2" name="ser[]">
             Desayuno incluido
        </label> <br>
                <label for="opcion-3">
            <input type="checkbox" value="Hospedaje de lujo"
             id="opcion-3" name="ser[]">
             Hospedaje de lujo
        </label> <br>
            <label for="opcion-4">
            <input type="checkbox" value="Seguro de viajero"
             id="opcion-4" name="ser[]">
             Seguro de viajero 
        </label> <br>
            <label for="opcion-5">
            <input type="checkbox" value="Renta de automóvil"
             id="opcion-5" name="ser[]">
             Renta de automóvil
        </label> <br>
            <label for="opcion-6">
            <input type="checkbox" value="Guía turístico"
             id="opcion-6" name="ser[]">
             Guía turístico 
        </label> <BR></BR>
        <button type="submit">Generar paquete</button>
    </form>
</body>
</html>