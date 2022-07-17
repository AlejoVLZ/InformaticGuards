<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
class UsuarioController extends Controller
{
    protected $usuarios;
    public function __construct(Usuario $usuarios)
    {
     $this->usuarios = $usuarios;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = $this->usuarios->obtenerUsuarios();
        $data = [
            'usuarios'=>$usuarios,
        ];
        return view('users-info',$data);
    }
    public function indexu()
    {
        $usuarios = $this->usuarios->obtenerUsuarios();
        $data = [
            'usuarios'=>$usuarios,
        ];
        return view('verusuarios',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   public function store(Request $request)
    {
        request()->validate([
            'name'=> 'required',
            'password'=> 'required',
            'email'=> ['required','email'],
            'dni'=> 'required',
            'rol'=> 'required'
        ]);
        $usuario = new Usuario($request->all());
        $usuario->save();
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = $this->usuarios->obtenerUsuarioporId($id);
        return view('usuarios.ver',['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuarios->obtenerUsuarioporId($id);
        $data = [
            'usuarios'=>$usuario,
        ];
        return view('User-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return view('users-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->action([UsuarioController::class,'index']);
    }
    public function verify(Request $auth){
        $auth = request()->only('name');

        if (Auth::attempt($auth)){

            return 'exito';
            /*redirect('home_user');*/
        }
        return 'comprueba nuevamente los campos';

    }
}
