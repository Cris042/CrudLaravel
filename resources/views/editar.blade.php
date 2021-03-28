@extends('templates.model')

@section('content')  
    <div class="content-edit">
        <div class = "card-edit">
            <p class = "title"> Editar </p>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="msn-erro">{{ $error }}</li>
                     @endforeach
                </ul>
            @endif

            <div class = "card-content-edit">
                <form action="{{ route('user.edit', $user->id) }}" method="post">
                    @csrf
                    @method('put')
                    <input class = "input-w80" type = "text" name = "name"  value ="{{ $user->name }}" placeholder="Nome" />
                    <input class = "input-w80" type = "text" name = "email" value ="{{ $user->email }}" placeholder="E-mail" />
                    <input type = "hidden" name = "emailAtual" value ="{{ $user->email }}" />
                    <input class = "input-w80" type = "password" name = "password" placeholder="Nova Senha" />
                    <input class = "input-w80 btn-input" type = "submit" />
                </form>                     
            </div><!--\ card-content !-->

        </div><!--\ card-edit !-->

        </div><!--\ content-edit !-->
@endsection

