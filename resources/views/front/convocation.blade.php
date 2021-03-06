
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>

<div class="wrapper">
    @include('includes.sidebar')
    <div class="wrapper-inline">
        <!-- Header area start -->
        <header> <!-- extra class no-background -->
            <a class="go-back-link" href="{{route('mainScreen')}}"><i class="fa fa-arrow-left"></i></a>
            <h1 class="page-title">Convocations</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>

        <div>
            <div class="section-head">
                <h4 class="title-main" style=" margin-top: 25px;margin-left: 155px;">Mes enfants</h4>

            </div>

            @if($eleves && $eleves->count()>0)


                @foreach($eleves as $enf)
                    <div class="touch" onclick="window.location.href='{{route('listConvocation', $enf->id)}}';">
                        <div class="inst-card v2">
                            <div class="inst-item row">
                                <div class="col-md-6">
                                    <img src="{{asset('assets/'.$enf->image)}}" alt="" class="inst-ing" width="25%"
                                         height="100%" style="    border-radius: 58%;  margin-top: -2px;margin-right: 7%;float: right;">
                                </div>
                                <div class="col-md-6" style="font-size: 20px">
                                    <label><strong>{{$enf->nomEleve}} {{$enf->prenomEleve}}</strong></label>
                                    <br>
                                        <label>Niveau : {{$enf->class->level->level}}  </label>
                                    <br>
                                        <label>Classe : {{$enf->class->name}} </label>
                                    <br>
                                    <label>Total Convocation: </label>
                                    <span class=" badge badge-success" style="width: 10%">
                                {{$enf->convocations()->count()}}
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--        <a href="{{route('listTask', $enf->id)}}">-->

                    <!--        </a>-->
                @endforeach
            @endif



        </div>
    </div>
</div>
<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>


</body>

</html>
