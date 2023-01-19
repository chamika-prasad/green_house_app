<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;
use Illuminate\Http\Request;
use Symfony\Component\VarExporter\Internal\Values;

class UserController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename1 = 'user';
        $this->tablename2 = 'details';
    }

    public function signup(Request $request){

        $users = $this->database->getReference($this->tablename1)->getValue();


        foreach($users as $user){

            if($user['email'] == $request->email){
                return redirect()->back();
            }
        }

        $postData = [
        'email' => $request->email,
        'password' => $request->password,
    ];
    
    $postRef = $this->database->getReference($this->tablename1)->push($postData);

    return view('signin');

    }

    public function signin(Request $request){

        $users = $this->database->getReference($this->tablename1)->getValue();
        $newArray=array();

        foreach($users as $user){

            if($user['email'] == $request->email && $user['password'] == $request->password){

                $details = $this->database->getReference($this->tablename2)->getValue();

                foreach($details as $item){

                    $newArray[0]=$item['datetime'];
                    $newArray[1]=$item['temperature'];
                    $newArray[2]=$item['humidity'];
                    $newArray[3]=$item['moisture'];
                    $newArray[4]=$item['light'];
                    $newArray[5]=$item['ph'];

                }

                return view('current_values',['details' => $newArray]); 

            }
        }
        return view('signin');

    }

    public function refersher(){

        $details = $this->database->getReference($this->tablename2)->getValue();

                foreach($details as $item){

                    $newArray[0]=$item['datetime'];
                    $newArray[1]=$item['temperature'];
                    $newArray[2]=$item['humidity'];
                    $newArray[3]=$item['moisture'];
                    $newArray[4]=$item['light'];
                    $newArray[5]=$item['ph'];

                }

                return view('current_values',['details' => $newArray]); 

    }

}
