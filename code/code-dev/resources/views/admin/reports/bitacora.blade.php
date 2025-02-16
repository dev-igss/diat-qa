<!DOCTYPE>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Bitacora</title>
 
    <style>
        body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif; 
        font-size: 14px;
        /*font-family: SourceSansPro;*/
        }

        #logo{
        float: left;
        margin-top: 1%;
        margin-left: 2%;
        margin-right: 2%;
        }

        #imagen{
        width: 100px;
        }

        #datos{
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /*text-align: justify;*/
        }

        #encabezado{
        text-align: center;
        margin-left: 10%;
        margin-right: 35%;
        font-size: 15px;
        }

        #fact{
        /*position: relative;*/
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        }

        section{
        clear: left;
        }

        #cliente{
        text-align: left;
        }

        #facliente{
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }

        #fac, #fv, #fa{
        color: #FFFFFF;
        font-size: 15px;
        }

        #facliente thead{
        padding: 20px;
        background: #2183E3;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;  
        }

        #facvendedor{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }

        #facvendedor thead{
        padding: 20px;
        background: #2183E3;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;  
        }

        #facarticulo{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }

        #facarticulo thead{
        padding: 20px;
        background: #2183E3;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;  
        }

        #gracias{
        text-align: center; 
        }
    </style>
    <body> 
        <header>
            <div id="logo">
                <img src="img/igss.png" alt="iIGSS" id="imagen">
            </div>
            <div id="datos">
                <p id="encabezado">
                    <b>SIDEX - Reporte de Bitacora</b><br>IGSS Hospital General de Quetzaltenango<br>PBX: 78291200<br>EXT: 90190, 90186<br>Email: ricardod.velaquez@igssgt.org
                </p>
            </div>
        </header>
        <br>
        <br>
        <section>
            <div>
                <table id="facliente">
                    <thead>                        
                        <tr>
                            <th id="fac">Reporte Generado Por</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><p id="cliente">Nombre: {{ Auth::user()->name }} {{ Auth::user()->lastname }}<br>
                            IBM: {{ Auth::user()->ibm }}<br>
                            Teléfono: {{ Auth::user()->phone }}<br>
                            Email: {{ Auth::user()->email }}</p></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <br>
        <section>
            <div>
                <table id="facarticulo">
                    <thead>
                        <tr  id="fa" >
                            <td>ID</td>
                            <td>ACCION</td>
                            <td>REALIZADO POR</td>
                            <td>FECHA Y HORA</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bitacora as $b)
                            <tr>
                                <td>{{$b->id}}</td>
                                <td>{{$b->action}}</td>
                                <td>{{$b->user->name.' '.$b->user->lastname.' - '.$b->user->ibm}}</td>
                                <td>{{$b->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <br>
        <br>
        <footer>
            <div id="gracias">
                <p><b>Reporte actualizado a fecha {{ $fecha }}</b></p>
            </div>
        </footer>
    </body>
</html>