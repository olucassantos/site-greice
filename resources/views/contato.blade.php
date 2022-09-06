@extends('layouts.site')

@section('conteudo')
    <h1>Conte algo para Greice</h1>
    <p>(ela vai amaaaar)</p>

    <form action="">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="Nome">
        </div>

        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="E-mail">
        </div>

        <div>
            <label for="">Assunto</label>
            <input type="text" name="assunto" placeholder="Assunto">
        </div>

        <div>
            <label for="">Mensagem</label>
            <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
        </div>

        <button type="submit">Enviar</button>
    </form>
@endsection
