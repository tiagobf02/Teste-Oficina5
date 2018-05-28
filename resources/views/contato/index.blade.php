@extends('layouts.app')

@section('stylecss')
<style media="screen">
    .a-line {
        line-height: 30px;       
    }
</style>

@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
             <form action="{{route('historic.search')}}" method="POST" class="form form-inline">
             {!! csrf_field() !!} 
            <input type="text" name="nome" class="form-control" placeholder="NOME">
            <input type="text" name="telefone" class="form-control" placeholder="TELEFONE">
            
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>
            Contatos
            <a href="{{ url('contato/add') }}" class="btn btn-primary left">Novo</a>
        </div>
       
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                    <tbody>
                        @foreach ($contatos as $contato)
                        <tr>
                            <td>
                                <a href="{{ url('contato/'.$contato->id) }}">
                                    
                                </a>
                            </td>
                            <td><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->nome }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->telefone }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->email }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection