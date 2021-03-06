<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">
</head>

<body>

<div class="wrapper">
    @include('includes.sidebar')
    <div class="wrapper-inline">
        <!-- Header area start -->
        <header> <!-- extra class no-background -->
            <a class="go-back-link" href="{{route('mainScreen')}}"><i class="fa fa-arrow-left"></i></a>
            <h1 class="page-title">Note Info</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>

        <div>
            <div class="section-head">
                <h4 class="title-main">Mes enfants</h4>

            </div>

            @if($eleves && $eleves->count()>0)


                @foreach($eleves as $key=>$enf)
                    <div class="touch" onclick="window.location.href='{{route('listInfo', $enf->class_id)}}';">
                        <div class="inst-card v2">
                            <div class="row inst-item">


                                    <div class="col-md-6">
                                        <img src="{{asset('assets/'.$enf->image)}}" alt="" class="inst-ing" width="25%"
                                             height="100%" style="    border-radius: 58%;  margin-top: -2px;margin-right: 7%;float: right;">
                                    </div>
                                    <div class="col-md-6"style="font-size: 20px">
                                        <label><strong>{{$enf->nomEleve}} {{$enf->prenomEleve}}</strong></label>

                                        <BR>

                                        <label>
                                            Classe : {{$enf->class->level->level}}  {{$enf->class->name}}
                                        </label>
                                        <br>
                                        <label>Travail ?? faire r????us : </label>
                                        <span class=" badge badge-success" style="width: 10%">
                                        {{$countTotal[$key]}}
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
