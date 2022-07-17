<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Turno;

class TurnoController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Turno::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'personal', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('Home_Adm');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = Turno::create([
    				'personal'		=>	$request->personal,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = Turno::find($request->id)->update([
    				'personal'		=>	$request->personal,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Turno::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
?>
