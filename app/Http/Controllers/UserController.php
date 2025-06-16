<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private Request $request;

    function __construct(Request $request){
        $this->request = $request;
    } 

    public function login(){
        //La validacion del usuario la hare directamente desde el middleware
        $data_user = $this->request->only('email','password');
        
        /**
         *  Esto son solo las validaciones de informacion
         *  Que es diferente a las de la autentificacion
         *  La autentificacion podemos decir que se encuentra en la base de datos
         *  Tiene  que tener la mismas nombre que las credenciales que obtuvimos 
         * con el request->only 
         */
        $result = Validator::make($data_user, [
            'email'    => 'required|email|max:100',
            'password' => 'required|min:6|max:20'
        ]);

        #Esto por si nos pasa las validaciones
        #El metodo back redirecciona al previo
        if($result->fails()){
            return back();
        }
        
        if(auth()->guard()->attempt($data_user)){
            //Con esto mando acciones del controlador para que sea en una ruta
            return redirect()->to('admin');
        }
        
        return back();
    }

    #Esta es la ruta en la que se va mostrar el form
    public function create(): View {
        $roles = Rol::all();
        #Si osi le debo de pasar un diccionario que apunte a los registro que obtuve
        
        $list_rol = [
            'roles' => $roles
        ];

        return view('admin/formLoad', $list_rol);
    }
    
    /**
     * Esta es la funcion que guarda en la base de datos de parte del backend
     * 
     * @return RedirectResponse
     */
    public function store(): RedirectResponse | View{
         $data_register = $this->request->only([
            'name',
            'lastName',
            'email',
            'password',
            'fkRole'
        ]);

        $data_is_correct = Validator::make($data_register,[
            'name'     => 'required|max:50',
            'lastName' => 'required|max:50',
            'email'    => 'required|email|max:100|unique:users,email',
            'password' => 'required|min:6|max:20'
        ]);

        if($data_is_correct->fails())
            return back();

        $data_register['password']      = bcrypt($data_register['password']);
        $data_register['passwordToken'] = Str::random(50);
        $data_register['token']         = Str::random(50);

       //Ok segun el create rellena solo el timestamp()
        User::create($data_register);

        return view('dashboard'); 
        #Esto mandar un 404 por que no tengo una ruta que apunta al dahboard
    }

    /**
     * Esta es la funcion que se cierra sesion
     */
    public function logout(): RedirectResponse{
        auth()->guard()->logout();

        return redirect()->to('');
    }
}
