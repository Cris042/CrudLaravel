<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--==============================================================================================-->
        <meta charset="utf-8">
        <!--==============================================================================================-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--==============================================================================================-->
        <title>Laravel</title>
        <!--========================================= Fonts ==============================================-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!--========================================= Styles =============================================-->
	    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css"> 
        <!--==============================================================================================-->	

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html
            {
                background: #e3f2fd;
            }

            .content
            {
                width: 70%;
                height: 500px;

                margin-left: 15%;
                margin-top: 8%;
                padding: 10px;

                border: 6px solid rgba(220, 220, 220, 0.932);
                background-clip: padding-box;
                
                background: #f5f5f5;
            }

            .w50
            {
                width: 50%;
            }

            .card-cadastro
            {
                float: left;

                height: 100%;

                background-clip: padding-box;
                border-right: 2px solid rgba(220, 220, 220, 0.932);
            }

            .card-users
            {
                float: right;
                
                height: 100%;

                background-clip: padding-box;
                border-left: 2px solid rgba(220, 220, 220, 0.932);
            }

            .title
            {
                font-size: 22px;
                color: #000;

                text-align: center;

                margin-top: 20px;
            }

            .card-content   
            {
                width: 90%;
                max-height: 50%;

                margin-left: 5%;
                margin-top: 20%;

                overflow-y: auto;
            }

            .input-w80
            {
                height: 55px;
                width: 80%;

                font-size: 20px;

                margin-left: 10%;
                padding-left: 10px;
                margin: none;
                margin-bottom: 3px;

                background: transparent;

                border: 1px solid #000;
                border-radius: 5px;
                
                outline: none;
            }

            .btn-input
            {
                background: cyan;
            }

            .btn-input:hover
            {
                background: rgb(8, 147, 172);
                border: solid 2px #f5f5f5;
                transition: all 0.3ms;
            }

            .card-content > ul > li
            {
                height: 60px;
                width: 100%;

                text-decoration: none;

                background:  #f5f5f5;

                background-clip: padding-box;
                border: 2px solid rgba(220, 220, 220, 0.932);

                margin-top: 4px;

                border-radius: 5px;

                padding: 18px 10px 10px 10px;
            }

            
            .btn-edit
            {
                width: 30%;

               
                color: #000;

                text-decoration: none;

                margin-left: 55%;
                margin-right: 5%;
              
                border-radius: 5px;
                border: 2px solid  #000;

                padding: 5px;
            }

            .btn-delet
            {
                width: 30%;

               
                color: #000;
                
                text-decoration: none;

                border-radius: 5px;
                border: 2px solid #a30b0b;

                padding: 4px;
            }

            .btn-delet:hover
            {
                background: #a30b0b;
            }

            .btn-edit:hover
            {
                background: #e6f562;
            }
        </style>

    </head>
    

    <body>   
       <div class="content">
            <div class = "card-cadastro w50">
                  <p class = "title"> Cadastre-se </p>

                  <div class = "card-content">
                      <form>
                          <input class = "input-w80" type = "text" name = "name" placeholder="Nome" />
                          <input class = "input-w80" type = "text" name = "email" placeholder="E-mail" />
                          <input class = "input-w80" type = "password" name = "password" placeholder="Senha" />
                          <input class = "input-w80 btn-input" type = "submit" />
                      </from>                     
                  </div><!--\ card-content !-->

            </div><!--\ card-cadastro !-->

            <div class = "card-users w50">
                  <p class = "title"> Usuarios </p>

                  <div class="card-content">
                       <ul>
                            <li> 
                               user 01 
                               <a class = "btn-edit" href = "editar?id=1"> Editar </a> 
                               <a class = "btn-delet" href = "deletar?id=1"> Deletar </a>
                            </li>

                            <li> 
                               user 02
                               <a class = "btn-edit" href = "editar?id=1"> Editar </a> 
                               <a class = "btn-delet" href = "deletar?id=1"> Deletar </a>
                            </li>

                            <li> 
                               user 03
                               <a class = "btn-edit" href = "editar?id=1"> Editar </a> 
                               <a class = "btn-delet" href = "deletar?id=1"> Deletar </a>
                            </li>

                            <li> 
                               user 01 
                               <a class = "btn-edit" href = "editar?id=1"> Editar </a> 
                               <a class = "btn-delet" href = "deletar?id=1"> Deletar </a>
                            </li>

                            <li> 
                               user 02
                               <a class = "btn-edit" href = "editar?id=1"> Editar </a> 
                               <a class = "btn-delet" href = "deletar?id=1"> Deletar </a>
                            </li>

                            <li> 
                               user 03
                               <a class = "btn-edit" href = "editar?id=1"> Editar </a> 
                               <a class = "btn-delet" href = "deletar?id=1"> Deletar </a>
                            </li>

                       </ul>
                  </div><!--\ card-content !-->

            </div><!--\ card-users !-->
        </div>
    </body>

</html>