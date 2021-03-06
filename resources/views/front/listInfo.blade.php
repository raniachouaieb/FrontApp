<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>

@include('includes.sidebar')
<div class="wrapper-inline">
    <!-- Header area start -->
    <header> <!-- extra class no-background -->
        <a class="go-back-link" href="{{route('noteInfo')}}"><i class="fa fa-arrow-left"></i></a>
        <h1 class="page-title">Note Info</h1>
        <div class="navi-menu-button">
            <em></em>
            <em></em>
            <em></em>
        </div>
    </header>


    <div class="section-head">
        <?php $eleve = \App\Models\Student::where([['parent_id', Auth::guard('parente')->user()->id], ['class_id', $id]])->first()?>
        <h4 class="title-main">Liste des informations : <strong>{{$eleve->nomEleve}} {{$eleve->prenomEleve}}</strong>
        </h4>

    </div>


    <section class="container">
        <div>
            <ul class="courses-list list-unstyled mb-0">


                @forelse($listInf as $info)
                    @foreach($info as $inf)

                        <li style="width: 60%;margin-left: 20%;">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center course-item row">
                                    <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->

                                    <div class="col-md-6">
                                        <label >Sujet : {{$inf['titre']}}</label>
                                        <br>
                                        <label>
                                            Détail:
                                        </label>
                                            <label>{!!$inf['info']  !!}</label>
                                        <br>
                                        <label>Envoyé le : </label>
                                        <span class=" badge badge-success" style="width: 39%">
                                        {{date('d/m/Y',strtotime($inf->created_at))}}
                                        </span>
                                    </div>




                                 </div>

                            </div>

                        </li>


                    @endforeach
                @empty
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center course-item">
                                <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->

                                <div class="row">
                                    <h5> Aucune information envoyer</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforelse
            </ul>

        </div>
    </section>


</div>

</body>
</html>
