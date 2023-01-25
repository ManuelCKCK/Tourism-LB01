<?php

namespace App\Http\Controllers;

use App\Models\Travellist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    public function travellist()
    {
        $user = Auth::user();
        $id = $user->id;

        $attraction_data = DB::table('attractions')
            ->join('travellists', 'travellists.attraction_id', '=', 'attractions.id')
            ->where('travellists.user_id', '=', $id)
            ->paginate(4);
        return view('travellist', compact('attraction_data', 'id'));
    }

    public function update_travellist($attraction_id)
    {
        $user = Auth::user();
        $id = $user->id;

        DB::table('travellist')->where('user_id', $id)
            ->where('attraction_id', $attraction_id)
            ->delete();
        return redirect()->back();
    }

    public function delete_travellist(Request $request)
    {
        $delete_posts = Travellist::find($request->id_travel)->delete();
        return redirect()->route('travellist', compact('delete_posts'));
    }

    public function add_travellist($attraction_id)
    {
        $user = Auth::user();
        $id = $user->id;
        DB::table('travellists')->insert([
            'user_id' => $id,
            'attraction_id' => $attraction_id,
        ]);
        return redirect()->back();
    }
}
