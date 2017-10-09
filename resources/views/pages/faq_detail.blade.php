@extends('layouts.app')
@section('title', 'F.A.Q')
@section('content')
    
  <div class="container-fluid"> <!-- Menu central row -->   
        <div class="col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu-row-central"> 
                <div class="span1">
                    <a href="/apropos"><img src="/images/f.png" class="img-circle" style="width:60px" alt="icone apropos">A Propos</a>
                    <a href="/conditions"><img src="/images/c.png" class="img-circle" style="width:60px" alt="icone conditions">Conditions</a>
                    <a href="/contact"><img src="/images/notepad.png" class="img-circle" style="width:60px" alt="contact">Contact</a>
                    <a href="/faq"><img src="/images/faq.png" class="img-circle" style="width:60px" alt="faq">FAQ</a>
                </div><!-- fin central row -->  
            </div>
        </div>
    </div>

    <div class="container" id="faq">     <!-- menu central  -->  
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu-central"> 
            <div class="span2">
                <h1>F.A.Q</h1>
                     <form action="/faq" method="post">    
               {{--  {{ csrf_field() }} --}}
                <!--formulaire questions-->
                <hr>
                <h1>Question</h1>
                <hr class="hr1">
                <h2 class="h2pink">{{$faq->content}}</h2>
                <h1>REPONSE DE NOTRE EQUIPE</h1>
                <hr class="hr2">
                <h2 class="h2pink">{{$faq->answer->content}}</h2>
                <div class="row">
                    {{--  <div class="col-md-6"> --}}

                        <a href="/faq" class="btn btn-info">retour F.A.Q</a>
                         {{-- <a href="/" class="btn btn-primary">Edit message</a> --}}
                            {{-- <button href="" type="submit" class="btn btn-danger">supprime message</button> --}}
                  {{--   </div>     --}}    
                </div>     
          
            </form>
            </div>

       
        </div>
    </div>
   



	
@endsection