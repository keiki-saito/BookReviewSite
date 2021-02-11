<?php

namespace App\Http\Controllers;
use App\User;
use App\BookMark;
use App\Book;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{
    public function show($user_id)
    {
        $user = User::where('id', $user_id)
            ->firstOrFail();
         //追加
        $bookmarks = BookMark::where('user_id', $user_id)->get();


         // テンプレート「user/show.blade.php」を表示します。
        return view('user/show', compact('user','bookmarks'));
    }

    public function edit($id)
    {
        $user = User::findorFail($id);

        return view('user.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {

        $user = User::findorFail($id);

        if (!is_null($request['profile_img'])) {
            $imageFile = $request['profile_img'];

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
            if ($extension == 'jpg') {
                $data_url = 'data:image/jpg;base64,'. base64_encode($fileData);
            }

            if ($extension == 'jpeg') {
                $data_url = 'data:image/jpg;base64,'. base64_encode($fileData);
            }

            if ($extension == 'png') {
                $data_url = 'data:image/png;base64,'. base64_encode($fileData);
            }

            if ($extension == 'gif') {
                $data_url = 'data:image/gif;base64,'. base64_encode($fileData);
            }

            //画像アップロード(Imageクラス makeメソッドを使用)
            $image = Image::make($data_url);

            //画像を横400px, 縦400pxにリサイズし保存
            $image->resize(400, 400)->save(storage_path() . '/app/public/images/' . $fileNameToStore);
            // ---ここまで追加---

            $user->profile_img = $fileNameToStore;
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->profile = $request->profile;

        $user->save();

        return redirect('/');
    }

}
