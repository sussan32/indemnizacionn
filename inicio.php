



<html lang="en">

<head>
<style>

.container{
              background-color: #e4a3e6;
               
               border:3px solid black;
               border-radius:22px;
              
             
           }
 


</style>
<body style="background-color:#a3e6e4;">
</body>

<meta charset="UTF-8">
     <title>INDEMNIZACION</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

</head>
<div class="container"  >
    <div class="row">
        <div class="col-sm-12">

           <center> <h1 style="color: white;">CALCULAR LA LIQUIDACION DEL EMPLEADO</h1></center>

            <body>
                <script language="javascript">
                    var salario = 0;
                    var anos = 0;

                    salario = prompt("INGRESE SU SALARIO");
                    salario = parseInt(salario);
                    anos = prompt("INGRESE LOS AÑOS LABORADOS");
                    anos = parseInt(anos);

                    if (anos == 1) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 6 DIAS DE VACACIONES");

                    } else if (anos == 2) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 8 DIAS DE VACACIONES");

                    } else if (anos == 3) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 10 DIAS DE VACACIONES");
                    } else if (anos == 4) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 12 DIAS DE VACACIONES");
                    } else if (anos >= 5 && anos <= 9) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 15 DIAS DE VACACIONES");
                    } else if (anos >= 10 && anos <= 14) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 16 DIAS DE VACACIONES");
                    } else if (anos >= 15 && anos <= 19) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 18 DIAS DE VACACIONES");
                    } else if (anos >= 20 && anos <= 24) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 20 DIAS DE VACACIONES");
                    } else if (anos >= 25 && anos <= 29) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 22 DIAS DE VACACIONES");
                    } else if (anos >= 30 && anos <= 34) {
                        document.write("LA PRIMA VACACIONAL ES DE: " + anos + " EN UN PERIODO DE 24 DIAS DE VACACIONES");
                    }
                    document.write("<br></br>SU LIQUIDACION DEL CIUDADNO CORRESPONDE A: <br></br>");

                    var mes = salario / 30;
                    document.write("EL SALARIO DIARIO ES: " + mes);

                    var tres_meses = salario * 3;
                    document.write("<br></br>LOS TRES MESES DE SALARIO MENSUAL ES: " + tres_meses);

                    var dias = mes * 20 / 360 * 300;
                    document.write("<br></br>TU LIQUIDACION DE 20 DIAS POR AÑO ES: " + dias);

                    var prima_antiguedad = mes * anos;
                    document.write("<br></br>TU PRIMA DE ANTIGUEDAD ES: " + prima_antiguedad);

                    var sueldoISR;
                    var lim_inferior;

                    //RANGO DE 0 a 578.52
                    if (salario > 0 & salario <= 578.52) {
                        sueldoISR = 192 / 100;
                        lim_inferior = 0.01;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + taza);

                        //RANGO DE 578.53 a 4910.18
                    } else if (salario > 578.53 && salario <= 4910.18) {
                        sueldoISR = 640 / 100;
                        lim_inferior = 578.53;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 11.11 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 4910.19 a 8629.20
                    } else if (salario > 4910.19 && salario <= 8629.20) {
                        sueldoISR = 1088 / 100;
                        lim_inferior = 4910.19;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 288.33 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 8629.21 a 1031.07
                    } else if (salario > 8629.21 && salario <= 10031.07) {
                        sueldoISR = 1600 / 100;
                        lim_inferior = 8629.21;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 692.96 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 10031.08 a 12009.95
                    } else if (salario > 10031.08 && salario <= 12009.95) {
                        sueldoISR = 1792 / 100;
                        lim_inferior = 10031.08;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 917.26 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 12009.96 a 24222.31
                    } else if (salario > 12009.96 && salario <= 24222.31) {
                        sueldoISR = 2136 / 100;
                        lim_inferior = 12009.09;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 1271.87 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 24222.31 a 38177.69
                    } else if (salario > 24222.31 && salario <= 38177.69) {
                        sueldoISR = 2352 / 100;
                        lim_inferior = 24222.08;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 3880.44 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 38177.70 a 72887.50
                    } else if (salario > 38177.70 && salario <= 72887.50) {
                        sueldoISR = 3000 / 100;
                        lim_inferior = 38177.70;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 7162.74 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 72887.51 a 97183.33
                    } else if (salario > 72887.51 && salario <= 97183.33) {
                        sueldoISR = 3200 / 100;
                        lim_inferior = 72887.51;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 17575.69 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 97183.34 a 291550.00
                    } else if (salario > 97183.34 && salario <= 291550.00) {
                        sueldoISR = 3400 / 100;
                        lim_inferior = 97183.34;
                        resultado = salario - lim_inferior;
                        taza = resultado * sueldoISR / 100;
                        rest = 25350.35 + taza;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + rest);

                        //RANGO DE 291550 EN ADELANTE
                    } else {
                        sueldolSR -= 291550.01;
                        sueldolSR = sueldolSR * 35 / 100;
                        sueldoISR += 91435.02;
                        document.write("<br></br>EL PAGO DEL ISR ES DE: " + sueldoISR);

                    }

                    var total = mes + tres_meses + dias;
                    document.write("<br></br>EL PAGO DE LA LIQUIDACION ES DEL " + total);
                </script>
                <br></br>
                
            </body>

</html>