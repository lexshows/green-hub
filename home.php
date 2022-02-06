<!-- 
    Criado por Alex Andrade
    Source:
    Função: Tela de Login
    Data: 02/02/2022

-->



<!DOCTYPE html>

<html lang="en">

<head>


    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css\stylecustom.css" type="text/css">


    
</head>

<body>

<main>
    <form name = "form1" method = "POST" action = "login.php">
        <table border="0.5px" style="border-radius: 2rem; padding:5px" >
            <tr>
                <td class="linhas">
                    User:
                </td>
                <td class="linhas">
                    <input class="userlogin" type="text" name="userlogin" id="" autofocus>
                </td>
            </tr>
            <tr>
                <td class="linhas">
                    Password:
                </td>
                <td class="linhas">
                    <input class="passwordlogin" type="password" name="userpassword" id="">
                </td>
            </tr>
            <input class="btn btn-success" type="submit" value="Login" name="btnenviar" style="display: inline-block;">
  







        </table>
    </form>
    <div class="botoes">
        


        <!-- <input class="btn btn-warning" type="button" value="Reset Password" style="display: inline-block;"> -->
        


    </div>
    <div>
        

    
    </div>
    
</main>



</body>


</html>