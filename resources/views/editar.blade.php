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
                width: 40%;
                height: 450px;
                margin-left: 30%;
                margin-top: 8%;
                padding: 10px;
                border: 6px solid rgba(220, 220, 220, 0.932);
                background-clip: padding-box;              
                background: #f5f5f5;
            }


            .card-cadastro
            {
                height: 100%;
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
                margin-left: 5%;
                margin-top: 10%;
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

            .msn-erro
            {
                margin-top: 10px;
                margin-left: 10px;
                text-align: left;
                color: red;
            }
        </style>

    </head>
    

    <body>   
       <div class="content">
            <div class = "card-cadastro">
                <p class = "title"> Editar </p>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="msn-erro">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class = "card-content">
                    <form action="{{ route('user.edit', $user->id) }}" method="post">
                        @csrf
                        @method('put')
                        <input class = "input-w80" type = "text" name = "name"  value ="{{ $user->name }}" placeholder="Nome" />
                        <input class = "input-w80" type = "text" name = "email" value ="{{ $user->email }}" placeholder="E-mail" />
                        <input class = "input-w80" type = "password" name = "password" value ="{{ $user->password }}" placeholder="Nova Senha" />
                        <input class = "input-w80 btn-input" type = "submit" />
                    </form>                     
                </div><!--\ card-content !-->

            </div><!--\ card-cadastro !-->

        </div><!--\ content !-->
    </body>

</html>
