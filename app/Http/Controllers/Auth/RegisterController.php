<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {


       // return
    }

    public function register(Request $request,User $user)
    {

        $this->validator($request->all())->validate();
            $image_face = $request->get("image_face");
//        dd($request);
        if ($request ->hasFile("image_face")){
            $file = $request->file("image_face");
            $fileName = time().$file->getClientOriginalName();

            $path = public_path("uploads/image_faces");
            $file->move($path,$fileName);
            $image_face = "/uploads/image_faces/".$fileName;
        }
            $image_id1 = $request->get("image_id1");
        if ($request ->hasFile("image_id1")){
            $file = $request->file("image_id1");
            $fileName = time().$file->getClientOriginalName();

            $path = public_path("uploads/image_id1");
            $file->move($path,$fileName);
            $image_id1 = "/uploads/image_id1/".$fileName;
        }
            $image_id2 = $request->get("image_id2");
        if ($request ->hasFile("image_id2")) {
            $file = $request->file("image_id2");
            $fileName = time() . $file->getClientOriginalName();

            $path = public_path("uploads/image_id2");
            $file->move($path, $fileName);
            $image_id2 = "/uploads/image_id2/" . $fileName;
        }
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'telephone' => $request['telephone'],
            'image_face' => $image_face,
            'image_id1' => $image_id1,
            'image_id2' => $image_id2,
            'address' => $request['address'],
            "status"=>$request["status"],
            'national_id' => $request['national_id'],
            'password' => Hash::make($request['password']),
            'pin'=>Hash::make($request['pin'])

        ]);
        event(new Registered($user));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }


}
