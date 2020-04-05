@extends('layout')
    @section('titulo')
        :: Series ::
    @endsection
    @section('cabecalho')
        Séries
    @endsection
    @section('conteudo')
        <a href="/series/create" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            <?php foreach ($series as $serie) { ?>
            <li class="list-group-item"><?php echo $serie; ?></li>
            <?php }?>
        </ul>
    @endsection
