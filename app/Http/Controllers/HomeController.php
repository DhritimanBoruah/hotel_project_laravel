<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Gallery;
use Illuminate\Http\Request;

use App\Models\Room;
use App\Models\Contact;

class HomeController extends Controller
{
    public function room_details($id){
        $room = Room::find($id);
        return view('home.room_details',compact('room'));
    }

    public function about(){
        return view('home.about_page');
    }

    public function room_page(){
        $room_page = Room::all();
        return view('home.room_page',compact('room_page'));
    }

    public function gallery_page(){
        $gallery = Gallery::all();
        return view('home.gallery_page',compact('gallery'));
    }

    public function contact_page(){
        return view('home.contact_page');
    }

    public function add_booking(Request $request,$id){

        $request->validate([
            'start_date'=> 'required|date',
            'end_date' => 'date|after:start_date'
        ]);

        $book = New Booking();

        $book->room_id = $id;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->phone = $request->phone;

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $is_booked = Booking::where('room_id',$id)->
                              where('start_date','<=',$start_date)->
                              where('end_date','>=',$end_date)->exists();

        if($is_booked){
            return redirect()->back()->with('message', 'Room is already Booked!');
        }
        else{
            $book->start_date = $request->start_date;
            $book->end_date = $request->end_date;

            $book->save();
            return redirect()->back()->with('message', 'Booking booked successfully!');
        }      
    }

    public function message(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|max:10',
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        return redirect()->back()->with('message', 'Message sent successfully!');


    }
}
