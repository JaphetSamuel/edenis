<div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#Modal-{{$textes->tag}}">
        <small class="text-muted">Voir plus</small>
    </button>

    <!-- Modal -->
    <div class="modal fade " id="Modal-{{$textes->tag}}" tabindex="-1" aria-labelledby="ModalLabel-{{$textes->tag}}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #FFD700;">
                    <h1 class="modal-title fs-4" id="exampleModalLabel">{{$textes->nom}}</h1>
                    <button type="button" class="btn-close btn btn-outline-dark" data-dismiss="modal" aria-label="Close"> X </button>
                </div>
                <div class="modal-body">
                    {!!
                                    $textes->contenu
                                !!}
                </div>
                <div class="modal-footer">

                    <a href="{{route('join_us')}}" class="btn btn-primary">S'inscrire et contribuer</a>
                </div>
            </div>
        </div>
    </div>
</div>