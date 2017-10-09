<?php

namespace App\Http\Controllers;

// use Auth;
// use Illuminate\Database\Eloquent\SoftDeletesdeleted_at;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Alb_photos;
use App\Parametre;


class ControllerParametre extends Controller
{

         public function __construct()
    {
        $this->middleware('auth');
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index($id)  // Affiche les parametres contenue dans la table 'users'
    {
        

    

             $new_parametre = Parametre::where('id', Auth::id() )    
             ->get(); 





           
         
         
         

         // if ($photos === NULL){

         //    $photos = '/images/psyduck.png';
            


         // }
         // else {

         //    $photos = $photos->url_photo; 

         // }
        
         
       
    

      

          
         
       

        return view ('pages.parametre',['zoros' => $new_parametre]);
      
      

        // $photo_profil = Alb_photos::where('id',Auth::id() )

        // ->get(); 
       //  $photos = Alb_photos::where('user_id', 501 )    
       // ->first(); 
        
     

      



        // $data = [];
        // $data['users'] = [
            
        //     'first_name' => $request->first_name,      //$request->first_name,
        //     'last_name' => $request->last_name,
        //     'birth_date' => $request->birth_date,
        //     'email' => $request->email,
        //     'tel' => $request->tel,
        //     'password' => $request->password,
        //     'description' => $request->description,
        //     'photoID' => $request->photoID,
            
          
        // ];


    //return view('pages.parametre',$users);





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    

    {



        // $photo = Alb_photos::find('user_id' , Auth::id()->url_photo);

         $parametre = Parametre::find(Auth::user()->id);

        

         
         


         // $pass = ([
                
         //        'password' => bcrypt($request->password)  //----> recupere le password dans un tableau pour l'encrypté
         //    ]);


         //    $parametre->password = $pass['password'];  //------> recupére la valeur password du tableau $pass

//-------------------------------------------------------------------

        if (empty( $request->password || $request->conf_password)){   // controle du champ mot de passe si vide ne rien fair.

         
         
        } 
          else { 

              $pass = ([
                
                'password' =>bcrypt($request->password)  //----> recupere le password dans un tableau pour l'encrypté
            ]);

              $parametre->password = $pass['password'];


              // if ($pass['password'] ==  $parametre->password ){

              //    $parametre->password = $pass['password'];  //-comparé l'ancien mot de passe pour confirmé le changement.


              // }
            }


//-----------------------------------------------------------------------------------------------------------


           if (empty( $request->birth_date)){   // controle du champ Birth_date si vide ne rien fair.

         
         
        } 
          else {    

            $parametre->birth_date = $request->birth_date;

  
        }

//-------------------------------------------------------------------------

// $tof = ([
                
//                 'url_photo' =>($request->url_photo)  //----> recupere le password dans un tableau pour l'encrypté
//             ]);
//-----------------------------------------------------------------------------

        //$photo->url_photo = $request->Alb_photos->url_photo;
        
        $parametre->url_photo_profil = $request->url_photo;
        $parametre->first_name = $request->first_name;
        $parametre->last_name = $request->last_name; 
        //$parametre->birth_date = $request->birth_date;
        $parametre->email= $request->email;  
        $parametre->activite= $request->activite; 
        $parametre->tel= $request->tel;
        $parametre->description = $request->description;
        $parametre->save();



            
             // $photo = Alb_photos::where('user_id', Auth::id())->get();

             // $photo->url_photo = $request->url_photo;

             // $photo->save();





         return redirect('/profil');
         
         // return redirect('/profil/'. Auth::user()->id);    ----> redirection ver parametre + id 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
