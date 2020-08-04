@extends('layout')

@section('contenu')
    <form action="/new-personnage" method="post">
        {{ csrf_field() }}
        <div class="row mr-0">
            <div class="col-lg-4">
                <div class="form-check text-center">
                    <input type="radio" name="peupleselect" id="celteRadio" class="form-check-input" value="celte">
                    <label for="celteRadio" class="form-check-label"><h1>Celte</h1></label>
                    <p>
                        Les Celtes vivent en tribus de plus ou moins grande taille, dirigées par un chef souvent qualifié de Roi. 
                        Ils sont sédentaires et excessivement territoriaux, toutefois, par tradition, ils sont toujours à la recherche de meilleurs pâturages ou terres de chasse. 
                        La règle veut que : “le royaume ne peut s’étendre que jusqu’où va le regard du roi”, ainsi les “frontières” entre les tribus ne sont que provisoires et purement hypothétiques.<br>
	                    Ils se nourrissent de pêche et de chasse, mais sont surtout de grands éleveurs et cultivateurs.<br>
                        Les Celtes ont développé un artisanat métallurgique raffiné et de grandes qualité. 
                        Ce sont eux qui ont, par exemple, inventé l’armure de maille ou le tonneau. Comme dans la majorité des cultures barbares, tout homme, quelque soit son statut social, est capable de se battre pour défendre sa tribu et sa famille ou pour combattre une tribu ennemie.<br>
	                    Malgré une prédisposition à dégainer rapidement les armes pour régler le moindre litige, les peuples celtes sont des gens ayant un fort sens de l’accueil. En tant qu’hôtes, les Celtes se doivent d’offrir le gîte et le couvert à tout voyageur respectable. Manquer à ce devoir est un signe de faiblesse et peut même être considéré comme un déshonneur.

                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-check text-center">
                    <input type="radio" name="peupleselect" id="nordsRadio" class="form-check-input" value="skand">
                    <label for="nordsRadio" class="form-check-label"><h1>Skand</h1></label>
                    <p>
                        Les Skands sont des hommes rudes vivant dans des pays rudes. Leurs sources d'approvisionnement sont la chasse, la pêche, un peu de cueillette et de culture, et très peu d’élevage.<br>
                         C’est pour cela que les raids norsks et svensks  ne sont pas rares dans les pays plus riches comme l’Albion ou la Gaule. Ils en ont tiré une grande culture de la guerre et nombre de leurs croyances sont basées dessus.<br>
                          Mais plus on descend vers le sud, moins les gens sont belliqueux, bien que toujours prompt à se battre.
	                    Ils vivent en tribus sédentaires de grandes tailles dirigées par un roi et par les lois édictés lors du Thing et du Leid. L’ensemble des tribus d’un même royaume répond à l’autorité d’un roi unique (le Konungur) et souverain.

                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-check text-center">
                    <input type="radio" name="peupleselect" id="etrusqueRadio" class="form-check-input" value="etrusque">
                    <label for="etrusqueRadio" class="form-check-label"><h1>Étrusque</h1></label>
                </div>
            </div> 
        </div>
        <div class="text-center">
            <input type="submit" value="Créer" class="btn btn-success">
        </div>

    </form>
@endsection