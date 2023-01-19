<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Symfony\Component\VarExporter\Internal\Values;
use App\Charts\GreenHouseChart;
use Chartisan\PHP\Chartisan;
use Chartisan\PHP\ServerData;

class FireBaseController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'details';
    }

    public function index(){ 

        return view('details');
    }

    public function store(Request $request){

        $current = Carbon::now();
        $datetime = $current->format('d-M-Y H:i:s');
        // dd($datetime);
        // $time = $current->format('H:i:s');
        // $date = $current->format('Y-m-d');

        $postData = [
            'light' => $request->light,
            'temperature' => $request->temperature,
            'humidity' => $request->humidity,
            'moisture' => $request->moisture,
            'ph' => $request->ph,
            'datetime' => $datetime,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

        if($postRef)
        {
            return redirect('test')->with('status','added details successfully');
        }else
        {
            return redirect('test')->with('status','added details failed');
        }
    }

    public function view(){
        
         $details = $this->database->getReference($this->tablename)->getValue();
         $count=count($details);
         $newArray=array();
         $i = 0;

         foreach(  $details as $item){
            $newArray[$i]['id']=$i+1;
            $newArray[$i]['datetime']=$item['datetime'];
            $newArray[$i]['temperature']=$item['temperature'];
            $newArray[$i]['humidity']=$item['humidity'];
            $newArray[$i]['moisture']=$item['moisture'];
            $newArray[$i]['ph']=$item['ph'];
            $newArray[$i]['light']=$item['light'];
            
            $i++;
         }

        return view('viewdetails',['details' => $newArray]);
    }

    public function temparature(){

        $details = $this->database->getReference($this->tablename)->getValue();
         $newArray1=array();
         $newArray2=array();
         $i = 0;

         foreach(  $details as $item){
            $newArray1[$i]=$item['datetime'];
            $newArray2[$i]=$item['temperature'];
            $i++;
         }
         $serverdata = new ServerData;
         $chart = new Chartisan($serverdata);
         $chart->labels($newArray1);
         $chart->dataset('temperature',$newArray2);

         $chart = $chart->toJSON();
                 

        return view('temputure',['chart' => $chart]);

    }

    public function single($id){

        $details = $this->database->getReference($this->tablename)->getValue();
        $count=count($details);
        $newArray=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray[$i][0]=$i+1;
           $newArray[$i][1]=$item['datetime'];
           $newArray[$i][2]=$item[$id];           
           $i++;
        }
       return view('singledetail',['details' => $newArray,'name' => $id]);


    }


    public function light(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['light'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('light',$newArray2);

        $chart = $chart->toJSON();
                

       return view('light',['chart' => $chart]);
    }
    
    public function humadity(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['humidity'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('humidity',$newArray2);

        $chart = $chart->toJSON();
                

       return view('humadity',['chart' => $chart]);

    }


    public function ph(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['ph'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('ph',$newArray2);

        $chart = $chart->toJSON();
                

       return view('ph',['chart' => $chart]);

    }

    public function constrartion(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['moisture'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('moisture',$newArray2);

        $chart = $chart->toJSON();
                

       return view('concetaration',['chart' => $chart]);

    }


// ...................concetaration and light...................

    public function concetarationlight(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['moisture'];
           $newArray3[$i]=$item['light'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('moisture',$newArray2);
        $chart->dataset('light',$newArray3);

        $chart = $chart->toJSON();
                

       return view('concetarationlight',['chart' => $chart]);

    }

// ...................concetaration and temperature...................

    public function concetarationtemperature(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['moisture'];
           $newArray3[$i]=$item['temperature'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('moisture',$newArray2);
        $chart->dataset('temperature',$newArray3);

        $chart = $chart->toJSON();
                

       return view('concetarationtemperature',['chart' => $chart]);

    }

// ...................concetaration and humadity...................

    public function concetarationhumadity(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['moisture'];
           $newArray3[$i]=$item['humidity'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('moisture',$newArray2);
        $chart->dataset('humidity',$newArray3);

        $chart = $chart->toJSON();
                

       return view('concetarationhumadity',['chart' => $chart]);

    }

// ...................light and humadity...................

    public function humaditylight(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['light'];
           $newArray3[$i]=$item['humidity'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('light',$newArray2);
        $chart->dataset('humidity',$newArray3);

        $chart = $chart->toJSON();
                

       return view('humaditylight',['chart' => $chart]);

    }

// ...................light and temperature...................

    public function temperaturelight(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['light'];
           $newArray3[$i]=$item['temperature'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('light',$newArray2);
        $chart->dataset('temperature',$newArray3);

        $chart = $chart->toJSON();
                

       return view('temperaturelight',['chart' => $chart]);

    }

    
// ...................humadity and temperature...................

    public function temperaturehumadity(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['humidity'];
           $newArray3[$i]=$item['temperature'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('humidity',$newArray2);
        $chart->dataset('temperature',$newArray3);

        $chart = $chart->toJSON();
                

       return view('temperaturehumadity',['chart' => $chart]);

    }


// ...................ph and temperature...................

public function phtemp(){

    $details = $this->database->getReference($this->tablename)->getValue();
    $newArray1=array();
    $newArray2=array();
    $i = 0;

    foreach(  $details as $item){
       $newArray1[$i]=$item['datetime'];
       $newArray2[$i]=$item['ph'];
       $newArray3[$i]=$item['temperature'];
       $i++;
    }
    $serverdata = new ServerData;
    $chart = new Chartisan($serverdata);
    $chart->labels($newArray1);
    $chart->dataset('ph',$newArray2);
    $chart->dataset('temperature',$newArray3);

    $chart = $chart->toJSON();
            

   return view('phtemp',['chart' => $chart]);

}


// ...................ph and humidity...................

public function phhum(){

    $details = $this->database->getReference($this->tablename)->getValue();
    $newArray1=array();
    $newArray2=array();
    $i = 0;

    foreach(  $details as $item){
       $newArray1[$i]=$item['datetime'];
       $newArray2[$i]=$item['ph'];
       $newArray3[$i]=$item['humidity'];
       $i++;
    }
    $serverdata = new ServerData;
    $chart = new Chartisan($serverdata);
    $chart->labels($newArray1);
    $chart->dataset('ph',$newArray2);
    $chart->dataset('humidity',$newArray3);

    $chart = $chart->toJSON();
            

   return view('phhum',['chart' => $chart]);

}

// ...................ph and moisture...................

public function phmoi(){

    $details = $this->database->getReference($this->tablename)->getValue();
    $newArray1=array();
    $newArray2=array();
    $i = 0;

    foreach(  $details as $item){
       $newArray1[$i]=$item['datetime'];
       $newArray2[$i]=$item['ph'];
       $newArray3[$i]=$item['moisture'];
       $i++;
    }
    $serverdata = new ServerData;
    $chart = new Chartisan($serverdata);
    $chart->labels($newArray1);
    $chart->dataset('ph',$newArray2);
    $chart->dataset('moisture',$newArray3);

    $chart = $chart->toJSON();
            

   return view('phmoi',['chart' => $chart]);

}


// ...................ph and light...................

public function phlig(){

    $details = $this->database->getReference($this->tablename)->getValue();
    $newArray1=array();
    $newArray2=array();
    $i = 0;

    foreach(  $details as $item){
       $newArray1[$i]=$item['datetime'];
       $newArray2[$i]=$item['ph'];
       $newArray3[$i]=$item['light'];
       $i++;
    }
    $serverdata = new ServerData;
    $chart = new Chartisan($serverdata);
    $chart->labels($newArray1);
    $chart->dataset('ph',$newArray2);
    $chart->dataset('light',$newArray3);

    $chart = $chart->toJSON();
            

   return view('phlig',['chart' => $chart]);

}


}
