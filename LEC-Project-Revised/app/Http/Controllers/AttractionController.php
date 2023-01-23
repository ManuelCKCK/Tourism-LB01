<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttractionController extends Controller
{
    public function show_home()
    {
        $attraction_data = DB::table('attractions')->take(3)->get();

        return view('dashboard', compact('attraction_data'));
    }

    public function show_all()
    {
        $attraction_data = DB::table('attractions')->get();

        return view('all_attractions', compact('attraction_data'));
    }

    public function show_by_category($id)
    {

        $attraction_data = DB::table('attractions')->where('class', '=', $id)->get();
        if ($id == 1) {
            $category = 'Nature';
            return view('category', compact('attraction_data', 'category'));
        } else if ($id == 2) {
            $category = 'Heritage';
            return view('category', compact('attraction_data', 'category'));
        }
    }

    public function show_attraction($id)
    {
        $site = DB::table('attractions')->where('id', '=', $id)->first();

        $review_data = DB::table('reviews')->where('attraction_id', '=', $id)->paginate(6);;

        return view('attraction', compact('site', 'review_data'));
    }

    public function add_review(Request $request, $id)
    {
        $user = Auth::user();

        DB::table('reviews')->insert([
            'name' => $user->name,
            'attraction_id' => $id,
            'review' => $request->review,
        ]);

        return redirect()->back();
    }

    public function all_bookings()
    {
        $user = Auth::user();
        $booking_data = DB::table('bookings')->where('user_id', '=', $user->id)->get();

        return view('all_bookings', compact('booking_data'));
    }

    public function book_ticket($attraction_id)
    {
        $all_attractions = DB::table('attractions')->get();
        $attraction = DB::table('attractions')->where('id', '=', $attraction_id)->first();

        return view('book', compact('attraction', 'all_attractions'));
    }

    public function confirm_booking(Request $request, $attraction_id)
    {
        $user = Auth::user();

        $attraction = DB::table('attractions')->where('id', '=', $attraction_id)->first();

        DB::table('bookings')->insert([
            'user_id' => $user->id,
            'attraction_name' => $attraction->name,
            'date' => $request->date,
            'time' => $request->time,
            'adult' => $request->adult,
            'children' => $request->children,
        ]);

        return redirect('/all_bookings');
    }

    public function remove_booking($id)
    {
        DB::table('bookings')->where('id', $id)
            ->delete();
        return redirect()->back();
    }

    public function booking_detail($id)
    {
        $user = Auth::user();
        $booking_data = DB::table('bookings')->where('id', '=', $id)->first();
        $attraction = DB::table('attractions')
            ->where('name', 'LIKE', $booking_data->attraction_name)->first();

        $subtotal_adult = $attraction->adult_price * $booking_data->adult;
        $subtotal_children = $attraction->children_price * $booking_data->children;
        $subtotal = ($attraction->adult_price * $booking_data->adult) + ($attraction->children_price * $booking_data->children);
        $total = $subtotal + 5000;

        return view('booking_detail', compact('booking_data', 'attraction', 'user', 'subtotal', 'subtotal_adult', 'subtotal_children', 'total'));
    }
}
