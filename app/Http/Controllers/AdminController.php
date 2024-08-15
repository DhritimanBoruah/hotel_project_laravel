<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\User;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Gallery;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->User()->usertype;

            if ($usertype == 'user') {
                $room = Room::all();
                $gallery = Gallery::inRandomOrder()->take(8)->get();
                $blogRooms = Room::inRandomOrder()->take(3)->get();
                return view('home.index', compact('room','gallery','blogRooms'));
            } else if ($usertype == 'admin') {
                $totalUsers = User::where('usertype', '!=', 'admin')->count();
                $totalRooms = Room::count();
                $RoomBooked = Booking::count();
                return view('admin.index',compact('totalUsers','totalRooms','RoomBooked'));
            } else {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        $room = Room::all()->take(6);
        $gallery = Gallery::inRandomOrder()->take(8)->get();
        $blogRooms = Room::inRandomOrder()->take(3)->get();

        return view('home.index',compact('room','gallery','blogRooms'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {

        /* dd($request->all()); */

        $data = new Room;

        $data->room_title = $request->room_title;
        $data->price = $request->room_price;
        $data->description = $request->room_description;
        $data->wifi = $request->wifi;
        $data->room_type = $request->room_type;
        $data->image = $request->room_image;

        if ($request->hasFile('room_image')) {
            $image = $request->file('room_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('room'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back();
    }

    public function view_room()
    {
        $data = Room::all();
        return view('admin.view_room', compact('data'));
    }

    public function room_delete($id)
    {
        $data = Room::find($id);

        $image_path = public_path() . '/room/' . $data->image; 

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $data->delete();
        return redirect()->back();
    }

    public function room_update($id)
    {
        $data = Room::find($id);
        return view('admin.update_room', compact('data'));
    }

    public function edit_room(Request $request, $id)
    {
        $data = Room::find($id);

        $data->room_title = $request->room_title;
        $data->price = $request->room_price;
        $data->description = $request->room_description;
        $data->wifi = $request->wifi;
        $data->room_type = $request->room_type;
        $data->image = $request->room_image;

        if ($request->hasFile('room_image')) {
            $image = $request->file('room_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('room'), $imageName);
            $data->image = $imageName;
        }
        
        $data->save();
        return redirect()->back();
    }

    public function room_details($id){
        $data = Room::find($id);
        return view('home.room_details', compact('data'));
    }

    public function bookings(){
        $booked = Booking::all();
        return view('admin.bookings', compact('booked'));
    }

    public function delete_booking($id){
        $data = Booking::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function approve_status($id){
        $data =  Booking::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();

    }
    public function reject_status($id){
        $data =  Booking::find($id);
        $data->status = 'rejected';
        $data->save();
        return redirect()->back();

    }

    public function add_gallery(){
        $gallery = Gallery::all();
        return view('admin.gallery',compact('gallery'));
    }

    public function upload_image(Request $request){
        $data = new Gallery;

        $image = $request->image;
        if ($image) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gallery'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back();
    }

    public function delete__gal_img($id){
        $data = Gallery::find($id);
        $image_path = public_path() . '/gallery/' . $data->image; 

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $data->delete();
        return redirect()->back();
    }

    public function all_messages(){
        $data = Contact::all();
        return view('admin.all_messages',compact('data'));
    }

    public function send_mail($id){
        $data = Contact::find($id);
        return view('admin.send_mail',compact('data'));
    }

    public function mail(Request $request,$id){
        $data = Contact::find($id);
        $details = [
            'greeting' => $request->greeting,
            'mail_body' => $request->mail_body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'end_line' => $request->greeting,   
        ];

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('success','Mail Successfully Sent!!');
    }
}
