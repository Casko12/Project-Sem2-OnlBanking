<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_ql(){
        return view("admin.admin");
    }
    public function createAccount(Request $request,User $user){
        $user_id = session("user_id");

        $account= Account::all();
        $number = random_int(1000000000,9999999999);
        foreach ($account as $item){
            if ($number == $item->account_number){
                $number = random_int(1000000000,9999999999);
            }else{
                $user->update([
                    "status"=>1,
                ]);
                Account::create([
                    "account_number"=>$number,
                    "bank_id"=>1,
                    "user_id"=>$user_id,
                    "balance"=>0,
                    "status"=>1


                ]);
                return redirect()->to("admin/listuser");
            }
        }
                return redirect()->back();


    }
    public function listStaff(Request $request){
        $search =$request->get("search");
        $data = User::orderBy("id","desc")
            ->Search($search)
            ->where("name","like","%$search%")
            ->orWhere("email","like","%$search%")
            ->orWhere("national_id","like","%$search%")
            ->paginate(20);
        return view("admin.nhanvien.list",[
            "data"=>$data,
        ]);

    }
    public function createStaff(){
        return view("admin.nhanvien.create");
    }

    public function editStaff(User $user,Request $request){
        return view("admin.nhanvien.edit",compact("user"));
    }

    public function update(User $user,Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "email"=>"required|string|min:0",
            "address"=>"required|string|min:0",
            "telephone"=>"required|numeric",
            "national_id"=>"required|numeric",
            "birthday"=>"required|date",
            "image_face"=>"nullable|image|mimes:jpg,png,jpeg.gif",
            "image_id1"=>"nullable|image|mimes:jpg,png,jpeg.gif",
            "image_id2"=>"nullable|image|mimes:jpg,png,jpeg.gif"
        ],[
            "required"=>"Vui long nhap thong tin",
            "string"=>"Phai nhap 1 chuoi van ban",
            "min"=>"Phai nhap :attribute toi thieu :min",
            "mimes"=>"Nhap dung dinh dang anh"
        ]);

        $image_face = $user->image_face;
        if ($request ->hasFile("image_face")){
            $file = $request->file("image_face");
            $fileName = time().$file->getClientOriginalName();

            $path = public_path("uploads/image_faces");
            $file->move($path,$fileName);
            $image_face = "/uploads/image_faces/".$fileName;
        }
        $image_id1 = $user->image_id1;
        if ($request ->hasFile("image_id1")){
            $file = $request->file("image_id1");
            $fileName = time().$file->getClientOriginalName();

            $path = public_path("uploads/image_id1");
            $file->move($path,$fileName);
            $image_id1 = "/uploads/image_id1/".$fileName;
        }
        $image_id2 = $user->image_id2;
        if ($request ->hasFile("image_id2")){
            $file = $request->file("image_id2");
            $fileName = time().$file->getClientOriginalName();

            $path = public_path("uploads/image_id2");
            $file->move($path,$fileName);
            $image_id2 = "/uploads/image_id2/".$fileName;
        }
        $user->update([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "address"=>$request->get("address"),
            "telephone"=>$request->get("telephone"),
            "national_id"=>$request->get("national_id"),
            "birthday"=>$request->get("birthday"),
            "image_face"=>$image_face,
            "image_id1"=>$image_id1,
            "image_id2"=>$image_id2,
        ]);
        return redirect()->to("admin/liststaff");
    }
    public function detailStaff(User $user,Request $request){
        $user_id = $request->get("id");
        session(["user_id"=>$user_id]);
        return view("admin.user.detail",compact("user"));
    }
    public function listUser(Request $request){
        $search =$request->get("search");
        $data = User::orderBy("id","desc")
            ->Search($search)
            ->where("name","like","%$search%")
            ->orWhere("email","like","%$search%")
            ->orWhere("national_id","like","%$search%")
            ->paginate(20);
        return view("admin.user.list",[
            "data"=>$data,
        ]);
    }
    public function createUser(){
        return view("admin.user.create");
    }
    public function editUser(User $user,Request $request){
        return view("admin.user.edit",compact("user"));
    }
    public function updateStatusUser(User $user,Request $request){

        $user->update([
            "status"=>$request->get("passed")
        ]);
        return redirect()->to("admin/listuser");
    }
public function updateStatusStaff(User $user,Request $request){

        $user->update([
            "status"=>$request->get("passed")
        ]);
        return redirect()->to("admin/liststaff");
    }
}
