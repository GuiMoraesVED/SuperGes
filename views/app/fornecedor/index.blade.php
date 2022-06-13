<h3> fornecedor </h3>



@isset($fornecedores)

@forelse($fornecedores as $indice => $fornecedor) 
Iteração atual: {{$loop ->iteration}}
<br>
Fornecedor: {{ $fornecedor['nome']}}
<br>
Status: {{ $fornecedor['status']}}
<br>
CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
<br>
@if ($loop->first)                
    Primeira iteração do loop
@endif
@if ($loop->last)
    Ultima iteração do loop
<br>
    Total de Registros: {{ $loop->count}}
@endif
<br>


<hr>

@empty
        Nao tem nada cadastrado!


@endforelse

@endisset


@php
/*

    if() {
        
    }
    elseif() {

    }
    else() {

    }


@if(count($fornecedores) > 0 && count ($fornecedores) <10)
        <h3>exitem alguns cadastrados</h3>
@elseif(count($fornecedores) > 10)
        <h3>exitem vários cadastrados</h3>
@else
        <h3>nada cadastrado</h3>

@endif


///////////////////////

@isset($fornecedores[1]['cnpj'])
CNPJ: {{ $fornecedores[1]['cnpj']}}                               testa se existe variavel
@endisset
@endisset




///////////////////////

@for($i = 0; isset($fornecedores[$i]); $i++)
Fornecedor: {{ $fornecedores[$i]['nome']}}
<br>
Status: {{ $fornecedores[$i]['status']}}
<br>
CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não preenchido' }}
<hr>
@endfor



////////////////////////



*/

@endphp