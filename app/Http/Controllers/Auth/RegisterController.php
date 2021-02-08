<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
    protected $redirectTo = '/';

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
            'profile_img' => ['file', 'image', 'mimes:jpeg,png,jpg,gif'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        //\Debugbar::info($data);

        //\Debugbar::addMessage($value);
        //dd($data);
        $imageFile = $data['profile_img'];

        //$imageFileからファイル名を取得(拡張子あり)
        $filenameWithExt = $imageFile->getClientOriginalName();

        //拡張子を除いたファイル名を取得
        $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //拡張子を取得
        $extension = $imageFile->getClientOriginalExtension();

        // ファイル名_時間_拡張子 として設定
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        //画像ファイル取得
        $fileData = file_get_contents($imageFile->getRealPath());

        //拡張子ごとに base64エンコード実施
        if ($extension = 'jpg'){
        $data_url = 'data:image/jpg;base64,'. base64_encode($fileData);
        }

        if ($extension = 'jpeg'){
        $data_url = 'data:image/jpg;base64,'. base64_encode($fileData);
        }

        if ($extension = 'png'){
        $data_url = 'data:image/png;base64,'. base64_encode($fileData);
        }

        if ($extension = 'gif'){
        $data_url = 'data:image/gif;base64,'. base64_encode($fileData);
        }

        //画像アップロード(Imageクラス makeメソッドを使用)
        $image = Image::make($data_url);

        //画像を横400px, 縦400pxにリサイズし保存
        $image->resize(400,400)->save(storage_path() . '/app/public/images/' . $fileNameToStore );
        // ---ここまで追加---




        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile'=>$data['profile'],
            'profile_img'=>$fileNameToStore,
        ]);

    }
}
