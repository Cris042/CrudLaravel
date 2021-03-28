@extends('templates.model')

@section('content')  
    <div class="content">
        <div class = "card-cadastro w50">
            <p class = "title"> Cadastre-se </p>

            @if ( $errors->any() )
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="msn-erro">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class = "card-content">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <input class = "input-w80" type = "text" name = "name" placeholder="Nome" />
                    <input class = "input-w80" type = "text" name = "email" placeholder="E-mail" />
                    <input class = "input-w80" type = "password" name = "password" placeholder="Senha" />
                    <input class = "input-w80 btn-input" type = "submit" />
                </form>                     
            </div><!--\ card-content !-->

        </div><!--\ card-cadastro !-->

        <div class = "card-users w50">
            <p class = "title"> Usuarios </p>

            <form action="{{ route('user.search') }}" method="post">
                @csrf
                <input class = "input-w80 input-search search" type = "text" name = "search" placeholder="Pesquiser por nome ou E-mail" />
            </form>

            <div class="card-content">
                <ul>
                    @foreach ( $users as $user ) 
                        <li> 
                            {{ $user->name }}
                            <a class = "btn-edit" href = "{{ route('editar', $user->id) }}"> Editar </a> 

                            <form action="{{ route('deletar', $user->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class = "btn-delet" > Deletar </a>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div><!--\ card-content !-->

        </div><!--\ card-users !-->
            
    </div><!--\ content !-->
@endsection
