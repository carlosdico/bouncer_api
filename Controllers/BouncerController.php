<?php

namespace carlosdico\BouncerApi\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;

class BouncerController extends Controller
{
    public function assignRole(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->user_id);
        Bouncer::assign($request->role)->to($user);

        return response()->json(['message' => 'Rol asignado']);
    }

    public function revokeRole(Request $request)
    {
        $user = \App\Models\User::findOrFail($request->user_id);
        Bouncer::retract($request->role)->from($user);

        return response()->json(['message' => 'Rol revocado']);
    }

    public function givePermission(Request $request)
    {
        Bouncer::allow($request->role)->to($request->permission);

        return response()->json(['message' => 'Permiso otorgado']);
    }

    public function revokePermission(Request $request)
    {
        Bouncer::disallow($request->role)->to($request->permission);

        return response()->json(['message' => 'Permiso revocado']);
    }
}
